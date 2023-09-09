
<?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/ControlAuto.php');
    include_once '../../configuracion.php';
  //  include_once("../../util/funciones.php");
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <div class="card w-50 mb-4">
    <div class="card-body">
      <h5 class="card-title">Datos:</h5>
      <?php
      $datos=data_submitted();
     $auto = new ControlAuto();
     $autoEncontrado=$auto->buscarAuto($datos);
     if($autoEncontrado)
     {// Si se encontró un auto, muestra los datos en una tabla
      echo '<table class="table">';
      echo '<tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>';
      echo '<tr>';
      echo '<td>' . $autoEncontrado['Patente'] . '</td>';
      echo '<td>' . $autoEncontrado['Marca'] . '</td>';
      echo '<td>' . $autoEncontrado['Modelo'] . '</td>';
      echo '<td>' . $autoEncontrado['Duenio'] . '</td>';
      echo '</tr>';
      echo '</table>';
     }
     else{
      echo "No se encontro registro de esa patente";
     }
       
        ?>
        
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
