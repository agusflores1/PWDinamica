<?php
include_once "../configuracion.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Autos</title>
</head>
<body>
    <h3>Lista de Autos:</h3>
    <table border="1">
        <?php
///////////////////////////////
///    PROBANDO SELECT   ///
/////////////////////////////
$auto = new ControlAuto();
$autos = $auto->listarAutos();
if (count($autos) > 0) {
    echo "<br> La cantidad de registros encontrados por la operación fueron :" . count($autos);
    foreach ($autos as $auto) {
        echo "<pre>";
        echo "Patente: " . $auto->getPatente() . "<br>";
        echo "Marca: " . $auto->getMarca() . "<br>";
        echo "Modelo: " . $auto->getModelo() . "<br>";
        
        // Asegúrate de que $auto->getObjDuenio() sea un objeto Persona antes de llamar a sus métodos.
        $duenio = $auto->getObjDuenio();
        if ($duenio instanceof Persona) {
            echo "Dueño: " . $duenio->getApellido() . " " . $duenio->getNombre() . "<br>";
        } else {
            echo "Dueño: No encontrado <br>";
        }

        echo "</pre>";
    }
} else {
    echo "<br> No se encontraron registros.";
}
echo "<br>----------------------------------------------------------------------------------<br>";
        ?>
    </table>
</body>
</html>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card w-50">
    <div class="card-body">
      <h3>Lista de Autos:</h3>
        <?php
        $auto = new ControlAuto();
        $autos = $auto->listarAutos();
        if (count($autos) > 0) {
            echo "<br> La cantidad de registros encontrados por la operación fueron :" . count($autos);
            foreach ($autos as $auto) {
                echo "<pre>";
                echo "Patente: " . $auto->getPatente() . "<br>";
                 echo "Marca: " . $auto->getMarca() . "<br>";
                 echo "Modelo: " . $auto->getModelo() . "<br>";
        $duenio = $auto->getObjDuenio();
        if ($duenio instanceof Persona) {
            echo "Dueño: " . $duenio->getApellido() . " " . $duenio->getNombre() . "<br>";
        } else {
            echo "Dueño: No encontrado <br>";
        }

        echo "</pre>";
    }
} else {
    echo "<br> No se encontraron registros.";
}
echo "<br>----------------------------------------------------------------------------------<br>";
        ?>
    </table>
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
