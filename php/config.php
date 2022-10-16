<?php

$host =	"localhost";
// Port	3306
$user = "root";
$password =	"root";
$db = "log_in_form";

$connessione = new mysqli ($host,$user,$password,$db);

if($connessione === false){

}die("Errore durante la connessione: " . $connessione->connect_error);

?>