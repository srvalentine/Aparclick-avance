<?php
    
   
    $host = '142.44.241.162';
    $user = 'theoriginalteam';
    $pass = 'theoriginalteam';
    $db = 'theoriginalteam';
    $conexion = mysqli_connect($host,$user,$pass,$db);
    if(!$conexion){
        die("Conexion fallida: ". mysqli_connect_error());
                
    }else{
        
    }


    
?>