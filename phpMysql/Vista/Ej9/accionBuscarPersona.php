<?php
include_once("../Estructura/cabecera.php");
include_once('../../Control/ControlPersona.php');
include_once('../../configuracion.php');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">
    <div class="card w-50 mb-4">
        <div class="card-body">
            <h5 class="card-title">Formulario actualizar persona:</h5>
            <?php
            $datos = data_submitted();
            $persona = new ControlPersona();
            $personaEncontrada = $persona->buscarPersona($datos); // Devuelve el objeto Persona

            if ($personaEncontrada) {
                ?>
                <form class="d-flex flex-column needs-validation" method="GET" action="accionActualizaPersona.php" id="form9" name="form9" onsubmit="return validarActualizacion()">  
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="nroDni" id="nroDni" value="<?php echo $personaEncontrada->getNroDNI(); ?>">
                            <label class="form-label">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control validate" maxlength="30" value="<?php echo $personaEncontrada->getNombre(); ?>">
                            <div class="invalid-feedback">
                                Por favor, ingrese caracteres válidos.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Apellido:</label>
                            <input type="text" name="apellido" id="apellido" class="form-control validate" maxlength="30" value="<?php echo $personaEncontrada->getApellido(); ?>">
                            <div class="invalid-feedback">
                                Por favor, ingrese caracteres válidos.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Fecha de Nacimiento:</label>
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control validate" value="<?php echo $personaEncontrada->getFechaNac(); ?>">
                            <div class="invalid-feedback">
                                Por favor, ingrese su fecha de nacimiento.
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Teléfono:</label>
                            <input type="text" name="telefono" id="telefono" class="form-control validate" value="<?php echo $personaEncontrada->getTelefono(); ?>">
                            <div class="invalid-feedback">
                                Por favor, ingrese su teléfono.
                            </div>
                        </div>

                        <div class="col-md-6 mt-3">
                            <label class="form-label">Domicilio:</label>
                            <input type="text" name="domicilio" id="domicilio" class="form-control validate" value="<?php echo $personaEncontrada->getDomicilio(); ?>">
                            <div class="invalid-feedback">
                                Por favor, ingrese su domicilio.
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                       <button class="btn btn-primary me-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
                       <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
                    </div>

                </form>
                <?php
            } else {
                echo "Persona no encontrada";
            }
            ?>
        </div>
    </div>
</main>

<?php
include("../Estructura/pie.php");
?>
