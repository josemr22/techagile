<?php
include(__DIR__ . '/../model/conexion.php');
// require_once('../model/conexion.php');

function login($email, $pass)
{
    session_start();
    $mysqli = $GLOBALS['conn'];
    $consulta = "SELECT * FROM login WHERE email = '$email' and pass = '$pass'";
    $resultado = $mysqli->query($consulta);
    $login = mysqli_fetch_object($resultado);
    $_SESSION['email'] = $login->email;
    $_SESSION['user'] = $login->user;
    $_SESSION['rol'] = $login->rol;
    // echo json_encode($_SESSION['rol']);
    // exit();
    $nr = mysqli_num_rows($resultado);


    if ($nr == 1) {
        $row = mysqli_fetch_object($resultado);

        // echo json_encode($GLOBALS['email']);
        // exit();

        echo "<script>alert('Bienvenido $row->user'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Usuario no existe'); window.location='login.php';</script>";
    }
}

function destroyLogin()
{
    session_destroy();
    header("location: login.php");
}

function getContentSlider1()
{
    //traemos la conexión (global) a un ambito local (dentro de la función);
    $mysqli = $GLOBALS['conn'];


    //query para traer datos del slider 1
    $consulta = "SELECT * FROM `sliders` WHERE id_sd= 1";
    $resultado = $mysqli->query($consulta);
    $slider = mysqli_fetch_assoc($resultado);

    $GLOBALS['id1'] = $slider['id_sd'];
    $GLOBALS['title1'] = $slider['title_sd'];
    $GLOBALS['desc1'] = $slider['desc_sd'];
    $GLOBALS['img1'] = $slider['img_sd'];
}

function getContentSlider2()
{
    //traemos la conexión (global) a un ambito local (dentro de la función);
    $mysqli = $GLOBALS['conn'];


    //query para traer datos del slider 1
    $consulta = "SELECT * FROM `sliders` WHERE id_sd= 2";
    $resultado = $mysqli->query($consulta);
    $slider = mysqli_fetch_assoc($resultado);

    $GLOBALS['id2'] = $slider['id_sd'];
    $GLOBALS['title2'] = $slider['title_sd'];
    $GLOBALS['desc2'] = $slider['desc_sd'];
    $GLOBALS['img2'] = $slider['img_sd'];
}

function getContentSlider3()
{
    //traemos la conexión (global) a un ambito local (dentro de la función);
    $mysqli = $GLOBALS['conn'];


    //query para traer datos del slider 1
    $consulta = "SELECT * FROM `sliders` WHERE id_sd= 3";
    $resultado = $mysqli->query($consulta);
    $slider = mysqli_fetch_assoc($resultado);

    $GLOBALS['id3'] = $slider['id_sd'];
    $GLOBALS['title3'] = $slider['title_sd'];
    $GLOBALS['desc3'] = $slider['desc_sd'];
    $GLOBALS['img3'] = $slider['img_sd'];

    // echo "<pre>";
    // print_r($GLOBALS['title1']);
    // echo "</pre>";    
}

function getContentEnterprise()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM enterprise";
    $resultado = $mysqli->query($consulta);
    $enterprise = mysqli_fetch_assoc($resultado);

    $GLOBALS['id_ep'] = $enterprise['id_ep'];
    $GLOBALS['about'] = $enterprise['about'];
    $GLOBALS['mision'] = $enterprise['mision'];
    $GLOBALS['vision'] = $enterprise['vision'];
    $GLOBALS['valores'] = $enterprise['valores'];
}

function editContentSlider($id, $title, $desc)
{
    $mysqli = $GLOBALS['conn'];
    $mysqli->query("UPDATE sliders set title_sd = '$title', desc_sd = '$desc' WHERE id_sd = $id");
    header("Refresh:0");
}

function editContentEnterprise($nosotros, $mision, $vision, $valores)
{
    $mysqli = $GLOBALS['conn'];
    $mysqli->query("UPDATE enterprise set about = '$nosotros', mision = '$mision', vision = '$vision', valores = '$valores' WHERE id_ep = 1");
    header("Refresh:0");
}

