<?php

/*require_once '../includes/conexion.php';

define('API_VERSION','v1.0');

$uri = explode(API_VERSION.'/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1];

$uri_array = explode('/',$uri);

$recurso = array_shift($uri_array);

$operacion = strtolower($_SERVER['REQUEST_METHOD']);

$vista = 'json';

$salida = array();

$http_code = 404;


$serverNombre = "localhost";
$userNombre = "root";
$password = "";
$dbNombre = "gti_ejemplo";
// Crear la conexión
$conn = mysqli_connect($serverNombre, $userNombre, $password, $dbNombre);

switch ($operacion) {
    case 'get':
        $sql = 'SELECT * FROM `ventas`';
        $res = mysqli_query($conexion, $sql);
        $resultado = array();
        while($fila = mysqli_fetch_assoc($res)){
            array_push($resultado, $fila);
        }
        break;
}




$sql = 'SELECT vendedores.nombre as nombreVendedor, vendedores.apellidos as apellidosVendedor,clientes.nombre as nombreCliente, ventas.* FROM `ventas`, vendedores, clientes WHERE ventas.vendedor = vendedores.id AND ventas.cliente = clientes.id';

$res = mysqli_query($conexion, $sql);
$resultado = array();
while($fila = mysqli_fetch_assoc($res)){
$vendedor = array("id" => $fila["vendedor"], "nombre" => $fila["nombreVendedor"], "apellidos" => $fila["apellidosVendedor"]);
$cliente = array("id" => $fila["cliente"], "nombre" => $fila["nombreCliente"]);
$fila["vendedor"] = $vendedor;
$fila["cliente"] = $cliente;
unset($fila["nombreVendedor"]);
unset($fila["apellidosVendedor"]);
unset($fila["nombreCliente"]);
array_push($resultado, $fila);
}

// Chequear la conexión
if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `ventas`";

$res = mysqli_query($conn, $sql);
$output = array();
/*if (mysqli_num_rows($res) > 0) {
// procesar cada fila

   while($row = mysqli_fetch_assoc($res)) {
        echo "id: " . $row["id"]. " - Nombre: " .
            $row["nombre"]. " " .
            $row["apellidos"]. "<br>";
    }
} else {
    echo "0 resultados";
}*/
/*
echo json_encode($output,  JSON_PRETTY_PRINT);
$salida = array();
$vista = 'json';
$http_code = 404;
@include "modelos/$operacion-$recurso.php";

@include "vistas/$vista.php";

require_once '../includes/conexion.php';

define('API_VERSION', 'v1.0');

$uri = explode(API_VERSION . '/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1];

$uri_array = explode('/', $uri);

$recurso = array_shift($uri_array);

$operacion = strtolower($_SERVER['REQUEST_METHOD']);

$vista = 'json';
$salida = array();
$http_code = 404;
//@ oculta los errores
@include "modelos/$operacion-$recurso.php";

@include "vistas/$vista.php";
*/

require_once '../includes/conexion.php';

define('API_VERSION','v1.0');

$uri = explode(API_VERSION.'/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[1];

$uri_array = explode('/',$uri);

$recurso = array_shift($uri_array);

$operacion = strtolower($_SERVER['REQUEST_METHOD']);

$vista = 'json';

$salida = array();//Para cambiar un nombre y que se cambie donde se utilice refactor/rename

$http_code =200;

include "modelos/$operacion-$recurso.php";

include "vistas/$vista.php";

?>