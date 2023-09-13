
<?php include_once("../Estructura/cabecera.php"); ?>
<main class="col-md-9 col-lg-10 px-md-4 mb-5" style="margin-top: 10px;">
    <div class="card col-md-12 p-3 mb-3">
        <div class="card-header">
            <h3 class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>Cinem@s</h3> 
        </div> <br/> 
        <div class="card-body mb-1">
		<form id="formCine" name="formCine" id="formCine" action="accion.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" class="input-group">
		<div class="col-md-5">
			<label class="form-label">Titulo:</label>
			<input type="text" name="titulo" id="titulo" class="form-control validate" >
			<div class="invalid-feedback">
               Por favor, ingrese un titulo.
             </div>
		</div>

		<div class="col-md-5">
		<label class="form-label">Actores:</label>
		<input type="text" name="actores" id="actores" class="form-control validate" />
		<div class="invalid-feedback">
                            Por favor, ingrese actores.
        </div>
		</div>
		<div class="col-md-5">
			<label class="form-label">Director:</label>
			<input type="text" name="director" id="director" class="form-control validate" /> 
			<div class="invalid-feedback">
             Por favor, ingrese un director.
            </div>
		</div>
		<div class="col-md-5">
		 <label class="form-label">Gui&oacute;n:</label>
		 <input type="text" name="guion" id="guion"  class="form-control validate" /> 
		 <div class="invalid-feedback">
             Por favor, ingrese Gui&oacute;n.
         </div>
		</div>
		<div class="col-md-5">
		<label class="form-label">Producci&oacute;n:</label>
		<input type="text" name="produccion" id="produccion" class="form-control validate" />  
		<div class="invalid-feedback">
             Por favor, ingrese una Producci&oacute;n.
         </div>
	    </div>
		<div class="col-md-3">
		<label class="form-label">A&ntilde;o: </label>
		<input type="text" name="anio" id="anio" class="form-control validate" maxlength="4" title="Ingrese un A&ntilde;o  valido (4 digitos numericos)">
		<div class="invalid-feedback">
             Por favor, ingrese un A&ntilde;o.
         </div>
	    </div>
		<div class="col-md-5">
		<label class="form-label">Nacionalidad:</label>
		<input type="text" name="nacionalidad" id="nacionalidad" class="form-control validate" />
		<div class="invalid-feedback">
             Por favor, ingrese una Nacionalidad.
         </div>
		</div>
		<div class="col-md-4">
		<label class="form-label" >Genero:</label>
		<select class="form-select validate" id="genero" name="genero" >
			<option value="">Elige...</option>
			<option value="comedia"> Comedia </option>
			<option value="drama"> Drama </option>
			<option value="terror"> Terror </option>
			<option value="romanticas"> Romanticas </option>
			<option value="suspenso"> Suspenso </option>
			<option value="otras"> Otras </option>
		</select> 
		<div class="invalid-feedback">
             Por favor, ingrese una opcion.
            </div>
		</div>

		<div class="col-md-5">
		<label class="form_label">Duraci&oacute;n:</label>
		<input type="number" id="duracion" name="duracion" class="form-control validate" maxlength="3" >(minutos) 
		<div class="invalid-feedback">
             Por favor, ingrese una Duraci&oacute;n. (Solo 3 digitos)
         </div>
	    </div>

		<div class="col-md-6">
			<label class="form-label" name="restricciones" id="restricciones" ><strong>  Restricciones de edad  </strong></label><br>
			<input class="form-check-input" type="radio" id="todopublico" name="restricciones" value="Todo publicos" /> Todo publico
        	<input class="form-check-input" type="radio" id="mayores7" name="restricciones" value="Mayores de 7" /> Mayores de 7 a&ntilde;os
        	<input class="form-check-input" type="radio" id="mayores18" name="restricciones" value="Mayores de 18" /> Mayores de 18 a&ntilde;os <br/> <br/>
			<div class="invalid-feedback"></div>
		</div>
		<div class="col-md-6">
		<label class="form-label">Sinopsis:</label>
	    </div>
		<div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="floatingTextarea2" style="height: 100px" ></textarea>
		<div class="invalid-feedback">
             Por favor, ingrese una sipnosis.
         </div>

		</div>
		<div>
        <input type="file" class="form-control validate" id="archivo" name="archivo" accept=".jpg, .jpeg" />
        <div class="invalid-feedback">
             Por favor, debe ingresar un archivo JPG.
        </div>
        </div>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
			<button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
			<button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
		  </div>
        </form>
        </div>
    </div>
</main>

<?php include("../Estructura/pie.php"); ?>
