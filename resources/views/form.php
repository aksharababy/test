<html>
<head>  
<title>AngularJS Resource</title>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-resource.js"></script>
</head>
<body >
<div ng-app="myApp" ng-controller="CrudController">

<form>

<table>

<tr>

<td>Name:</td>

<td><input type="text" ng-model="entry.name" placeholder="Enter your name"></td>

<td>Age:</td>

<td><input type="text" ng-model="entry.age" placeholder="Enter your age"></td>

<td></td><td><button  ng-click="addItem()"  class="btn btn-primary btn-sm">Add</button></td>

</tr>

</table>

</form><br>


<table>

<tr><b>List of Users</b></tr>

<thead><tr>
                      
<th>ID</th>
<th>Name</th>
<th>Age</th>
                              
</tr></thead>

 <tbody>
 <tr ng-repeat="x in forms">


 <td>{{x.id}}</td>
 <td>{{x.name}}</td>
 <td>{{x.age}}</td>
                             
<td><button type="button" ng-click="edit(x.id)" class="btn btn-success custom-width">Edit</button></td> 
<td><button type="button" ng-click="removeItem(x.id)" class="btn btn-danger custom-width">Remove</button></td>

</tr>
</tbody>

</table>
</div>
<script src="/js/controller.js"></script>
</body>
</html>
