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
      $variables['resource_args'] = implode(',', $arguments);
    }
  }
}

