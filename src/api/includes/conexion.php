<?php
//Esta informacion la tendremos que cambiar cuando lo subamos a otro servidor, si lo hacemos en un archivo separado será más comodo

$bbdd_server = 'localhost';
$bbdd_user = 'root';
$bbdd_password = '';
$bdnombre = 'pw-2020-usuarios';

$conexion = mysqli_connect($bbdd_server,$bbdd_user,$bbdd_password,$bdnombre);

mysqli_query($conexion, 'SET NAMES utf8');
