<?php  include_once ("../Estructura/cabecera.php"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h1>Verificación de Número</h1>
    <form class="d-flex flex-column needs-validation" novalidate method="post" action="/TP1/Vista/Ej1/vernumero.php" name="form1" id="form1">
        <div class="form-group row col-md-9">
            <label for="numero">Ingrese un número:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="numero" name="numero" >
                <div class="invalid-feedback">
                    Por favor, ingrese un número válido.
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Verificar</button>
            </div>
        </div>
    </form>
</main>

<?php include ("../Estructura/pie.php"); ?>
