<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .btnprim{
      
    }
    .btnprim img {
      width: 100px;
      height: 70px;
      transition: filter 0.3s;
    }

    .btnprim img.active {
      filter: brightness(60%);
      
    }
  </style>
</head>
<body>
<div class="card container mt-5">
    <div class="row row-cols-3 g-2">
        <?php
          include "Estacionamiento_espera.php";
          include "conexion.php";
          $consulta = "SELECT id, estado FROM Espacio_Estacionamiento";
          $resultado = $conexion->query($consulta);
          
          while ($fila = $resultado->fetch_assoc()) {
            $id = $fila['id'];
            $estado = $fila['estado'];
            
            echo '<div class="Estacionamiento' . $id . '">';
            echo '<button type="button" class="btnprim btn-success" onclick="resaltar(this)">';
            echo '<img src="IMG/espacioEstaci.png">';
            echo '</button>';
            echo '</div>';
          }
          echo '<input type="submit" value="Confirmar" name="opcion">'
        ?>

      </div>
    </div>



    <script>
      function resaltar(button) {
        var images = document.querySelectorAll('.image-button img');

        images.forEach(function(img) {
          img.classList.remove('active');
        });
        button.querySelector('img').classList.toggle('active');
      }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>