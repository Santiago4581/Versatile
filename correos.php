<?php
    $destinatario ='versatile.s.a.s@gmail.com';

    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $msg_subject = $_POST['msg_subject'];
    $message = $_POST['message'];

    $header = "Enviado desde la pagina Versatile"
    $mensajeCompleto = $message . "\nAtentamente" . $name;

    mail($destinatario, $msg_subject, $mensajeCompleto, $header);
    echo"<script>alert('correo enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
    ?>