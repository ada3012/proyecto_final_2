<?php
$serveer = "localhost";
$username = "root"; 
$password = "";
$database = "proyecto_final";
$conn = mysqli_connect($serveer, $username, $password, $database);  
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}   
echo "Conexión exitosa a la base de datos.";
$conn->close();
?>