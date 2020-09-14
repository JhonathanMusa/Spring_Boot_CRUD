<?php

// Parametros
$host = "localhost";
$user = "root";
$password = "";
$database = "sistema_ecommerce";

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error){
    die("Error al conectar con el servidor" . $con->connect_error);
}