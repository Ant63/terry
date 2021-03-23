<?php
function taxonomy_node_get_terms($node, $key = 'tid') {
    static $terms;

    if (!isset($terms[$node->vid][$key])) {
        $query = db_select('taxonomy_index', 'r');
        $t_alias = $query->join('taxonomy_term_data', 't', 'r.tid = t.tid');
        $v_alias = $query->join('taxonomy_vocabulary', 'v', 't.vid = v.vid');
        $query->fields( $t_alias );
        $query->condition("r.nid", $node->nid);
        $result = $query->execute();
        $terms[$node->vid][$key] = array();
        foreach ($result as $term) {
            $terms[$node->vid][$key][$term->$key] = $term;
        }
    }
    return $terms[$node->vid][$key];
}

function tfc_preprocess_html(&$variables) {
    if(arg(0)=='node' && is_numeric(arg(1))) {
        $node = node_load(arg(1));
        $results = taxonomy_node_get_terms($node);
        if(is_array($results)) {
            foreach ($results as $item) {
               $variables['classes_array'][] = "taxonomy-".strtolower(drupal_clean_css_identifier($item->name));
            }
       }
   }
}

/**
 * Implements hook_preprocess_HOOK().
 */
function tfc_preprocess_node(&$variables) {
  // Only run this on resource pages.
  if ($variables['type'] == 'resource_page') {
    // Check there is a value set for resorces.
    if (isset($variables['content']['field_resources'])) {
      $node = node_load($variables['nid']);
      $items = field_get_items('node', $node, 'field_resources');
      // Build list of arguments for a view to display the list of resources.
      $arguments = [];
      foreach ($items as $item) {
        $arguments[] = $item['target_id'];
      }
    }
    foreach ($arguments as $argument) {
      $resource = node_load($argument);

      // Link options
      $options = array('absolute' => TRUE);

      $body_text =  isset($resource->field_description) ? 'field_description' : 'body';

      $resource_items[] = [
        'id' => $resource->nid,
        'title' => $resource->title,
        'image' => 	theme('image_style', array('path' => $resource->field_thumbnail[LANGUAGE_NONE][0]['uri'], 'style_name' => 'resource_thumbnail')),
        'description' => substr(strip_tags($resource->$body_text[LANGUAGE_NONE][0]['value']), 0, 142) . '...',
        'link' => $url = url('node/' . $resource->nid, $options),
      ];
    }
    $variables['resource_items'] = $resource_items;
  }
}

/**
 * Implements hook_form_FORM_ID_alter().
 */
function tfc_form_webform_client_form_1090_alter(&$form, &$form_state, $form_id) {
  $form['#attached']['js'] = array(
    drupal_get_path('theme', 'tfc') . '/js/form-switch.js',
  );
}
