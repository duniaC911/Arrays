<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>EJERCICIO 1</p>
<?php
$datos = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>23, "ciudad"=>"Barcelona");
$counter = 1;
foreach ($datos as $x => $y) {
  echo "dato" . $counter . "º: " . $y . "<br>";
 $counter ++;
}
?>  

<p>EJERCICIO 2</p>
<?php
foreach ($datos as $x => $y) {
  echo "$x: $y <br>";
}
?>

<p>EJERCICIO 3</p>
<?php
$datos["edad"] = 24;
foreach ($datos as $x => $y) {
  echo "$x: $y <br>";
}
?>

<p>EJERCICIO 4</p>
<?php
unset($datos['ciudad']);
$datos["edad"] = 24;
var_dump($datos);
?>

<p>EJERCICIO 5</p>
<?php
$counter2 = 6;
$letters = " a,b,c,d,e,f";
$array = explode("," , $letters);
rsort($array);
foreach ($array as $x => $y) {
  echo "letter ". $counter2 . ": " . $y . "<br>";
  $counter2 -- ;
} 
?>

<p>EJERCICIO 6</p>
<?php
$notas = ["Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8,  "Aitor" => 4, "Pepe" => 1];
arsort ($notas); 
 echo "Notas de los estudiantes: " ;
 foreach ($notas as $x => $y){
  echo  " $x: $y";
 }
?>

<p>EJERCICIO 7</p>
<?php
$notaMedia =  array_sum($notas)/ count($notas);
 echo "Media de las notas: " . number_format($notaMedia,2) . "<br>";
 echo  "Alumnos con nota por ncima de la media: " . "<br>";
 foreach ($notas as $nombre => $nota){
  if ($nota > $notaMedia) {
    echo  " $nombre ". "<br>";
  }
 }
?>

<p>EJERCICIO 8</p>
<?php
$notaMax = max($notas);
$mejorAlumno = array_search($notaMax, $notas);
echo "La nota más alta es " .  $notaMax . " y el mejor alumno es " . $mejorAlumno . "<br>";
?>
</body>
</html>