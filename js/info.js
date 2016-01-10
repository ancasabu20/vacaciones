

var app = angular.module("app", ["ngResource"]);
//con dataResource  para leer el json
app.controller("appController", function ($scope, $http, dataResource) {
    var id = document.getElementById("id_activity").value; 
    //datosResource  con la informacion del archivo
    $scope.datosResource = dataResource.query();
      $http.get("../js/activity"+id+".json").success(function (data) {

        //variables donde se obtiene la fecha inicial y fecha final
         endDate = data.beginDate;
         startDate = data.endDate; 
         
         //Funcion que permite calcular el numero de dias entre las 2 fechas
         $scope.$watch(function() {
            return Math.floor((new Date(startDate) - new Date(endDate)) / 86400000);
         }, function(days) {
            //retorna la cantidad de dias
            $scope.numberOfDays = days;  
        });

        if(data.approved==1){
            $scope.value1 = true;
        }
    });
   
    //Funcion que permite la actualización de el estado de la solicitud
     $scope.update= function() {
       
        if($scope.value1==true){
            estado=1;
        }else{
            estado=0;
        }
       
        $.ajax({url:"update.php",type:"POST",data:{
                    "estado": estado,"id":id
            },
            success: function(response){
             if(estado==0){
                alert('Solicitud Rechazada');
            }else{
                alert('Solicitud Aprobada');
            }     
             
        // put on console what server sent back...
        }
        })

        

     }
   
    
})
 
 
app.factory("dataResource", function ($resource) {
    var id = document.getElementById("id_activity").value;
   
    return $resource("../js/activity"+id+".json", //url de la actividad
        {},  
        { query: {method:'GET', params:{File:'Json'}, isArray:false},
        update: {method:'PUT', params:{File:'Json'}}
    })
})