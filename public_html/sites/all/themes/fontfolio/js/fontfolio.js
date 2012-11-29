/**
 * @file
 * JavaScript to perform fontFolio theme specific behaviors.
 *   - Compute gallery boxes liquid heights relative to their css 
 *     percentage widths.
 *   - Menu Icons: Enable the onClick toggling behavior for responsive Menu.
 */
(function ($) {
  $(document).ready(function(){
    // On page load and only for media queries scope (width up to 1024 px)
    if($(window).width() < 1025) {
      var postBoxWidthOld = $('.post_box').first().width();
      var postBoxHeightOld = Math.round(postBoxWidthOld*0.900355872);   
      var postBigBoxHeightOld = postBoxHeightOld*2;                                
      $('.post_box').css( 'max-height' , postBoxHeightOld  );
      $('.big_post_box').css( 'max-height' , postBigBoxHeightOld  );
    
      var postBoxWidth = $('.post-box').first().width();
      var postBoxHeight = Math.round(postBoxWidth*0.900355872);   
      var postBigBoxHeight = postBoxHeight*2;                                
      $('.post-box').css( 'max-height' , postBoxHeight  );
      $('.big-post-box').css( 'max-height' , postBigBoxHeight  );
    }
    // Update calculations if the user resize her browser window
    $(window).resize(function() {
      if($(window).width() < 1025) {
        var postBoxWidthOld = $('.post_box').first().width();
        var postBoxHeightOld = Math.round(postBoxWidthOld*0.900355872);   
        var postBigBoxHeightOld = postBoxHeightOld*2;                               
        $('.post_box').css( 'max-height' , postBoxHeightOld  );
        $('.big_post_box').css( 'max-height' , postBigBoxHeightOld  );
      
        var postBoxWidth = $('.post-box').first().width();
        var postBoxHeight = Math.round(postBoxWidth*0.900355872);   
        var postBigBoxHeight = postBoxHeight*2;                               
        $('.post-box').css( 'max-height' , postBoxHeight  );
        $('.big-post-box').css( 'max-height' , postBigBoxHeight  );
      }
      else {
        if ($('.big_post_box').css('max-height')) {
          $('.big_post_box').removeAttr('style');
        }
        if ($('.post_box').css('max-height')) {
          $('.post_box').removeAttr('style');
        }
        if ($('.big-post-box').css('max-height')) {
          $('.big-post-box').removeAttr('style');
        }
        if ($('.post-box').css('max-height')) {
          $('.post-box').removeAttr('style');
        }
      }
    });
    // Menu Icons toggle.
    $('a.toggle-nav').click(function(){
      $('nav.menu_cont').toggleClass('open');
      $('#header_top .search.open').toggleClass('open');
      $('#header.search-open').toggleClass('search-open');
    });
    $('a.toggle-search').click(function(){
      $('#header_top .search').toggleClass('open');
      $('#header').toggleClass('search-open');
      $('nav.menu_cont.open').toggleClass('open');
    });
  });
})(jQuery);
