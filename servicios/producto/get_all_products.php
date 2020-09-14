<?php

require_once "../conexion.php";
$response = new stdClass();

$datos = [];
$i = 0;
$consulta = "SELECT * FROM producto WHERE estado = 1";
$resultado = mysqli_query($con, $consulta);

while($row = mysqli_fetch_array($resultado)){
    $obj = new stdClass();
    $obj->codpro = $row['codpro'];
    $obj->nompro = $row['nompro'];
    $obj->despro = $row['despro'];
    $obj->prepro = $row['prepro'];
    $obj->rutimapro = $row['rutimapro'];
    $datos[$i] = $obj;
    $i++;
}

$response->datos = $datos;

mysqli_close($con);
header("Content-Type : application/json");
echo json_encode($response);