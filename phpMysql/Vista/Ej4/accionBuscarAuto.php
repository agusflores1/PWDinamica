<?php
include_once("../Estructura/cabecera.php");
include_once('../../Control/ControlAuto.php');
include_once('../../configuracion.php');

$datos = data_submitted();
$auto = new ControlAuto();
$autoEncontrado = $auto->buscarAuto($datos); // Devuelve el objeto Auto

if ($autoEncontrado) {
    $patente = $autoEncontrado->getPatente();
    $marca = $autoEncontrado->getMarca();
    $modelo = $autoEncontrado->getModelo();
    $duenio = $autoEncontrado->getObjDuenio()->getNombre() . " " . $autoEncontrado->getObjDuenio()->getApellido();

    // Construir la tabla HTML
    $tabla = '<table class="table">'.
     '<tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>'.
     '<tr>'.
     '<td>' . $patente . '</td>'.
     '<td>' . $marca . '</td>'.
     '<td>' . $modelo . '</td>'.
     '<td>' . $duenio . '</td>'.
     '</tr>'.
    '</table>';
} else {
    $tabla = "No se encontró registro de esa patente";
}
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <div class="card w-50 mb-4">
        <div class="card-body">
            <h5 class="card-title">Datos:</h5>
            <?php echo $tabla; ?>
            <div class="d-flex justify-content-end align-items-end mt-4">
                <a href="buscarAutos.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
</main>


<?php
include("../Estructura/pie.php");
?>
