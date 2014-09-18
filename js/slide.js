jQuery(window).load(function() {

  // jQuery('#slidebox').flexslider({
  //   animation: "fade",
  //   directionNav:true,
  //   controlNav:false
  // });
  
  // jQuery('.screenshots').flexslider({
  //   animation: "fade",
  //   directionNav:true,
  //   controlNav:false
  // });
  
  jQuery('#web-slides').flexslider({
    animation: "slide",
    slideshow: false,
    manualControls: "#web-slides-nav .nav-item", //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
    animationLoop: false, 
  });

  jQuery('#app-slides').flexslider({
    animation: "slide",
    slideshow: false,
    manualControls: "#app-slides-nav .nav-item", //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
    animationLoop: false, 
  });

});