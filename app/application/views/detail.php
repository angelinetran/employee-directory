<form name="myForm" class="form-horizontal">
  
  <div class="control-group" ng-class="{error: myForm.name.$invalid}">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input class="form-control" type="text" name="name" id="name" ng-model="employee.name" required>
      <span ng-show="myForm.name.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="control-group" ng-class="{error: myForm.job.$invalid}">
    <label class="control-label" for="job">Job Title</label>
    <div class="controls">
      <input class="form-control" type="text" name="job" id="job" ng-model="employee.job" required>
      <span ng-show="myForm.job.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="control-group" ng-class="{error: myForm.location.$invalid}">
    <label class="control-label" for="location">Location</label>
    <div class="controls">
      <input class="form-control" type="text" name="location" id="location" ng-model="employee.location" required>
      <span ng-show="myForm.location.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="control-group" ng-class="{error: myForm.email.$invalid}">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input class="form-control" type="email" name="email" id="email" ng-model="employee.email" required>
      <span ng-show="myForm.email.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="control-group" ng-class="{error: myForm.cellPhone.$invalid}">
    <label class="control-label" for="cellPhone">Cell Phone</label>
    <div class="controls">
      <input class="form-control" type="text" name="cellPhone" id="cellPhone" ng-model="employee.cellPhone" required>
      <span ng-show="myForm.cellPhone.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="control-group" ng-class="{error: myForm.workPhone.$invalid}">
    <label class="control-label" for="workPhone">Work Phone</label>
    <div class="controls">
      <input class="form-control" type="text" name="workPhone" id="workPhone" ng-model="employee.workPhone" required>
      <span ng-show="myForm.workPhone.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="form-actions">
    <button ng-click="save()" ng-disabled="isClean() || myForm.$invalid" class="btn btn-primary"><i class="icon-ok icon-white"></i> Save</button>
    <a href="/" class="btn btn-link">Cancel</a>
    <button ng-click="destroy()" ng-show="employee.id" class="btn btn-danger pull-right"><i class="icon-trash icon-white"></i> Delete</button>
  </div>
  
</form>