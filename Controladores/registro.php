<?php
$nombre = trim($_POST['nombre']);
$apellidopat1 = trim($_POST['ApellidoPaterno']);
$apellidomat2 = trim($_POST['ApellidoMaterno']);
$calle1 = trim($_POST['calle']);
$numero1 = trim($_POST['numero']);
$colonia1 = $_POST['colonia'];
$codigo1 = $_POST['postal'];
$telefono1 = $_POST['telefono'];
$rfc1 = $_POST['rfc'];
$estatus1 = 'Enviado';


include "conexion.php";

echo "conexion";

if ($_POST['subir']) {

    echo "se preciono el boton";
    //Este metodo es nuevo para se usa para agregar documentos a una base de datos.

    foreach ($_FILES["miarchivo"]['tmp_name'] as $key => $tmp_name) {
        //condicional si el fuchero existe
        if ($_FILES["miarchivo"]["name"][$key]) {
            // Nombres de archivos de temporales
            $archivonombre = $_FILES["miarchivo"]["name"][$key];
            $fuente = $_FILES["miarchivo"]["tmp_name"][$key];

            $carpeta = 'archivos/'; //Declaramos el nombre de la carpeta que guardara los archivos

            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento");
            }

            $dir = opendir($carpeta);
            $target_path = $carpeta . '/' . $archivonombre; //indicamos la ruta de destino de los archivos

            closedir($dir); //Cerramos la conexion con la carpeta destino
        }
        $ruta1 = $target_path; //ruta imagen
    }
}
//Finalisa metodo foreach.

$insertar = "INSERT INTO prospecto (nombre,apellido1,apellido2,calle,numero,colonia,codigo,telefono,rfc,ruta,estatus) values ('$nombre','$apellidopat1', '$apellidomat2','$calle1','$numero1','$colonia1','$codigo1','$telefono1','$rfc1','$ruta1','$estatus1')";

if ($conexion->query($insertar) == true) {

    header('location: ../Prospecto.php');
} else {
    echo "No se guarado la informacion";
}


$conexion->close();

?>