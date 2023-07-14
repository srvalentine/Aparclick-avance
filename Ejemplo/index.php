<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2bddaf117c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/styles.css" />
    <title> Aparclick</title>

  </head>
  <body>
    <!--Header-->
    <form class="header" action="">
      <div class="contenido_header">
        <a class="botones" id="face" href=""><span><i class="fa fa-facebook" arial-hidden="true"></i></span></a>
        <a class="botones" id="twit" href=""><span><i class="fa fa-twitter" arial-hidden="true"></i></span></a>
        <a class="botones" id="insta" href="https://www.instagram.com/blackdaars/"><span><i class="fa fa-instagram" arial-hidden="true"></i></span></a>
        <a class="item" id="funcion" href="">¿Como funciona?</a>
        <a class="item" id="amigos" href="">Invita Amigos</a>
        <a class="item" id="abonos" href="">¿Abonos?</a>
        <?php
          require_once('isLogin.php');
          if(isset($_SESSION['dev'])){
            $Usuario = $_SESSION['dev'];
            echo  "<script>
                      console.log('$Usuario');
                    </script>";
          }
          
          if($estado){
            ?>
            <a href="matriz.php" class="item">ir a selección</a>
            <p class="button3">
            <?php
              echo $Usuario;
            ?>
            </p>
            <a href="logout.php" class="cerrar" type="submit">Cerrar Sesion</a>
            
            <?php
          }else{
        ?>
          <a class="registro" href="registro.php">Registrarse</a>
          <a class="inicio" href="inicio_sesion.php">Iniciar Sesión</a>
        <?php
          }
        ?>
      </div>
    </form>

    <!--Principal-->
    <form class="principal" action="">
      <div class="contenido_principal">
        <a href=""><img class="logo" src="IMG/logo_fondo.svg" alt=""></a>
        <div class="image-container">
          <img class="imagen" src="IMG/P.png" alt="">
          <span class="texto-imagen">¡Contigo a todos lados!</span>
          <div class="box-container">
            <div class="box"></div>
            <div class="box"></div>
          </div>
        </div>
      </div>
    </form>

    <!--Footer-info-->
    <form class="footer-info" action="">
      <div class="contenido-info">
        <img class="footer-info-img" src="IMG/Estacionamiento.jpg" alt="">
        <div class="info">
          <h1 class="titulo"> Aparca hoy con nosotros</h1>
          <ul class="objetivo" id="objetivo1">Ahorra dinero y tiempo desde $20/min</ul>
          <ul class="objetivo" id="objetivo">Tecnología automática de apertura.</ul>
          <ul class="objetivo" id="objetivo3">Puedes tomar abonos Tope Día por $7.000 </ul>
        </div>
      </div>
    </form>

        <!--Footer-instrucciones-->
        <form class="footer-instrucciones" action="">
          <div class="contenido-instrucciones">
            <?php
              require_once('vistaAdmin.php');
              if($usuario == 'Marcelo'){
                $estado = TRUE;
              }else{
                $estado = FALSE;
              }
              if($estado){
            ?>
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio officia mollitia asperiores ea, at, corporis dicta voluptatem numquam sapiente maiores provident, ratione inventore ullam cupiditate modi ad porro minima quidem.</h1>
            <a href="eliminar_usuario.php" class="eliminar">Eliminar usuario</a>
            <?php
              }else{
            ?>
              <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio officia mollitia asperiores ea, at, corporis dicta voluptatem numquam sapiente maiores provident, ratione inventore ullam cupiditate modi ad porro minima quidem.</h1>
            <?php
              }
            ?>
                
          </div>
        </form>
    

    <script src="JS/productos.js"></script>
    <script src="JS/app.js"></script>
    <script src="JS/carrito.js"></script>
  </body>
  
    
  
</html>
