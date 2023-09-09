<?php
include_once '../configuracion.php';

$objBd = new BaseDatos();
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO INSERTAR   ///
/////////////////////////////
$persona = new Persona();
$persona->setNroDni('12345678');
$persona->setApellido('Apellido de prueba');
$persona->setNombre('Nombre de prueba');
$persona->setFechaNac('2000-01-01');
$persona->setTelefono('123456789');
$persona->setDomicilio('Domicilio de prueba');

if ($persona->insertar()) {
    echo "<br> La persona se insertó correctamente.";
} else {
    echo "<br> No fue posible insertar la persona.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ACTUALIZAR   ///
/////////////////////////////
$persona->setApellido('Apellido modificado');
$persona->setNombre('Nombre modificado');

if ($persona->modificar()) {
    echo "<br> La operación de actualización se realizó con éxito.";
} else {
    echo "<br> No fue posible realizar la operación de actualización.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ELIMINAR   ///
/////////////////////////////
// Asumiendo que el objeto $persona contiene la información de la persona a eliminar.

if ($persona->eliminar()) {
    echo "<br> La operación de eliminación se realizó con éxito.";
} else {
    echo "<br> No fue posible realizar la operación de eliminación.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO SELECT   ///
/////////////////////////////
$personas = $persona->listar();

if (count($personas) > 0) {
    echo "<br> La cantidad de registros encontrados por la operación fueron :" . count($personas);
    foreach ($personas as $persona) {
        echo "<pre>";
        echo "NroDni: " . $persona->getNroDni() . "<br>";
        echo "Apellido: " . $persona->getApellido() . "<br>";
        echo "Nombre: " . $persona->getNombre() . "<br>";
        echo "Fecha de Nacimiento: " . $persona->getFechaNac() . "<br>";
        echo "Teléfono: " . $persona->getTelefono() . "<br>";
        echo "Domicilio: " . $persona->getDomicilio() . "<br>";
        echo "</pre>";
    }
} else {
    echo "<br> No se encontraron registros.";
}

echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";
?>