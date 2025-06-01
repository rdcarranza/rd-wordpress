(function ($) {
  "use strict";

  var $window = $(window),
    $body = $('body');

  // Preloader
  $window.on('load', function () {
    setTimeout(function () {
      $body.addClass('loaded');
    }, 2500);
  });

  // Back To Top
  var toggleHeight = $window.outerHeight();

  $window.scroll(function () {
    if ($window.scrollTop() > toggleHeight) {
      $(".m-backtotop").addClass("active");
      $('h1 span').text('TA-DA! Now hover it and hit dat!');
    } else {
      $(".m-backtotop").removeClass("active");
      $('h1 span').text('(start scrolling)');
    }
  });

  $(".m-backtotop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  // Smooth Scroll
  $('.down-home-scroll, .btn-hire-contact, .logo-home').on('click', function (event) {
    var $anchor = $(this);
    if ($($anchor.attr('href')).length) {
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 70
      }, 1000);
    }
    event.preventDefault();
  });

  // Wait for document to be ready before initializing other scripts
  $(document).ready(function () {
    // Testimonial Slider
    if ($('.testimonial-slider').length) {
      $('.testimonial-slider').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: true,
        smartSpeed: 1200,
        autoplay: true,
        navText: ["<i class='fa fa-reply fa-2x'></i>", "<i class='fa fa-share fa-2x'></i>"],
        responsive: {
          0: { items: 1 },
          600: { items: 1 },
          1000: { items: 1 }
        }
      });
    }

    // Initialize WOW.js
    if (typeof WOW !== "undefined") {
      new WOW({ mobile: false }).init();
    }

    // Lightbox Popup
    if (typeof lightbox !== "undefined") {
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
      });
    }

    // Slider Items
    if ($(".carousel-single-item").length) {
      $(".carousel-single-item").owlCarousel({
        loop: true,
        center: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4500,
        smartSpeed: 950,
        responsive: {
          0: { items: 1 },
          600: { items: 1 },
          1000: { items: 1 }
        }
      });
    }
  });

})(jQuery);
