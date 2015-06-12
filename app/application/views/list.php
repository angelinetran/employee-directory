 <div class="input-group input-group-lg">
      <input type="text" ng-model="search" class="search-query form-control" placeholder="Search" aria-describedby="sizing-addon1">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search</button>
      </span>
    </div><!-- /input-group -->

<table class="table table-hover mobile-hide">
  <thead>
  <tr>
    <th>Name</th>
    <th>Job Title</th>
    <th>Location</th>
    <th>Email</th>
    <th>Cell Phone</th>
    <th>Work Phone</th>
  </tr>
  </thead>
  <tbody>
  <tr ng-repeat="employee in employees | filter:search | orderBy:'name'">
    <td>{{employee.name}}</td>
    <td>{{employee.job}}</td>
    <td>{{employee.location}}</td>
    <td>{{employee.email}}</td>
    <td>{{employee.cellPhone}}</td>
    <td>{{employee.workPhone}}</td>
  </tr>
  </tbody>
</table>

<div class="mobile">
  <a class="btn btn-success btn-small add" href="/new">Add Employee</a>

  <div ng-repeat="employee in employees | filter:search | orderBy:'name'">


    <p><strong>Name: </strong> {{employee.name}}</p>
    <p><strong>Job Title: </strong> {{employee.job}}</p>
    <p><strong>Location: </strong> {{employee.location}}</p>
    <p><strong>Email: </strong> {{employee.email}}</p>
    <p><strong>Cell Phone: </strong> {{employee.cellPhone}}</p>
    <p><strong>Work Phone: </strong> {{employee.workPhone}}</p>
    <hr>
  </div>

</div>


<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>