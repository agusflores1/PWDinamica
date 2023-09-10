<?php
include_once("../Estructura/cabecera.php");
include_once('../../Control/ControlAuto.php');
include_once('../../configuracion.php');

$datos = data_submitted();
$auto = new ControlAuto();
$autoEncontrado = $auto->buscarAuto($datos); //devuelve el objAuto
if ($autoEncontrado) {
  $patente= $autoEncontrado->getPatente();
  $marca= $autoEncontrado->getMarca();
  $modelo= $autoEncontrado->getModelo();
  $duenio= $autoEncontrado->getObjDuenio()->getNombre() ." ".$autoEncontrado->getObjDuenio()->getApellido();}
   
else {echo "No se encontró registro de esa patente";}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
  <div class="card w-50 mb-4">
    <div class="card-body">
      <h5 class="card-title">Datos:</h5>
       <table class="table">
       <tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>
        <tr>
        <td><? $patente ?></td>
        <td> <? $marca ?> </td>
       <td><? $modelo ?></td>
       <td><? $duenio ?></td>
       </tr>
       </table>
<?
include("../Estructura/pie.php");
?>
