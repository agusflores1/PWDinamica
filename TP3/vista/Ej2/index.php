

<?php include_once("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 10px;">
    <div class="card col-md-9 mx-auto p-3">
        <div class="card-header">
            <h3 class="text-primary">Subir archivo (solo .text):</h3>
        </div>
        <div class="card-body">
            <form action="accion.php" method="post" enctype="multipart/form-data" class="input-group validate" onsubmit="return validarArchivo()">
                <input type="file" class="form-control" id="archivo" name="archivo">
            <div class="invalid-feedback">
             Por favor, debe ingresar un archivo.
            </div>
                <button class="btn btn-primary" type="submit">Subir Archivo</button>
            </form>
        </div>
    </div>
</main>
<?php include("../Estructura/pie.php"); ?>
