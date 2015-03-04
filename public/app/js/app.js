
var app =  angular.module('poolApp',['ngRoute']);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/admin', {
                templateUrl: 'js/view/admin.html',
                controller: 'adminController'
            }).
            when('/view', {
                templateUrl: 'js/view/list.html',
                controller: 'poolController'
            }).
            otherwise({
                redirectTo: '/view'
            });
    }]);