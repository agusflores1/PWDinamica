<?php
    include_once ("../Estructura/cabecera.php");
    include_once ('../../control/Archivos.php');
    include_once("../../utiles/funciones.php");
    ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
 <div style="max-height: calc(100vh - 80px);">
<div class="card w-50">
    <div class="card-body">
    <?php
    if($_FILES["archivo"]["error"]<=0)
    {   
       $datos=data_submitted();
       $objControl= new Archivos();
       $type=$_FILES["archivo"]["type"];
       $upload=$objControl->tipoText($type);
       if($upload){
      $objControl->cargar();
      $carga=$objControl->leer();}
      else{
        $carga="recuerde ingresar documentos .text";
      }

    }
    
    ?>  

    <h5 class="card-title">Resultado:</h5>
    <?php echo $carga ?>
         <div class="d-flex justify-content-end"> <!-- Aplicamos la clase justify-content-end aquí -->
            <a href="index.php" class="btn btn-primary">Volver</a>
        </div>
     </div>
 </div>
        
      </div>
    </div>
  </div>
</main>
    <?php
       include ("../Estructura/pie.php");
    ?>
    