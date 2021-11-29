<?php 
// Databse Variables
$Host       ='localhost';
$DBUser     ='kohliga';
$DBPass     ='Kohli@456';
$DB         ='kohliga_blogg';

//Create Connection

$Connection = new mysqli($Host, $DBUser, $DBPass, $DB);

//Check Connection
if($Connection->connect_error){
    die("Connection failed: " . $Connection->connect_error);
}

?>