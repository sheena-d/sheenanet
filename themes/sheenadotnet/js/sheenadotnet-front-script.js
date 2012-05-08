(function ($) {
Drupal.behaviors.sheenaMasonry = {
  attach: function (context, settings) {
        var $container;
        var $pgCount = 0;
        var $pgNum = $('ul.pager li.pager-item').size();
        
        $('article.node-teaser .inner').hover(
         function() {
           $(this).find('.overlay').fadeIn();
         },
         function() {
           $(this).find('.overlay').fadeOut();
         }
         );
        
        function triggerMasonry() {
          if (!$container) {
            return
          }
          $container.masonry({
            itemSelector : 'article.node-teaser'
          });
        }
        
        $(function() {
          $container = $('#main');
          triggerMasonry();
        });
        
        Typekit.load({
          active: triggerMasonry,
          inactive: triggerMasonry
        });
        
        $('#main').infinitescroll({
          navSelector : 'ul.pager',
          nextSelector : '.pager-next a',
          itemSelector : 'article.node-teaser',
          donetext : "nothing to see here..."
        }, 
        function(newElements){
          var $newElems = $( newElements );
          $pgCount ++;
          
          if($pgCount == $pgNum) {
            $(window).unbind('.infscr');
            $('#main').append('<div class="scrollEmpty">Nothing more to see here</div>');
          }
          
          $('#main').masonry('appended', $newElems);
          
          $('article.node-teaser .inner').hover(
           function() {
             $(this).find('.overlay').fadeIn();
           },
           function() {
             $(this).find('.overlay').fadeOut();
           }
           );
      });
  }
};

})(jQuery);