
<?php
    //include_once ("../../Estructura/cabecera.php");
    //  include_once("../../util/funciones.php");
    include_once ("../../includes/configuracion.php");
    include_once (ROOT_PATH.'Control/TP5/Session.php');
    include_once (STRUCTURE_PATH."head.php");


  $datos=data_submitted();
  $session = new Session();
  if ($datos) {
      $nombreUsuario = $datos['usuario'];
      $contrasena = $datos['password'];
      // Llama a la función iniciar para autenticar al usuario
      $session->iniciar($datos['usuario'],$datos['password']);
      if ($session->validar()) {
          // Autenticación exitosa, redirige a la página segura
          header("Location: paginaSegura.php");
          exit();
      } else {
          // Autenticación fallida, redirige nuevamente al formulario de inicio de sesión
          header("Location: login.php");
          exit();
      }
  }
  

include (STRUCTURE_PATH."footer.php"); 