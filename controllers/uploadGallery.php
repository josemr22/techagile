<?php
include(__DIR__ . '/../model/conexion.php');


if (!empty($_FILES)) {

    $ds = "/";
    $storeFolder = 'uploads';

    $tempFile = $_FILES['file']['tmp_name'];

    $targetPath = "../img" . $ds . $storeFolder . $ds;

    $targetFile =  $targetPath . $_FILES['file']['name'];

    $mysqli = $GLOBALS['conn'];
    $mysqli->query("INSERT INTO gallery (url_gy) VALUES ('$targetFile')");
    move_uploaded_file($tempFile, $targetFile);

    header("Refresh:0");
}

if (isset($_GET['id']) && isset($_POST['delete'])) {

    $id = $_GET['id'];



    $rs = $GLOBALS['conn2'];
    $consulta = "SELECT url_gy FROM gallery WHERE id_gy ='$id'";
    $resultado = $rs->query($consulta);
    $deleted = mysqli_fetch_assoc($resultado);
    $foto = $deleted['url_gy'];
    unlink($foto);

    $mysqli = $GLOBALS['conn'];
    $mysqli->query("DELETE FROM gallery WHERE id_gy ='$id'");


    header('location: ../admin/galeria.php');
}
