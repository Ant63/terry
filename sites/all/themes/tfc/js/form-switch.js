(function ($) {
  Drupal.behaviors.switchForm = {
    attach: function (context) {
      console.log('Hello');
      $( ".webform-submit" ).click(function() {
        $( document ).ajaxComplete(function( event, xhr, settings ) {
          $( "#block-webform-client-block-1090" ).hide();
          $( "#downloader" ).show();
        });
      });
    }
  }
}(jQuery));
