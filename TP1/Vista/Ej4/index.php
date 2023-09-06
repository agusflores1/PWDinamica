<?php  include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		<div class="card col-sm-10 p-3">
		<div class="card-header ">
			<h3 class="text-primary">Formulario:</h3> 
        </div>
		<div class="card-body">
        <form class="d-flex flex-column needs-validation" method="GET" action="ej4.php" id="form3" name="form3">
        <div class="col-md-3">
			<label class="form-label">Nombre:</label>
			<input type="text" name="nombre" id="nombre" class="form-control validate" maxlength="30">
			<div class="invalid-feedback">
                    Por favor, ingrese caracteres validos.
            </div>
		    </div>
		<div class="col-md-3">
		<label class="form-label">Apellido:</label>
		<input type="text" name="apellido" id="apellido" class="form-control validate" maxlength="30" />
		<div class="invalid-feedback">
                    Por favor, ingrese caracteres validos.
            </div>
		</div>
		<div class="col-md-2">
			<label class="form-label">Edad:</label>
			<input type="text" name="edad" id="edad" class="form-control validate" maxlength="3"/> 
			<div class="invalid-feedback">
                    Por favor, ingrese caracteres validos.
            </div>
			
		</div>
		<div class="col-md-5">
		 <label class="form-label">Direccion:</label>
		 <input type="text" name="direccion" id="direccion"  class="form-control validate" maxlength="40"/>
		 <div class="invalid-feedback">
                    Por favor, ingrese caracteres validos.
            </div>
		</div>

		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
			<button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
			<button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
		  </div>
        </form>
	</div>
</div>
</main>
<?php include ("../Estructura/pie.php"); ?>


