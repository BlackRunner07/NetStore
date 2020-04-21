<?php
  include ('connection.php');
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $motivo=$_POST['subject'];
  $men=$_POST['message'];

  $cot=$connection->query("INSERT INTO contact(nombre,correo,motivo,mensaje) VALUES ('$name','$email','$motivo','$men')"); 
  
  if($cot){
   echo "Mensaje enviado exitosamente";
  }else{
    echo "Error al enviar datos";
  }
?>
