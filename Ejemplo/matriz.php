<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://kit.fontawesome.com/2bddaf117c.js" crossorigin="anonymous"></script>
    <link href = "CSS/formulario_diario.css" rel = "stylesheet">
    <link href = "CSS/matriz-style.css" rel = "stylesheet">
    <link href = "CSS/estilos.css" rel = "stylesheet">
    <title>Document</title>
</head>
<header>
    <a href="index.php" class="button">Volver al inicio</a>
</header>
<body>

    

    <br>
    <br>
    <?php
        session_start();
        require_once('vistaAdmin.php');

        if($usuario == 'Marcelo'){
            $estado = TRUE;
        }else{
            $estado = FALSE;
        }

    ?>
            <div class="matriz_pantalla" id="contenedor">

                <div class="container1">

                    <form action="" id="informe1" class="informe1">
                        
                    </form>

                    <div id="contenedorQR" class="contenedorQR"></div>
                </div>

                <div class="container2">
                    <div id="contenedordescripcion" class="">
                        <h1 id="metodo" >Seleccione método de pago</h1>
                        <div class="pagos" >
                        <i id="tarjeta" class="fa fa-credit-card" onclick="mostrarBotones()"><h1 class="pagodescripcion" id="tarjetadesc" href="">Tarjeta</h1></i>
                        <i id="efectivo" class="fa fa-money" onclick="mostrarBotones()"><h1 class="pagodescripcion" id="efectivodesc" href="">Efectivo</h1></i>
                        </div>

                    </div>
                </div>
            </div>
            <br>

            <div class="contenedor">
                <form action="" id="formulario" class="formulario">

                </form>

            </div>
            <br>
            
            <?php
                if($estado){

                ?>
            <form action="controlador_registro_formularios.php" class="informe" method = "POST" id="informe">
                <h1 class="titulo">Formulario de arriendos diarios</h1>
                <div class="container">
                    <div class="informe_cantidad">
                        <label for="" class="label" id="label1" name = "label_cantidad">Cantidad de usos del estacionamiento</label>
                        <input readonly type="text" id="input_cantidad" name = "cantidad">
                        <label for="" class="label" id="label2" name = "label_numero">Numero del estacionamiento</label>
                        <input readonly type="text" id="input_numero" name = "numero">
                        <div class="boton_guardar">
                            <input type="submit" >
                        </div>
                        <div class="boton_cancelar">
                            <input type="submit" >
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="informe_cantidad">
                        <label for="" class="label"></label>
                    </div>
                </div>
            </form>
            <?php
                }else{
                    echo '<script>console.log("El usuario no posee permisos para crear formularios");</script>';
                }
            ?>

            
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script defer src= "JS/matrices.js"></script>
</body>
</html>