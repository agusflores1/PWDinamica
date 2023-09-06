<?php
class Archivos {
    public function subirDoc() {
        $fileType = $_FILES["archivo"]["type"];
        $tamaño = $_FILES["archivo"]["size"];
        // Verificar si el archivo es un .doc o .pdf
        $uploadOk = true; // Inicializar la variable como válida por defecto
        
        // Obtener la extensión del archivo
        $fileExtension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
        
        // Verificar la extensión del archivo
        if ($fileExtension != "doc" && $fileExtension != "pdf") {
            $uploadOk = false;
        }
        
        // Verificar el tamaño del archivo (2 MB)
        if ($tamaño > 2 * 1024 * 1024) {
            $uploadOk = false;
        }
        
        return $uploadOk;
    }

    public function cargar() {
        $targetDir = "uploads/";
        $targetFile = $targetDir . $_FILES["archivo"]["name"];
        
        // Verificar si el directorio de destino existe, si no, créalo
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        // Verificar si se cargó el archivo correctamente
        if (copy($_FILES["archivo"]["tmp_name"], $targetFile)) {
            $text= "El archivo " . basename($_FILES["archivo"]["name"]) . " ha sido cargado exitosamente.<br> Link al archivo: <a href='$targetFile'>Descargar archivo</a>";
        } else {
            $text= "Ocurrió un error durante la carga del archivo.";
        }

        return $text;
    }


    public function leer() {
        $targetDir = "uploads/";
        $targetFile = $targetDir . $_FILES["archivo"]["name"];
        $myfile = fopen($targetFile, 'r') or die("No se pudo abrir el archivo!");
        $lectura= "<textarea rows='10' cols='50'>" . fread($myfile, filesize($targetFile)) . "</textarea>";
        fclose($myfile);
        return $lectura;
    }

    public function tipoText($fileType) {
        $uploadOk = true;
        //print ($fileType);
        if ($fileType !== 'text/plain') {
            $uploadOk = false;
        }
        return $uploadOk;
    }
 

    //PUNTO3
    public function subirArchivo($datos)
    {      $targetDir = "uploads/";
        //se crea la carpeta en vista Ej. Nose si eso esta bien
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);}

            $uploadOk = null;
            $envio=1;

            $targetFile = $targetDir . basename($_FILES["archivo"]["name"]);
            //$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            $imageFileType=$_FILES["archivo"]["type"];
            // Permitir solo ciertos formatos de archivo (puedes agregar más si es necesario)
            if ($imageFileType != "image/jpeg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                $envio=0;}
                // Intentar cargar el archivo
            if ($envio!=0 && move_uploaded_file($_FILES["archivo"]["tmp_name"], $targetFile)) {
            // echo "El archivo ha sido cargado.";
            $uploadOk= "<img src='$targetFile' alt='Imagen Cargada' width='300'>";}
             else {
            //echo "Lo siento, hubo un error al cargar su archivo.";
                $uploadOk="Lo siento, solo se permiten archivos JPG, JPEG, PNG.<br> Error al subir archivo";}
            return $uploadOk;
        }
}
  


?>