function editImageSlider($id, $archivo)
{
    $mysqli = $GLOBALS['conn'];
    $target_dir = "../img/slider/";
    $target_file = $target_dir . basename($archivo["archivo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // ya hay una archivo que existe con ese nombre?
    if (file_exists($target_file)) {
        // $msg .= "La imagen ya existe. <br>";
        $uploadOk = 1;
    }

    // Tamaño máximo de la imagen
    if ($archivo["archivo"]["size"] > 5000000) {
        // $msg .= "Lo siento, el archivo es muy grande.<br>";
        $uploadOk = 0;
    }

    // Formatos autorizados
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        // $msg .= "Lo siento solo JPG, JPEG, PNG & GIF está permitido. <br>";
        $uploadOk = 0;
    }

    // Si upload ok es 0 entonces hubo un error
    if ($uploadOk == 0) {
        // $msg .= "Lo siento la imagen no puedo subirse.<br>";
        // si todo está bien guardamos la imagen
    } else {
        if (move_uploaded_file($archivo["archivo"]["tmp_name"], $target_file)) {
            echo "<script>alert('Imagen actualizada con éxito');</script>";
            $mysqli->query("UPDATE sliders set img_sd = '$target_file' WHERE id_sd = $id");
            header("Refresh:0");
        } else {
            echo "<script>alert('Lo siento, hubo un error a la hora de grabar en disco la imagen.');</script>";
        }
    }
}

function uploadImageClient($nameCliente, $linkCliente, $archivo)
{
    $mysqli = $GLOBALS['conn'];
    $target_dir = "../img/clients/";
    $target_file = $target_dir . basename($archivo["archivo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // ya hay una archivo que existe con ese nombre?
    if (file_exists($target_file)) {
        // $msg .= "La imagen ya existe. <br>";
        $uploadOk = 1;
    }

    // Tamaño máximo de la imagen
    if ($archivo["archivo"]["size"] > 5000000) {
        // $msg .= "Lo siento, el archivo es muy grande.<br>";
        $uploadOk = 0;
    }

    // Formatos autorizados
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        // $msg .= "Lo siento solo JPG, JPEG, PNG & GIF está permitido. <br>";
        $uploadOk = 0;
    }

    // Si upload ok es 0 entonces hubo un error
    if ($uploadOk == 0) {
        // $msg .= "Lo siento la imagen no puedo subirse.<br>";
        // si todo está bien guardamos la imagen
    } else {
        if (move_uploaded_file($archivo["archivo"]["tmp_name"], $target_file)) {
            echo "<script>alert('Cliente registrado con éxito');</script>";
            $mysqli->query("INSERT INTO clients (name_cl, link_cl, img_cl)  VALUES ('$nameCliente', '$linkCliente', '$target_file')");
            header("Refresh:0");
        } else {
            echo "<script>alert('Lo siento, hubo un error a la hora de grabar en disco la imagen.');</script>";
        }
    }
}

function uploadImageService($nameServicio, $archivo)
{
    $mysqli = $GLOBALS['conn'];
    $target_dir = "../img/services/";
    $target_file = $target_dir . basename($archivo["archivo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // ya hay una archivo que existe con ese nombre?
    if (file_exists($target_file)) {
        // $msg .= "La imagen ya existe. <br>";
        $uploadOk = 1;
    }

    // Tamaño máximo de la imagen
    if ($archivo["archivo"]["size"] > 5000000) {
        // $msg .= "Lo siento, el archivo es muy grande.<br>";
        $uploadOk = 0;
    }

    // Formatos autorizados
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        // $msg .= "Lo siento solo JPG, JPEG, PNG & GIF está permitido. <br>";
        $uploadOk = 0;
    }

    // Si upload ok es 0 entonces hubo un error
    if ($uploadOk == 0) {
        // $msg .= "Lo siento la imagen no puedo subirse.<br>";
        // si todo está bien guardamos la imagen
    } else {
        if (move_uploaded_file($archivo["archivo"]["tmp_name"], $target_file)) {
            echo "<script>alert('Servicio registrado con éxito');</script>";
            $mysqli->query("INSERT INTO services (name_sv, img_sv)  VALUES ('$nameServicio',  '$target_file')");
            header("Refresh:0");
        } else {
            echo "<script>alert('Lo siento, hubo un error a la hora de grabar en disco la imagen.');</script>";
        }
    }
}

function uploadBeneficio($nameBeneficio)
{
    $mysqli = $GLOBALS['conn'];

    $mysqli->query("INSERT INTO beneficios (name_bn)  VALUES ('$nameBeneficio')");
    header("Refresh:0");
}

function getImagesGallery()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM gallery";
    $GLOBALS['gallery'] = mysqli_query($mysqli, $consulta);
}

function getClientsList()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM clients";
    $GLOBALS['clients'] = mysqli_query($mysqli, $consulta);
}

function getServicesList()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM services";
    $GLOBALS['services'] = mysqli_query($mysqli, $consulta);
}

function getBeneficiosList()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM beneficios";
    $GLOBALS['beneficios'] = mysqli_query($mysqli, $consulta);
}

function deleteCliente($id)
{
    $rs = $GLOBALS['conn2'];
    $consulta = "SELECT img_cl FROM clients WHERE id_cl ='$id'";
    $resultado = $rs->query($consulta);
    $deleted = mysqli_fetch_assoc($resultado);
    $foto = $deleted['img_cl'];
    unlink($foto);

    $mysqli = $GLOBALS['conn'];
    $mysqli->query("DELETE FROM clients WHERE id_cl ='$id'");


    header('location: ../admin/clientes.php');
}

function deleteService($id)
{
    $rs = $GLOBALS['conn2'];
    $consulta = "SELECT img_sv FROM services WHERE id_sv ='$id'";
    $resultado = $rs->query($consulta);
    $deleted = mysqli_fetch_assoc($resultado);
    $foto = $deleted['img_sv'];
    unlink($foto);

    $mysqli = $GLOBALS['conn'];
    $mysqli->query("DELETE FROM services WHERE id_sv ='$id'");


    header('location: ../admin/servicios.php');
}

function deleteBeneficio($id)
{


    $mysqli = $GLOBALS['conn'];
    $mysqli->query("DELETE FROM beneficios WHERE id_bn ='$id'");


    header('location: ../admin/servicios.php');
}

function sendMessage($nameMsg, $emailMsg, $textMsg, $numberMsg)
{
    $mysqli = $GLOBALS['conn'];
    $mysqli->query("INSERT INTO messages (names_ms, email_ms, number_ms, text_ms) values ('$nameMsg','$emailMsg','$numberMsg', '$textMsg')");

    header("location: https://api.whatsapp.com/send?phone=51912941447&text=Hola,%20mi%20nombre%20es%20$nameMsg,%20mi%20correo%20es%20$emailMsg,%20vengo%20desde%20la%20web%20de%20Tech%20Agile,%20y%20mi%20consulta%20es%20la%20siguiente:%20$textMsg");
}

function getMessages()
{
    $mysqli = $GLOBALS['conn'];

    $consulta = "SELECT * FROM messages";
    $GLOBALS['messages'] = mysqli_query($mysqli, $consulta);
}
