<?php
    include('connection.php');

    $delC =$_REQUEST['id_com'];

    $borrado=$connection->query("DELETE FROM comentarios WHERE id_com='$delC'");

    if ($borrado) {
        echo "<script type=text/javascript>alert('Modificacion Exitosa')</script>";
        header('location: ../index.php');
        
    }
?>