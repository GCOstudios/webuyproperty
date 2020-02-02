jQuery(function($) {

  'use strict';

  var ENHANCEMENTS;

  // ================================
  // Enhancements
  // ================================

    ENHANCEMENTS = {

    init: function() {
      this.quickPropertyTitle();
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