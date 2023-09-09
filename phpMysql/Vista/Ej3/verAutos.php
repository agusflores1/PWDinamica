
    <?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/ControlAuto.php');
    include_once '../../configuracion.php';
  //  include_once("../../util/funciones.php");
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <div class="card w-50 mb-4">
    <div class="card-body">
      <h5 class="card-title">Lista de Autos:</h5>
      <?php
        $auto = new ControlAuto();
        $autos = $auto->listarAutos();
        if (count($autos) > 0) {
           // echo "<br> La cantidad de registros encontrados por la operación fueron :" . count($autos);
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
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
