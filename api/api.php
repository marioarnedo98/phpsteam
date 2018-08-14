<?php
$elementos = file_get_contents('https://steamspy.com/api.php?request=all'); //obtenemos los elementos
// echo "<pre>";
// var_dump($elementos);
// echo"</pre>";
$array= json_decode($elementos); //los decodificamos para un mayor manejo
// var_dump($array);
foreach ($array as $obj) { //los imprimimos a nuestro gusto
  $id_steam= $obj->appid;
  $juego = $obj->name;
  echo($id_steam ." ".$juego."<br>");
}

?>