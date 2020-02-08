jQuery(function($) {

  'use strict';

  var ENHANCEMENTS;

  // ================================
  // Enhancements
  // ================================

    ENHANCEMENTS = {

    init: function() {
      this.searchButton(),
      this.quickPropertyTitle();
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
    }

  };
  
  ENHANCEMENTS.init();

}); //jQuery