<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplicación</title>

</head>

<script>
    fetch('../api/v1.0/sesion').then(function (respuesta) {
        if (respuesta.status != 200){
            location.href = '../iniciarSesion.html';
        }else{
            document.body.style='block';
        }
    });
</script>

<body style="display: none">
   <h1>SESIÓN INICIADA CORRECTAMENTE</h1>
    <p>Bienvenido <?php echo $_SESSION['nombre'];?>. </p>
    <p>Tu correo es: <?php echo $_SESSION['email'];?>.</p>


   <a href="javascript:fetch('../api/v1.0/sesion', {method: 'delete'}).then(function(respuesta) {
      if (respuesta.status == 200) location.href = '../index.html';
    })">Cerrar sesión</a>

</body>
</html>