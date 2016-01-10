<?php
$estado=$_REQUEST['estado'];
$id=$_REQUEST['id'];

//Actualizar archivo general
$jsonString2 = file_get_contents("../js/inbox.json");
$data2 = json_decode($jsonString2);
foreach ($data2 as $key => $value) {

  if($value->activityId == $id) {
  	
  	$value->approved = $estado;  
  	$actualizado=1;
  	}

}	
$newJsonString2 = json_encode($data2);
 
if($actualizado==1){
file_put_contents("../js/inbox.json", $newJsonString2);
 
//Actualiza el archivo de la actividad
$jsonString = file_get_contents("../js/activity".$id.".json");
$data = json_decode($jsonString);
$data->approved = $estado;  
$newJsonString = json_encode($data);
file_put_contents("../js/activity".$id.".json", $newJsonString);
}

 echo json_encode(array("rta"=>true));

?>
