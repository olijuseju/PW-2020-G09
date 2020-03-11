fetch('../api/v1.0/sesion').then(function (respuesta) {
    if (respuesta.status != 200){
        location.href = '..';
    }else{
        console.log("LLEGA");
    }
});