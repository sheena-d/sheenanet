(function ($) {
Drupal.behaviors.sheenaMasonry = {
  attach: function (context, settings) {
        
        $('#main').masonry({
          itemSelector : 'article.node-teaser'
        });
        
        $('#main').infinitescroll({
          navSelector : 'ul.pager',
          nextSelector : '.pager-next a',
          itemSelector : 'article.node-teaser'
        }, 
        function(newElements){
          var $newElems = $( newElements );
          $('#main').masonry('appended', $newElems);
      });
  }
};

Drupal.behaviors.sheenaArticleOverlay = {
  attach: function(context, settings) {
    $('article.node-teaser .overlay').hide();
    
    $('article.node-teaser').mouseOver()
  }
};
})(jQuery);