<?php
 include('conexion.php');
 if(isset($_SESSION['nombre'])){
   header('location: registro.php');
}
 $errores = '';
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    
    if(!empty($nombre) && !empty($password) ){

      $nombre = filter_var(trim($nombre),FILTER_SANITIZE_STRING);
      $password = trim($password);
      
      //validar que el gmail no exista en la db
      $query = "SELECT * from USUARIO where contraseña='$password' limit 1";
      $resultado = mysqli_query($conexion,$query);

      if(mysqli_num_rows($resultado) > 0){
         $exito .= 'El usuario existe, hasta luego!!';
         $query = "DELETE FROM USUARIO WHERE contraseña = '$password'";
         if($conexion -> query($query) === TRUE){
            $_SESSION['nombre_usuario'] = $nombre;
            $_SESSION['correo'] = $correo;
            header('location: index.php');
        }
      }
      //si no exixte ningun error   
      }else{
         $errores .= 'Todos los datos son obligatorios';
      }

        
            
 }