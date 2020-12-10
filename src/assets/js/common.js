$(function() {

  /* --------------------
  GLOBAL VARIABLE
  --------------------- */
  // Selector
  // var $pageTop = $('.js-pageTop');

  // Init Value
  var breakpointSP = 767,
      breakpointTB = 1050,
      wWindow = $(window).outerWidth();


  /* --------------------
  FUNCTION COMMON
  --------------------- */
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

  // Animation scroll to top
  var clickPageTop = function() {
    var $pageTop = $('.js-pageTop');
    $pageTop.click(function(e) {
      $('html,body').animate({ scrollTop: 0 }, 300);
    });
  }

  // Trigger Pagetop
  var triggerPageTop = function() {
    var $pageTop = $('.js-pageTop');
    if ($(this).scrollTop() > 200) {
      $pageTop.addClass('active');
    } else {
      $pageTop.removeClass('active');
    }
  }  


  // Trigger Accordion
  var triggerAccordion = function() {
    var $accorLabel = $('.js-accorLabel'),
        $accorCnt = $('.js-accorCnt');
    $accorLabel.click(function () {
      $(this).toggleClass('active').siblings($accorCnt).slideToggle();
    });   
  }  



  /* --------------------
  INIT (WINDOW ON LOAD)
  --------------------- */
  // Run all script when DOM has loaded
  var init = function() {
    anchorLink();
    objectFitImages();
    clickPageTop();
    triggerAccordion();
  }

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
    $('.fadeup').each(function() {
      var elemPos = $(this).offset().top;
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 100) {
        $(this).addClass('in');
      }
    });

    triggerPageTop();
  });

});