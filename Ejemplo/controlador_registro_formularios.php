<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require('conexion.php');


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $cantidad = $_POST["cantidad"];
        $numero = $_POST["numero"];
        

        var_dump($_POST);
    
        // Conectar a la base de datos
        //$host = '142.44.241.162';
        //$usuario = 'theoriginalteam';
        //$contraseña_bd = 'theoriginalteam';
        //$nombre_bd = 'theoriginalteam';
        //$conexion = mysqli_connect($host, $usuario, $contraseña_bd, $nombre_bd);
    
        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }else{
            echo '<script>alert("Informe enviado")</script>';
        }
    
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO INFORME (cantidad_usos, numero_estacionamiento) VALUES ($cantidad, $numero)";
        $result = mysqli_query($conexion, $sql);
        var_dump($sql);
        if ($conexion->query($sql) === TRUE) {
            echo "Formulario guardado exitosamente";
            header("Location: matriz.php");
            exit();
        } else {
            echo "Error al guardar el formulario: " . $conexion->error;
        }
        
        

        
        
        
        
        
    
        // Cerrar la conexión
        $conexion->close();
    }
?>




?>