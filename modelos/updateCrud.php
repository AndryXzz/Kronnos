<?php
    session_start();
    require_once("../controladores/conexion.php");
    $city = $_POST['city'];
    $dpto = $_POST['dpto'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $lName = $_POST['lastName'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $id = $_POST['idd'];
    
    try {
        // $query = $db->prepare("UPDATE usuario SET  nombre = ? , rol= ? , contra = ? WHERE id = ?");
        $query = $db->prepare("UPDATE usuario SET  Ciudad_idCiudad = ?, Rol_idRol = ? ,Nombre = ? , Apellido = ? , Direccion = ? , Celular = ? , Correo = ? WHERE Cedula = ?");
        $query->execute(array($city,$rol,$name,$lName,$address,$number,$email,$id));
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