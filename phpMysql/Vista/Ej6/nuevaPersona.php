<?php  include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"  style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Ingresar Persona:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column  needs-validation" method="post" action="accionNuevaPersona.php" id="form6" name="form6">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control validate" maxlength="30">
                        <div class="invalid-feedback">
                        Por favor, ingrese caracteres validos.
                       </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control validate" maxlength="30">
                        <div class="invalid-feedback">
                            Por favor, ingrese caracteres validos.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">DNI:</label>
                        <input type="text" name="DNI" id="DNI" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese solo numeros.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNac" id="fechaNac" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese su fecha de nacimiento.
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Telefono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese su telefono.
                        </div>
                    </div>

                    <div class="col-md-4 mt-3">
                        <label class="form-label"> Domicilio:</label>
                        <input type="text" name="domicilio" id="domicilio" class="form-control validate">
                        <div class="invalid-feedback">
                            Por favor, ingrese su domicilio.
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
