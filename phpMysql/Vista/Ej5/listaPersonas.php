<?php
include_once("../Estructura/cabecera.php");
include_once('../../Control/ControlPersona.php');
include_once '../../configuracion.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5"  style="margin-top: 10px;">
    <div class="card w-50 mb-5">
        <div class="card-body mb-5">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">Lista de Personas:</h5>
                <a href="autosPersonas.php" class="btn btn-primary">Buscar Autos</a>
            </div>
            <?php
            $persona = new ControlPersona();
            $personas = $persona->listarPersonas();
            if (count($personas) > 0) {
                foreach ($personas as $persona) {
                    echo "<pre>";
                    echo "Apellido: " . $persona->getApellido() . "<br>";
                    echo "Nombre: " . $persona->getNombre() . "<br>";
                    echo "DNI: " . $persona->getNroDni() . "<br>";
                    echo "Fecha nacimiento: " . $persona->getFechaNac() . "<br>";
                    echo "Telefono: " . $persona->getTelefono() . "<br>";
                    echo "Domicilio: " . $persona->getDomicilio() . "<br>";
                    echo "</pre>";
                }
            } else {
                echo "<br> No se encontraron registros.";
            }
            ?>
        </div>
    </div>
</main>
<?php include("../Estructura/pie.php"); ?>
