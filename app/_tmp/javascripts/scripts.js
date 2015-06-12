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

'use strict';


var employeeServices = angular.module('employeeServices', ['ngResource']);

  employeeServices.factory('Employee', function($resource) {
    var Employee = $resource('/api/employees/:method/:id', {}, {
      query: {method:'GET', params: {method:'index'}, isArray:true },
      save: {method:'POST', params: {method:'save'} },
      get: {method:'GET', params: {method:'edit'} },
      remove: {method:'DELETE', params: {method:'remove'} }
    });

    Employee.prototype.update = function(cb) {
      return Employee.save({id: this.id},
        angular.extend({}, this, {id:undefined}), cb);
    };

    Employee.prototype.destroy = function(cb) {
      return Employee.remove({id: this.id}, cb);
    };

    return Employee;
  });

employeeServices.factory('Page', function(){
  var title = 'Employees';
  return {
    title: function() {
      return title;
    },
    setTitle: function( newTitle ) {
      title = newTitle;
    }
  };
});

var employeeDirectives = angular.module('employeeDirectives', []);

'use strict';

/* Controllers */

var employeeControllers = angular.module('employeeControllers', []);

employeeControllers.controller('ListCtrl', ['$scope','$window', '$routeParams', '$location', 'Page', 'Employee', 
  function($scope, $window, $routeParams, $location, Page, Employee) {
    Page.setTitle('Employees | Employee Directory');
    $scope.employees = Employee.query();

    $scope.destroy = function(Employee) {
      Employee.destroy(function() {
        $scope.employees.splice($scope.employees.indexOf(Employee), 1);
      });
    };
  }]);

employeeControllers.controller('CreateCtrl', ['$scope', '$location', 'Employee', 'Page',
  function($scope, $location, Employee, Page) {
    Page.setTitle('Add New Employee | Employee Directory');
    $scope.save = function() {
      Employee.save($scope.employee, function(employee) {
        $location.path('/edit/' + employee.id);
      });
    };
  }]);

employeeControllers.controller('EditCtrl', ['$scope', '$location', '$routeParams', 'Employee', 'Page',
  function($scope, $location, $routeParams, Employee, Page) {
    Page.setTitle('Edit Employee | Employee Directory');
    var self = this;

    Employee.get({id: $routeParams.id}, function(employee) {
      self.original = employee;
      $scope.employee = new Employee(self.original);
    });

    $scope.isClean = function() {
      return angular.equals(self.original, $scope.employee);
    };

    $scope.destroy = function() {
      self.original.destroy(function() {
        $location.path('/');
      });
    };

    $scope.save = function() {
      $scope.employee.update(function() {
        $location.path('/');
      });
    };
  }]);

employeeControllers.controller('MainCtrl', ['$scope', 'Page',
  function($scope, Page){
    $scope.Page = Page;

  }]);
