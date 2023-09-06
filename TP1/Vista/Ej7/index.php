<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h1>Calculadora: </h1>
    <form class="needs-validation" method="GET" action="ej7.php" id="form7" name="form7">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Ingrese un número:</label>
                    <input type="text" class="form-control validate" id="num1" name="num1">
                    <div class="invalid-feedback">
                        Por favor, ingrese números válidos.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Ingrese un número:</label>
                    <input type="text" class="form-control validate" id="num2" name="num2">
                    <div class="invalid-feedback">
                        Por favor, ingrese números válidos.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="label">Elige una operación:</label>
                    <select id="opcion" name="opcion" class="form-control validate">
                        <option value="">Seleccione una operación</option>
                        <option id="suma" name="suma">SUMA</option>
                        <option id="resta" name="resta">RESTA</option>
                        <option id="multiplicacion" name="multiplicacion">MULTIPLICACION</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, ingrese una opción.
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
                    <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
                </div>
            </div>
        </div>
    </form>
</main>
<?php include ("../Estructura/pie.php"); ?>
