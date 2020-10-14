<?php

if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $contenido = $_POST["contenido"];

    $mailto = "info@coprobich.com";
    $headers = "From: ".$correo;
    $asunto = "PAGINA WEB: ".$nombre." -- ".$correo;
    $contacto = "Correo: ".$correo."\nTelefono: ".$telefono;
    $text = "Tienes un mensaje de ".$nombre."\n\n".$contacto."\n\n".$contenido;
    mail($mailto, $asunto, $text, $headers) or die("Error!");
    echo "Thank You!";
    header("Location: contacto.html");
}
?>