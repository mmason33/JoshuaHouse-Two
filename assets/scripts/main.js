/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */
//AIzaSyDrbYW1mTUB45_lEuTwelpcSVzzen_Ul80
(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $(document).ready(function(){
            var body = $("body"),
                 navOverlay = $(".overlay"),
                 nav = $("nav#off-canvas-nav"),
                 navIcon = $("#nav-icon"),
                 subMenu = $("li.menu-item-has-children > a");
            navIcon.click(function(e) {
                e.preventDefault();
                $(this).toggleClass("open");
                body.toggleClass("nav-open");
                nav.toggleClass("open");
            });
            navOverlay.click(function() {
                navIcon.removeClass("open");
                body.removeClass("nav-open");
                nav.removeClass("open");
            });
            subMenu.click(function(drop) {
                drop.preventDefault();
                $(this).parent().toggleClass("open");
            });

            $(window).scroll( function () {
              if ($('.hero')) {
                $('.hero').css({
                  "opacity": 1 - $(window).scrollTop() / 300,
                  "z-index" : 0,
                  "top": 1 - $(window).scrollTop() / 10
                });
              }
            });

          });

          $.ajax({
            url: 'https://api.openweathermap.org/data/2.5/weather?lat=33.62&lon=-117.93&units=imperial&appid=9951bddf3af7e21abdb61ad50b4325a2',
            method: 'GET'
          }).done( function (response) {
            $('.weather').append(
              '<p class="white" style="margin:0;text-shadow:none;">Newport Beach |' +
              ' Forecast: ' + response.weather[0].main +
              '&nbsp;<img style="width:35px;" src="https://openweathermap.org/img/w/' + response.weather[0].icon + '.png">' +
              '<br/>T: ' + response.main.temp + '&deg; | ' +
              'RH: ' + response.main.humidity + '%</p>'
            );

          });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'insurance_verification': {
      init: function() {
        function multiStep(numberOfSteps, nextButtonClass, previousButtonClass, activateClass) {
          var currentStep = 1;
          $(nextButtonClass).click( function () {
            if (currentStep === 1) {
              $('.button-wrap').prepend('<button class="btn btn-primary previous">Previous Step</button>');
            }
            if (currentStep !== numberOfSteps) {
              currentStep++;
              $('.step-counter').text('Step ' + currentStep + ' of ' + numberOfSteps);
              $('.' + activateClass).removeClass(activateClass);
              $('#step-' + currentStep).addClass(activateClass);
            }
            if (currentStep === numberOfSteps) {
              $(nextButtonClass).hide();
            }
          });

          $(document).on('click', previousButtonClass, function () {
            if (currentStep === numberOfSteps) {
              $(nextButtonClass).show();
            }
            if (currentStep === 2) {
              $(previousButtonClass).hide();
            }
            if (currentStep !== 1) {
              currentStep--;
              $('.step-counter').text('Step ' + currentStep + ' of ' + numberOfSteps);
              $('.' + activateClass).removeClass(activateClass);
              $('#step-' + currentStep).addClass(activateClass);
            }
          });
        }//multiStep

        multiStep(6, '.next', '.previous', 'active');

        $('.form-date').focus( function () {
          $(this).attr({type: 'date'});
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
