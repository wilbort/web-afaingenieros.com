<?php
$fecha=date("d-m-y");
$hora=date("h:i:s");
$destino="grupoafa@afaingenieros.com";
$destino2="ccueva@afaingenieros.com";
$destino3="omundaca@afaingenieros.com";
$destino4="wencomenderos@itm.edu.pe";
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
mail($destino3,$asunto,$comentario,$desde);
mail($destino4,$asunto,$comentario,$desde);
header("location: ../contacto.html");
?>