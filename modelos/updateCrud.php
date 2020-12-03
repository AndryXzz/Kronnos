<?php
    session_start();
    require_once("header.php");
    $nombre = $_POST["name"];
    $rol = $_POST['rol'];
    $pass = $_POST['pass'];
    $id = $_POST['idd'];
    
    try {
        $query = $db->prepare("UPDATE usuario SET  nombre = ? , rol= ? , contra = ? WHERE id = ?");
        $query->execute(array($nombre,$rol,$pass,$id));
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