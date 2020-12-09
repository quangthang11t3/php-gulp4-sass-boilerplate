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

  // Setting anchor link
  var anchorLink = function() {
    // Scroll to section
    $('a[href^="#"]').not("a[class*='carousel-control-']").click(function() {
      var href= $(this).attr("href");
      var hash = href == "#" || href == "" ? 'html' : href;
      var position = $(hash).offset().top - 100;
      $('body,html').stop().animate({scrollTop:position}, 1000);
      return false;
    });
  }


  /* --------------------
  RUN INIT
  --------------------- */
  var init = function() {
    // fix objectfit on IE
    anchorLink();
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
    $('.fadeup').each(function() {
      var elemPos = $(this).offset().top;
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('in');
      }
    });
    
  });


});