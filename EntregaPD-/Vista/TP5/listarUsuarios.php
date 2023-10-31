
<?php
    // include_once ("../../Estructura/cabecera.php");
    //  include_once("../../util/funciones.php");
    include_once ("../../includes/configuracion.php");
    include_once (ROOT_PATH.'Control/TP5/AbmUsuario.php');
    include_once (STRUCTURE_PATH."head.php");
    ?>
    <main class="p-5 text-center bg-light">
  <h2>Lista de Usuarios:</h2>
  <?php
  $usuario = new AbmUsuario();
  $usuarios = $usuario->buscar(null);
  if (count($usuarios) > 0) {
  ?>
  <div class="row justify-content-center p-3">
    <?php
    foreach ($usuarios as $usuario) {
       // Verifica si usdesahabilitado es nulo o está vacío
       if ($usuario->getUsDeshabilitado() === null || $usuario->getUsDeshabilitado() === '') {

    ?>
    <div class="col-lg-6 col-sm-12 mb-4">
      <div class="card shadow">
        <div class="card-header">
          <h4 class="card-title text-center"><?php echo $usuario->getUsNombre(); ?></h4>
          <h4 class="card-title text-center"><?php echo "ID: " . $usuario->getIdUsuario(); ?></h4>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="row">
              <div class="col-14 col-md-6 mb-2">
                <h6 class="card-title text-uppercase"><?php echo "Mail: " . $usuario->getUsMail(); ?></h6>
              </div>
              <div class="col-12 col-md-6 mb-2">
                <h6 class="card-title text-uppercase"><?php echo "Pass: \n"  . $usuario->getUsPass(); ?></h6>
              </div>
              <div class="col-6">
                <a href="accion/actualizarLogin.php?idusuario=<?php echo $usuario->getIdUsuario(); ?>">
            <button type="button" class="btn btn-primary btn-sm">Actualizar</button></a>
              </div>
              <div class="col-6">
           <!-- Enlace para eliminar con el ID del usuario en la URL -->
           <a href="accion/eliminarLogin.php?idusuario=<?php echo $usuario->getIdUsuario(); ?>">
            <button type="button" class="btn btn-danger btn-sm">Eliminar</button></a>
           


              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php
    } }  //fin foreach
    ?>
  </div>
  <?php
  } else {
    echo "<br> No se encontraron registros.";
  }
  ?>
</main>

<?php include (STRUCTURE_PATH."footer.php"); ?>

