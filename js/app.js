//Uso angular js, para cargar la data de inbox
var app = angular.module("app", ["ngResource"]);
app.controller("appController", function ($scope, $http, dataResource) {
   
     $scope.datosResource= dataResource.get();
     $http.get("js/inbox.json").success(function (data) {
     	$scope.list = [];
  		angular.forEach($scope.datosResource, function(value, key) {
         
  		if(value.approved==0){
  			value.approved="img/bullet_delete.png";
  		}else{
  			value.approved="img/bullet_add.png";
  		}
  		
     	
		});
		 
      });
       
       
     //Funcion para consultar la informacion de la actividad   
     $scope.edit = function(id) {
           window.location.href ='views/info.php?id='+id;
            
        }

    })

//Consumir info
app.factory("dataResource", function ($resource) {
    return $resource("js/inbox.json", //la url donde queremos consumir
        {},  
        { get: { method: "GET", isArray: true }
    })
})
 