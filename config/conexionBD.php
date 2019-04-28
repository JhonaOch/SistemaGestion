<?php
 $servername = "localhost:3309";
 $username = "root";
 $password = "";
 $dbname = "hypermedial";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Conexión fallida!! " . $conn->connect_error);
 }else{
 echo "Conexión exitosa!! :)";
 }
?>