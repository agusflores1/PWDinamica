<?php  include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
    <div class="card col-sm-10 p-3 mb-5">
        <div class="card-header">
            <h3 class="text-primary">Formulario:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="GET" action="ej6.php" id="form6" name="form6">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control validate" maxlength="30">
                        <div class="invalid-feedback">
                        Ingrese caracteres validos.
                       </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class="form-control validate" maxlength="30"> 
                        <div class="invalid-feedback">
                            Ingrese caracteres validos.
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Edad:</label>
                        <input type="text" name="edad" id="edad" class="form-control validate" maxlength="3">
                        <div class="invalid-feedback">
                            Ingrese solo numeros validos.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mt-3">
                        <label class="form-label">Direccion:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control validate" maxlength="30" >
                        <div class="invalid-feedback">
                            Ingrese su direccion.
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <label class="form-label">Sexo:</label>
                        <select id="sexo" name="sexo" class="form-control validate">
                            <option value="">Seleccione una opcion</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                         <div class="invalid-feedback">
                            Seleccione una opcion.
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <label class="form-label">Estudios:</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nivelEstudio" id="notiene" value="No tiene" >
                            <label class="form-check-label" for="inlineRadio1">No tiene estudios</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="nivelEstudio" id="primario" value="Estudios Primarios">
                            <label class="form-check-label" for="inlineRadio2">Estudios Primarios</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="nivelEstudio" id="secundario" value="Estudios Secundarios">
                            <label class="form-check-label" for="inlineRadio3">Estudios Secundarios</label>
                        </div>
                        <div class="invalid-feedback" id="invalidCheck3Feedback">
                            Seleccione una opcion.
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                    <label> Elija sus deportes:</label>
                      <div class="form-check">
                      <input type="checkbox" class="form-check-input" name="futbol" id="futbol" value="Futbol" >
                      <label>Futbol</label>
                      </div>
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="basquet" id="basquet" value="Basquet" >
                    <label>Basquet</label> 
                    </div>
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="voley" id="voley" value="Voley" > 
                    <label>Voley</label> 
                    </div>
                    <div class="form-check">    
                    <input type="checkbox" class="form-check-input" name="tenis" id="tenis" value="Tenis" >
                    <label>Tenis</label> 
                    </div>
                    <div class="invalid-feedback">
                            Seleccione una opcion.
                        </div>
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
