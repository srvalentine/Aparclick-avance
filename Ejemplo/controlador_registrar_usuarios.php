<?php
 include('conexion.php');
 if(isset($_SESSION['nombre'])){
   header('location: registro.php');
}
 $errores = '';
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $numrun = $_POST['rut'];
    $dv=$_POST['dv'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $repitepass = $_POST['password2'];
    $telefono = $_POST['telefono'];
    
    if(!empty($numrun) && !empty($dv) && !empty($nombre) && !empty($apellido) && !empty($correo) && !empty($password) && !empty($repitepass) && !empty($telefono) ){

      $nombre = filter_var(trim($nombre),FILTER_SANITIZE_STRING);
      $apellido = filter_var(trim($apellido),FILTER_SANITIZE_STRING);
      $correo = filter_var(trim($correo),FILTER_SANITIZE_EMAIL);
      $password = trim($password);
      $repitepass = trim($repitepass);
      
      //validar que el gmail no exista en la db
      $query = "SELECT * from USUARIO where correo='$correo' limit 1";
      $resultado = mysqli_query($conexion,$query);

      if(mysqli_num_rows($resultado) > 0){
         $errores .= 'EL Email ya existe </br>';
      }

      if($password != $repitepass){
         $errores .= 'las contraseñas no coinciden';
      }

      //si no exixte ningun error
      if(!$errores){
         $password = md5($password);
         $query = "INSERT INTO USUARIO(id_usuario, numrun, dvrun, nombre_usuario, apellido_usuario,correo,contraseña, telefono) values(4,$numrun, '$dv','$nombre', '$apellido' ,'$correo','$password',$telefono)";
         if(mysqli_query($conexion,$query)){
            $_SESSION['nombre_usuario'] = $nombre;
            $_SESSION['correo'] = $correo;
            header('location: inicio_sesion.php');
        }
       

      }
      
           
      }else{
         $errores .= 'Todos los datos son obligatorios';
      }

        
            
 }
