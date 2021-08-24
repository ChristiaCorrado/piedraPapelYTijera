<?php
    $destinatario= 'christiancorrado88@gmail.com';

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la Pagina Piedra Papel y Tijera";
    $mensajeCompleto = $mensaje. "\nAtentamente" . $nombre;

    mail($destinatario,$mensajeCompleto,$header);
    echo "<script>Alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";