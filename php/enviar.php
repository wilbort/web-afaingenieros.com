<?php
$fecha=date("d-m-y");
$hora=date("h:i:s");
$destino="whuaman@afaingenieros.com";
$destino2="wencomenderos@afaingenieros.com";
$asunto="Consulta web";
$desde= 'form:' .$_POST['email'] ;


$comentario="
\n 
Nombre: $_POST[nombre] \n 
Email: $_POST[correo] \n
Consulta: $_POST[mensaje] \n
Enviado el $fecha a las $hora\n";

mail($destino,$asunto,$comentario,$desde);
mail($destino2,$asunto,$comentario,$desde);
header("location: ../contacto.html");
?>