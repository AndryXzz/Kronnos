<?php
    session_start();
    require_once("header.php");
    $id = $_POST['idd'];
    $name = $_POST['name'];
    $rol = $_POST['rol'];
    $contra = $_POST['pass'];
    if ($_SESSION['user']['rol'] != "recepcion") {
        header("location:index.php?est=3");
        die();
    }
    try {
        $query = $db->prepare("INSERT INTO usuario VALUES (?,?,?,?)");
        $query->execute(array($id,$name,$rol,$contra));
        
        if ($query) {
            header("location:recepcion.php");
        }else{
            return false;
        }

    } catch (PDOException $ex) {
        echo "Ocurrió un error<br>";
        echo $ex->getMessage();
        exit;
    }
?>