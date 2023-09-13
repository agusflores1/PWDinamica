

<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-6 ms-sm-auto col-lg-10 px-md-4"  style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Buscar persona:</h3>
        </div>
        <div class="card-body">
        <form class="needs-validation" novalidate method="get" action="accionBuscarPersona.php" name="form" id="form" onsubmit="return validarDni()">
        <div class="form-group row col-md-9">
            <label>Ingrese un DNI:</label>
            <div class="col-md-5">
                <input type="text" class="form-control" id="DNI" name="DNI" >
                <div class="invalid-feedback">
                    Por favor, ingrese un DNI valido.                
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
        </div>
    </div>
</main>

<?php include ("../Estructura/pie.php"); ?>

