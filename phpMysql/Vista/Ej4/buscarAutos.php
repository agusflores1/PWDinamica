<?php  include_once ("../Estructura/cabecera.php"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h4>Buscar Autos</h4>
    <form class="d-flex flex-column needs-validation" novalidate method="get" action="accionBuscarAuto.php" name="form" id="form"  onsubmit="return validarFormulario()">
        <div class="form-group row col-md-9">
            <label for="numero">Ingrese una patente:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="patente" name="patente" >
                <div class="invalid-feedback">
                   No se encontro ninguna patente.
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>
</main>

<?php include ("../Estructura/pie.php"); ?>
