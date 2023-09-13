
<?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../Control/ControlAuto.php');
    include_once ('../../Control/ControlPersona.php');
    include_once '../../configuracion.php';
  //  include_once("../../util/funciones.php");
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="card w-50 mb-5">
    <div class="card-body mb-5">
      <h5 class="card-title">Resultados:</h5>
      <?php
      $datos=data_submitted();
      $persona=new ControlPersona();
      $datosPersona=$persona->buscarPersona($datos);
      if($datosPersona)
      { echo "Datos persona: <br>
        Nombre: " . $datosPersona->getNombre() . "<br>".
        "Apellido: " . $datosPersona->getApellido() . "<br>".
        "DNI: " . $datosPersona->getNroDni() . "<br>".
        "Fecha Nacimiento: " . $datosPersona->getFechaNac() . "<br>".
        "Telefono: " . $datosPersona->getTelefono() . "<br>".
        "Domicilio: " . $datosPersona->getDomicilio() . "<br>".
              "------------------------------------------<br>";
        $auto = new ControlAuto();
        $datosAutos=$auto->buscarDuenio($datos);
         echo "Datos autos:<br>" .$datosAutos;
      
          
      }
      else{echo "No se registran datos.";}
      
      

        ?>
          <div class="d-flex justify-content-end align-items-end mt-4">
                <a href="autosPersonas.php" class="btn btn-primary">Volver</a>
            </div>
    </div>
  </div>
</main>
    <?php
      include ("../Estructura/pie.php");
    ?>

</body>
</html>
