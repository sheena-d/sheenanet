(function ($) {

Drupal.behaviors.sheenaFitText = {
  attach: function (context, settings) {
    $('#site-name .name').fitText(0.8);
  }
};  

})(jQuery);



