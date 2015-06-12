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
