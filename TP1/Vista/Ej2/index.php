<?php include_once("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h1>Horarios Programación Dinámica:</h1>
    <form class="d-flex flex-column needs-validation" novalidate method="post" action="ej2.php" name="form" id="form">    
        <div class="form-group col-md-2"> 
            <label>Lunes:</label>
            <input type="text" class="form-control" id="lunes_form" name="lunes_form" placeholder="Ingresa un número" maxlength="5">
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-2"> 
            <label>Martes:</label>
            <input type="text" class="form-control"  id="martes_form" name="martes_form" placeholder="Ingrese un número" maxlength="5">
            <div class="invalid-feedback">
                Ingrese un número válido.
            </div>
        </div>

        <div class="form-group col-md-2">
            <label>Miércoles:</label>
            <input type="text" class="form-control" id="miercoles_form" name="miercoles_form" placeholder="Ingrese un número" maxlength="5">
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-2">
            <label>Jueves:</label>
            <input type="text" class="form-control" id="jueves_form" name="jueves_form" placeholder="Ingrese un número" maxlength="5">
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-2">
            <label>Viernes:</label>
            <input type="text" class="form-control"  id="viernes_form" name="viernes_form" placeholder="Ingrese un número" maxlength="5">
            <div class="invalid-feedback">
            Ingrese un número válido.
            </div>
        </div>
        <div class="form-group col-md-3 text-center mt-3">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>
</main>

<?php include ("../Estructura/pie.php"); ?>
