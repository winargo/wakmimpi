$(function(){
 var shrinkHeader = 50;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.header').addClass('shrink');
          $('.Logo-format').addClass('shrink-logo');
          $('.initiate-session').addClass('shrink-form');
      }
        else {
            $('.header').removeClass('shrink');
            $('.Logo-format').removeClass('shrink-logo');
            $('.initiate-session').removeClass('shrink-form');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});