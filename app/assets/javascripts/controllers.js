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
