<?php include_once ("../Estructura/cabecera.php"); ?>

<div>


<main class="col-md-10 ms-sm-auto col-lg-10 px-md-4" style="height: 100vh;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Buscar Auto:</h3>
        </div>
        <div class="card-body">
    <form class="needs-validation" novalidate method="get" action="accionBuscarAuto.php" name="form" id="form" onsubmit="return validarFormulario()">
        <div class="form-group row col-md-9">
            <label>Ingrese una patente:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="patente" name="patente" >
                <div class="invalid-feedback">
                    Por favor, ingrese una patente                
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

</div>

<?php include ("../Estructura/pie.php"); ?>

