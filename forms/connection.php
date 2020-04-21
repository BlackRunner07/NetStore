<?php
    try{
        $connection = new mysqli("localhost","tyrell07","PGt26GZ8vyV8A9gzfDEbSUcacJNE6MqQUihQNRbH","NetStore");
       
    }catch(mysqli_sql_exception $e){
        echo $e->getMessage();
        echo "Database connection failed";
    }
?>
