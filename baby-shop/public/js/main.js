jQuery(document).ready(function($){
      $('.menu-bars').click(function(){
            $('.wide-nav').addClass('wide-display');
      });
      $('.exit').click(function(){
            $('.wide-nav').addClass('wide-hide');
      });
});

jQuery(document).ready(function($){
      $('.success-flash').fadeOut(2000);
});