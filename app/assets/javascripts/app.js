'use strict';

/* App Module */

var employeeApp = angular.module('employee', [
  'ngRoute',
  'employeeControllers',
  'employeeDirectives',
  'employeeServices',
  'ui.bootstrap'
]);

employeeApp.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider){
    $locationProvider.html5Mode(true);
    $locationProvider.hashPrefix('!');
    $routeProvider.
      when('/', {
        templateUrl:'/employees/template_list',
        controller: 'ListCtrl',
      }).
      when('/hr', {
        templateUrl:'/employees/template_hr',
        controller: 'ListCtrl',
      }).
      when('/edit/:id', {
        templateUrl:'/employees/template_detail',
        controller: 'EditCtrl'
      }).
      when('/new', {
        templateUrl:'/employees/template_detail',
        controller: 'CreateCtrl'
      }).
      otherwise({
        redirectTo:'/'
      });
  }]);
