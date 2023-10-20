<?php
include_once __DIR__."/../../includes/configuracion.php";
include_once(STRUCTURE_PATH . "head.php");
?>

<main class="p-5 text-center bg-light">
  <div class="justify-content-md-center align-items-center">
    <div class="card shadow col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card-header">
        <h3>LOGIN</h3>
      </div>
      <div class="card-body">
        <form class="d-flex flex-column needs-validation" method="post" action="verificaPass.php" id="formLogin" name="formLogin">
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-person-fill"></i>
              </span>
              <input class="form-control validate" type="text" name="usuario" id="usuario" placeholder="Username">
              <div class="invalid-feedback">
                Por favor, ingrese un usuario válido.
                <br>*El usuario debe tener al menos 4 caracteres.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-lock-fill"></i>
              </span>
              <input class="form-control validate" type="password" name="password" id="password" placeholder="Password">
              <div class="invalid-feedback">
                Por favor, ingrese una clave válida.
                <br>*Debe tener al menos 8 caracteres.
                <br> *No puede ser igual al nombre de usuario.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <!-- A continuación colocamos el div en donde será inyectado el input -->
            <div class="g-recaptcha" data-sitekey="6LfvL2AoAAAAAEpNfogbblqxHtecHHlpVHeuhMij" id="captcha-container" data-theme="light"></div>
            <div class="invalid-feedback" id="captcha-error" style="display: none;">
              Por favor, verifica que no eres un robot.
            </div>
          </div>

          <div class="d-grid">
            <input type="submit" class="btn btn-primary" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include(STRUCTURE_PATH . "footer.php"); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>  