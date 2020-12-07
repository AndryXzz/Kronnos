<?php
    session_start();
    require_once("../controladores/conexion.php");
    $id = $_POST['idd'];
    $city = $_POST['city'];
    $dpto = $_POST['dpto'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $lName = $_POST['lastName'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $contra = $_POST['passw'];
    if ($_SESSION['user']['rol'] != "Admin") {
        header("location:../index.php?est=3");
        die();
    }
    try {
        $query = $db->prepare("INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $query->execute(array($id,$city,$rol,$name,$lName,$address,$number,$email,$contra));
        if ($query) {
            header("location:../vistas/Users.php?n=Usuarios");
        }else{
            return false;
        }

    } catch (PDOException $ex) {
        echo "Ocurrió un error<br>";
        echo $ex->getMessage();
        exit;
    }
?>