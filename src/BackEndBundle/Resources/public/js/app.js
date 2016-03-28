/**
 * INSPINIA - Responsive Admin Theme
 *
 */
(function () {
    angular.module('inspinia', [
        'ui.router',                    // Routing
        'oc.lazyLoad',                  // ocLazyLoad
        'ui.bootstrap',                 // Ui Bootstrap
        'pascalprecht.translate',       // Angular Translate
        'ngIdle',                       // Idle timer
        'ngSanitize',
        'stpa.modal',
        'angular.chosen',
        'oitozero.ngSweetAlert',
        'ngTable',
        'uiGmapgoogle-maps',
        'ngValidate'

    ])
})();

// Other libraries are loaded dynamically in the config.js file using the library ocLazyLoad