<?php
include_once '../includes/configuracion.php';

$objBd = new BaseDatos();
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO INSERTAR   ///
/////////////////////////////

$sql = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado) VALUES('usuario', 12345678, 'usuario1@ejemplo.com', NULL);";
$res = $objBd->Ejecutar($sql);
$sql = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado) VALUES('usuariodos', 987654321, 'usuario2@ejemplo.com', NULL);";
$res = $objBd->Ejecutar($sql);
$sql = "INSERT INTO usuario(usnombre, uspass, usmail, usdeshabilitado) VALUES('usuariotres', 12345678, 'usuario3@ejemplo.com', NULL);";
$res = $objBd->Ejecutar($sql);


if ($res) {
    echo "<br> El Registro se insertó.";
    if ($res > 0) {
        echo "<br> El id del campo autoincrement insertado es: " . $res;
        $idUsuario = $res;
    } else {
        echo " <br>La tabla no tiene un campo autoincrement.";
    }
} else {
    echo "<br>No fue posible realizar la operación.";
}
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ACTUALIZAR   ///
/////////////////////////////
/*
$sql = "UPDATE usuario SET usnombre = 'Usuario', usmail = 'nuevo_correo@ejemplo.com' WHERE idusuario=" . $idUsuario;
$res = $objBd->Ejecutar($sql);

if ($res > -1) {
    if ($res > 0) {
        echo "<br> La cantidad de registros afectados por la operación fueron: " . $res;
    } else {
        echo "<br> No han sido afectados registros en la actualización.";
    }
} else {
    echo "<br>No fue posible realizar la operación.";
}

echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO ELIMINAR   ///
/////////////////////////////
/**$sql = "DELETE FROM usuario WHERE idusuario=" . $idUsuario;
$res = $objBd->Ejecutar($sql);

if ($res > -1) {
    if ($res > 0) {
        echo "<br> La cantidad de registros afectados por la operación fueron: " . $res;
    } else {
        echo "<br> No han sido afectados registros en la actualización.";
    }
} else {
    echo "<br>No fue posible realizar la operación.";
}
*/
echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

///////////////////////////////
///    PROBANDO SELECT   ///
/////////////////////////////
$sql = "SELECT * FROM usuario ";
$res = $objBd->Ejecutar($sql);

if ($res > -1) {
    if ($res > 0) {
        echo "<br> La cantidad de registros encontrados por la operación fueron: " . $res;
        while ($reg = $objBd->Registro()) {
            echo "<pre>";
            print_r($reg);
            echo "</pre>";
        }
    } else {
        echo "<br> No se encontraron registros.";
    }
} else {
    echo "<br>No fue posible realizar la operación.";
}

echo "<br>----------------------------------------------------------------------------------<br>";
echo "<br>----------------------------------------------------------------------------------<br>";

?>
