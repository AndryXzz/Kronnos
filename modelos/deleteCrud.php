<?php
    session_start();
    require_once("../controladores/conexion.php");
    $id = $_GET['id'];
    if ($_SESSION['user']['rol'] != "Admin") {
        header("location:../index.php?est=3");
        die();
    }
    try {
        $query = $db->prepare("DELETE FROM usuario WHERE Cedula = ?");
        $query->execute(array($id));
        
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