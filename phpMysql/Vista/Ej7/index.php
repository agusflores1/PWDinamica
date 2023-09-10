<?php  include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Formulario:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column  needs-validation" method="GET" action="accion.php" id="form5" name="form5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control validate" maxlength="30">
                        <div class="invalid-feedback">
                        Por favor, ingrese caracteres validos.
                       </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Marca:</label>
                        <input type="text" name="marca" id="marca" class="form-control validate" maxlength="30">
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres validos.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres validos.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> DNI Dueño:</label>
                        <input type="text" name="dniDuenio" id="dniDuenio" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese su DNI.
                        </div>
                    </div>
                </div>
                    <div class="col-md-7 mt-3 d-flex justify-content-end">
                        <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include ("../Estructura/pie.php"); ?>
