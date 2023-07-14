<?php
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['opcion']) && $_POST['opcion'] === 'confirmar') {

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $updateSql = "UPDATE Espacio_Estacionamiento SET estado = 'espera' WHERE id = '$id'";
        mysqli_query($conexion, $updateSql);

    }
}
?>

<div class="card container mt-5">
    <div class="row row-cols-3 g-2">
        <?php
        $consulta = "SELECT id, estado FROM Espacio_Estacionamiento";
        $resultado = $conexion->query($consulta);

        while ($fila = $resultado->fetch_assoc()) {
            $id = $fila['id'];
            $estado = $fila['estado'];

            echo '<div class="Estacionamiento' . $id . '">';
            echo '<button type="submit" class="btnprim btn-danger" onclick="resaltar(this)" name="opcion" value="confirmar">';
            echo '<img src="IMG/espacioEstaci.png">';
            echo '</button>';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            echo '</div>';
        }
        ?>
    </div>
</div>
