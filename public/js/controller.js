var app=angular.module('myApp',['ngResource']);
app.controller('CrudController',['$scope','$http','Entry',function($scope,$http, Entry) {


   
  $scope.entry={};

  $scope.forms=Entry.query();
  console.log($scope.forms); 
  


  $scope.addItem = function() {
  console.log($scope.entry);
  Entry.save($scope.entry, function(Data) { 
  alert("Entry added Successfully"); 
  });
  }; 



$scope.removeItem = function (id) {
  console.log(id);


    };




}]);


app.factory('Entry', function($resource) {
return $resource('/entries/:id', { id: '@id' }, {
    'update': {
      method: 'PUT' 
    },
    'query':  {
      method:'GET', isArray:true},

       'remove': {
        method: "DELETE"},
    
  });
});



