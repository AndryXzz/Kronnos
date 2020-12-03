<?php
    session_start();
    require_once("header.php");
    $id = $_GET['id'];
    if ($_SESSION['user']['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
    }
    try {
        $query = $db->prepare("DELETE FROM usuario WHERE Cedula = ?");
        $query->execute(array($id));
        
        if ($query) {
            header("location:Admin.php");
        }else{
            return false;
        }

    } catch (PDOException $ex) {
        echo "Ocurrió un error<br>";
        echo $ex->getMessage();
        exit;
    }
?>