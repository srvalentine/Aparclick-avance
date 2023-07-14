<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INICIO</h1>
    <a href="matriz.php">Selección</a>
    <?php
        include_once ("conexion.php");
    ?>
    <br>
    <table>
        <tr>
            <td>id_region</td>
            <td>nombre_region</td>
        </tr>
        <?php
            $sql= "SELECT * FROM REGION";
            $result = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $mostrar['id_region']?></td>
            <td><?php echo $mostrar['nombre_region']?></td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>

