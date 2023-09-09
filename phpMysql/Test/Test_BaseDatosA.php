<?php
include_once '../configuracion.php';

$objBd = new BaseDatos();
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    CREANDO PERSONA   ///
/////////////////////////////
$duenio = new Persona();
$duenio->setNroDni('12345678');
$duenio->setApellido('Dueño Apellido');
$duenio->setNombre('Dueño Nombre');
$duenio->setFechaNac('1990-01-01');
$duenio->setTelefono('987654321');
$duenio->setDomicilio('Domicilio del Dueño');

// Comprobar si la persona ya existe en la base de datos antes de insertarla nuevamente
if (!$duenio->cargar()) {
    // Si no existe, insertarla
    if (!$duenio->insertar()) {
        echo "<br> No fue posible insertar el dueño.";
        exit; // Salir del script si no se puede insertar la persona.
    }
}

///////////////////////////////
///    CREANDO AUTO   ///
/////////////////////////////
$auto = new Auto();
$auto->setPatente('Patente');
$auto->setMarca('Marca');
$auto->setModelo('Modelo');

// Asignar la persona como dueño del automóvil
$auto->setObjDuenio($duenio);

if ($auto->insertar()) {
    echo "<br> El auto se insertó correctamente.";
} else {
    echo "<br> No fue posible insertar el auto.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ACTUALIZAR   ///
/////////////////////////////
$auto->setMarca('Marca modificada');
$auto->setModelo('Modelo modificado');

if ($auto->modificar()) {
    echo "<br> La operación de actualización se realizó con éxito.";
} else {
    echo "<br> No fue posible realizar la operación de actualización.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ELIMINAR   ///
/////////////////////////////
// Asumiendo que el objeto $auto contiene la información del auto a eliminar.

if ($auto->eliminar()) {
    echo "<br> La operación de eliminación se realizó con éxito.";
} else {
    echo "<br> No fue posible realizar la operación de eliminación.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO SELECT   ///
/////////////////////////////
$autos = $auto->listar();

if (count($autos) > 0) {
    echo "<br> La cantidad de registros encontrados por la operación fueron :" . count($autos);
    foreach ($autos as $auto) {
        echo "<pre>";
        echo "Patente: " . $auto->getPatente() . "<br>";
        echo "Marca: " . $auto->getMarca() . "<br>";
        echo "Modelo: " . $auto->getModelo() . "<br>";
        
        // Asegúrate de que $auto->getObjDuenio() sea un objeto Persona antes de llamar a sus métodos.
        $duenio = $auto->getObjDuenio();
        if ($duenio instanceof Persona) {
            echo "Dueño: " . $duenio->getApellido() . " " . $duenio->getNombre() . "<br>";
        } else {
            echo "Dueño: No encontrado <br>";
        }

        echo "</pre>";
    }
} else {
    echo "<br> No se encontraron registros.";
}

echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";
?>
