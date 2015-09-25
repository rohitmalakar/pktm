$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	items: 1,
  	loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    navigation:true,
    nav: true,
    singleItem: true,
    autoheight: true,
  });
   $('.owl-pagination .owl-page, .owl-buttons div').on('click',function(){
        $('.owl-item div').css('height',$('.owl-item div').css('height'));
    });
  
   var windowheight = $(window).height();
   $('.full-page-content').height(windowheight);

});
// window resize full screen div
$(window).resize(function() {
  var windowheight = $(window).height();
   $('.full-page-content').height(windowheight);
});

  // FOR owlCarousel
$(document).ready(function() {
 
  // FOR NAV owlCarousel
  var owl = $("#date-carousel");
 
  owl.owlCarousel({
      items : 5, //10 items above 1000px browser width
      // itemsDesktop : [1000,5], //5 items between 1000px and 901px
      // itemsDesktopSmall : [900,3], // betweem 900px and 601px
      // itemsTablet: [600,2], //2 items between 600 and 0
      // itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      nav: true,
  });

  // FOR NAV owlCarousel
  var owl = $("#event-carousel");
 
  owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      // itemsDesktop : [1000,5], //5 items between 1000px and 901px
      // itemsDesktopSmall : [900,3], // betweem 900px and 601px
      // itemsTablet: [600,2], //2 items between 600 and 0
      // itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      nav: true,
  });

  // FOR NAV owlCarousel
  var owl = $("#exibition-carousel");
 
  owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      // itemsDesktop : [1000,5], //5 items between 1000px and 901px
      // itemsDesktopSmall : [900,3], // betweem 900px and 601px
      // itemsTablet: [600,2], //2 items between 600 and 0
      // itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      nav: true,
  });

});