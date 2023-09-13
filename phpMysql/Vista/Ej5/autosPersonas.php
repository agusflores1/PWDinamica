

<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-6 ms-sm-auto col-lg-10 px-md-4">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Buscar autos vinculados:</h3>
        </div>
        <div class="card-body">
        <form class="d-flex flex-column needs-validation" novalidate method="get" action="accionAutosPersonas.php" name="form5" id="form5" onsubmit="return validarDni()">
        <div class="form-group row col-md-9">
            <label for="numero">Ingrese un DNI:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="DNI" name="DNI">
                <div class="invalid-feedback">
                   El DNI no es válido.
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="listaPersonas.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </form>
        </div>
    </div>
</main>

<?php include ("../Estructura/pie.php"); ?>


