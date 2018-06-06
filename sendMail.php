<?php 
error_reporting(0); 
$name = $_POST['name']; 
$email= $_POST['email']; 
$phoneNumber = $_POST['phoneNumber']; 
$service=$_POST['service']; 
$zipCode=$_POST['zipCode']; 
$radio= $_POST['GrupoOpciones2']; 
$opinion=$_POST['opinion']; 
$header = 'From: ' . $mail; 

$message = "Get My Free Quote" . $nombre . " \r\n";  

$for = salcedodigna7@gmail.com; 
$subject = "Get My Free Quote" ; 

mail($for, $subject, utf8_decode($message), $header); 

echo 'mensaje enviado correctamente'; 

?> 