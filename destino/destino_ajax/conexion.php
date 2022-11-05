<?php
    
    try{
         $con = new PDO('mysql:host=localhost;dbname=pasaje_database', 'root', '');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>