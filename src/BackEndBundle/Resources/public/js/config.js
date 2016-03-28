/**
 * INSPINIA - Responsive Admin Theme
 *
 * Inspinia theme use AngularUI Router to manage routing and views
 * Each view are defined as state.
 * Initial there are written state for all view in theme.
 *
 */
function config($stateProvider, $urlRouterProvider, $ocLazyLoadProvider, IdleProvider, KeepaliveProvider) {

    // Configure Idle settings
    IdleProvider.idle(5); // in seconds
    IdleProvider.timeout(120); // in seconds

    $urlRouterProvider.otherwise("/dashboards/comentarios");

    $ocLazyLoadProvider.config({
        // Set to true if you want to see what and when is dynamically loaded
        debug: false
    });

    $stateProvider

        .state('dashboards', {
            abstract: true,
            url: "/dashboards",
            templateUrl: "/app_dev.php/es/backend/dashboard",
        })
        .state('dashboards.comentarios', {
            url: "/comentarios",
            templateUrl: "/app_dev.php/es/backend/comments",
        })
        //.state('projects', {
        //    abstract: true,
        //    url: "/projects",
        //    templateUrl: "/app_dev.php/dashboard",
        //})
        //.state('projects.project_manager', {
        //    url: "/manager",
        //    templateUrl: "/app_dev.php/backend/main_project",
        //})
        //.state('modules', {
        //    abstract: true,
        //    url: "/modules",
        //    templateUrl: "/app_dev.php/dashboard",
        //})
        //.state('modules.modules_manager', {
        //    url: "/manager",
        //    templateUrl: "/app_dev.php/backend/modules",
        //})
        ;

}
angular
    .module('inspinia')
    .config(config)
    .run(function($rootScope, $state) {
        $rootScope.$state = $state;
    });
