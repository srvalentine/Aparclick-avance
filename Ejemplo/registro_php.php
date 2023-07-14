<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $numrun = $_POST["rut"];
        $dv = $_POST["dv"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $contraseña = $_POST["password"];
        $Ccontraseña = $_POST["password2"];
        $telefono = $_POST["telefono"];

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
            echo '<script>alert("Conexion exitosa")</script>';
        }
    
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO USUARIO (numrun, dvrun, nombre_usuario, apellido_usuario, correo, contraseña, telefono) VALUES ('$numrun', '$dv', '$nombre', '$apellido' ,'$correo', '$contraseña', $telefono)";
        $sql2 = "SELECT numrun FROM USUARIO WHERE numrun = $numrun";
        $result = mysqli_query($conexion, $sql2);
        if(mysqli_num_rows($result) == 0){
            var_dump($sql);
            if ($conexion->query($sql) === TRUE && $contraseña === $Ccontraseña) {
                echo "Usuario registrado exitosamente";
                header("Location: inicio_sesion.php");
                exit();
            } else {
                echo "Error al registrar el usuario: " . $conexion->error;
            }
        }else{
            echo 'El usuario ya existe';
        }
        

        
        
        
        
        
    
        // Cerrar la conexión
        $conexion->close();
    }
?>