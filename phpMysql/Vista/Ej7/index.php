<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-6 ms-sm-auto col-lg-10 px-md-4 "  style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Ingresar auto:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="post" action="accion.php" id="form7" name="form7" onsubmit="return validarAuto()">
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control validate" maxlength="7">
                        <div class="invalid-feedback">
                            Por favor, ingrese su patente.
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Marca:</label>
                        <input type="text" name="marca" id="marca" class="form-control validate" maxlength="20">
                        <div class="invalid-feedback">
                            Por favor, ingrese una marca.
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label class="form-label">Modelo:</label>
                        <input type="text" name="modelo" id="modelo" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres numericos.
                        </div>
                    </div>
                    <div class="col-md-3 mt-3">
                        <label class="form-label">DNI Dueño:</label>
                        <input type="text" name="DNI" id="DNI" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese su DNI (solo numeros).
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-3 d-flex justify-content-end">
                        <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
                        <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include ("../Estructura/pie.php"); ?>


