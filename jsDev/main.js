jQuery(function($) {

  'use strict';

  var ENHANCEMENTS;

  // ================================
  // Enhancements
  // ================================

    ENHANCEMENTS = {

    init: function() {
      this.headerOpacity(),
      this.searchButton(),
      this.quickPropertyTitle(),
      this.customBodyClass(),
      this.animations();
    },

    // Change header opacity on scroll
    // ==============================================
    headerOpacity: function() {
      var $header = $('.site-header');

      $(window).on('scroll', function() {
        var $scroll = $(window).scrollTop();

        if ($scroll >= 300) {
          $header.addClass('darken-header');
        } else {
          $header.removeClass('darken-header');
        }
      });
    },

    // Navigation auto-close on click
    // ==============================================
    searchButton: function() {
      $('.search-button').on('click', function() {
        $('body').addClass('search-is-active');
      });

      $('.close-search').on('click', function() {
        $('body').removeClass('search-is-active');
      });
    },

    // Navigation auto-close on click
    // ==============================================
    quickPropertyTitle: function() {
      var $quickTitle = $('.quick-section-container .quick-section-title');

      $('.quick-section-container').prepend($quickTitle);
    },

    // Custom body classes
    // ==============================================
    customBodyClass: function() {
      var $about = $('.about-us-child').length,
          $howItWorks = $('.how-it-works-child').length,
          $whyChoose = $('.why-choose-us-child').length,
          $contactUs = $('.contact-us-child').length,
          $body = $('body');

      if ($about) {
        $body.addClass('about-us');
      } else if ($howItWorks) {
        $body.addClass('how-it-works');
      } else if ($whyChoose) {
        $body.addClass('why-choose-us');
      } else if ($contactUs) {
        $body.addClass('contact-us');
      }
    },

    // AOS animations
    // ==============================================
    animations: function() {
      $('.fade-up').attr('data-aos', 'fade-up');
      $('.fade-right').attr('data-aos', 'fade-right');
      $('.fade-down').attr('data-aos', 'fade-down');
      $('.fade-left').attr('data-aos', 'fade-left');
      $('.fade-in').attr('data-aos', 'fade-in');

      setTimeout(function() {
        AOS.init({
          offset: 200,
          duration: 800,
          delay: 100,
        });
      }, 300);
    }

  };
  
  ENHANCEMENTS.init();

}); //jQuery