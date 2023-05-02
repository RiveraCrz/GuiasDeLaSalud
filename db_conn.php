<?php
/*Datos necesarios para crear la cadena de conexión a mysql*/
/*$sname= "localhost";
$unmae= "id20477104_guias_salud_user";
$password= "1)A}Qn(m7uyP??Hz";

$db_name = "id20477104_guias_salud";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "Connection failed!";
}*/
$sname= "localhost";
$unmae= "root";
$password= "";

$db_name = "guias_salud";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "Connection failed!";
}