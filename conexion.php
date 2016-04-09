<?php

$db_host = "localhost";
$db_usr = "root";
$db_pass = "#MUld3r3x";
$db_name = "flisol";


$link=mysqli_connect ($db_host, $db_usr, $db_pass, $db_name);

if(!$link){
    
	die('Error al conectarse a MySql:'.mysql_error()); 
}
?>