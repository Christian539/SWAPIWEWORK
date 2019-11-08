<?php
$data = json_decode(file_get_Contents('https://swapi.co/api/people/'));

 foreach ($data->results as $data){
 echo "$data->name<br/>";	
 }  //echo $data;
?>
