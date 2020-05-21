<?php
  include ('connection.php');
  
  $com=$_POST['coment'];
 

  $comentario=$connection->query("INSERT INTO comentarios(comentario) VALUES ('$com')"); 
  
  if($comentario){
    $message = "COMENTARIO AGREGADO EXITOSAMENTE";
    echo "<script type=text/javascript>alert('$message')</script>";
    header('location: ../index.php');
  }else{
    $message = "FALLO AL AGREGAR COMENTARIO";
    echo "<script type=text/javascript>alert('$message')</script>";
    header('location: ../index.php');
  }
?>
