$(function() {

  /* --------------------
  GLOBAL VARIABLE
  --------------------- */
  // Selector
  var $selector01 = $('.js-selector01'),
      $selector01 = $('.js-selector02');

  // Init Value
  var breakpointSP = 767,
      breakpointTB = 1050,
      wWindow = $(window).outerWidth();


  /* --------------------
  FUNCTION COMMON
  --------------------- */
  // Task01
  var task01 = function() {
    console.log("Hello!");
  }


  /* --------------------
  RUN INIT
  --------------------- */
  var init = function() {
    // fix objectfit on IE
    objectFitImages();

    task01();
  }

  // Run all script when DOM has loaded.
  init();


  /* --------------------
  WINDOW ON RESIZE
  --------------------- */
  $(window).resize(function() {
    wWindow = $(window).outerWidth();
  });


  /* --------------------
  WINDOW ON SCROLL
  --------------------- */
  $(window).scroll(function() {
    var scroll = $(this).scrollTop();

    // Animation fadeinup
    $('.fadeinup').each(function() {
      var elemPos = $(this).offset().top;
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('in');
      }
    });
    
  });


});