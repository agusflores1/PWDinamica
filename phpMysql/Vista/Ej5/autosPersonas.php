<?php  include_once ("../Estructura/cabecera.php"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h2>Buscar Autos</h2>
    <form class="d-flex flex-column needs-validation" novalidate method="get" action="accionAutosPersonas.php" name="form" id="form">
        <div class="form-group row col-md-9">
            <label for="numero">Ingrese un DNI:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="DNI" name="DNI" >
                <div class="invalid-feedback">
                   No se encontro ningun vehiculo asociado.
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
</main>

<?php include ("../Estructura/pie.php"); ?>