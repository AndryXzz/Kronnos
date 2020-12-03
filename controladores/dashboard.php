<?php 

header('Content-Type: text/html; charset=UTF-8');
$id = $_POST["cc"];
$pass = $_POST["ps"];
// Conecto a base de datos
require_once("../assets/header.php");
// <----------------------------------------------------------------->
$page = '';
try {
    // $stmt = $db->prepare("SELECT * FROM rol; ");
    // header("Content-Type:" ,"text/html; charset=utf-8");
    $query = $db->prepare(
        "SELECT u.Cedula, u.Nombre,u.Apellido, u.Direccion, u.Correo, u.Contraseña, r.nombreRol AS rol FROM usuario u INNER JOIN rol r ON u.Rol_idRol = r.idRol WHERE Cedula = ?;");
    // $query->execute();
    $query->execute( array($id) );

    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($rows[0]['Contraseña'])) { // si entra, significa que el usuario está registrado en DB   
        $contradb = ($rows[0]['Contraseña']);
        // echo($contradb);
        if ($contradb === $pass) { //Entra a página
            $page = '../vistas/'. $rows[0]['rol'].'.php?n=Dashboard';
            session_start();
            $_SESSION['user'] =  $rows[0];
        }else{ //contra incorrecta
            $page = "../index.php?est=1";
        }

    }else{ //si no, retorna a login
        $page = "../index.php?est=2";
    }

    header('Location:'.$page);
    
    die();

} catch(PDOException $ex) { //si hay un error en el query, mandará el msj acá
    echo "Ocurrió un error<br>";
    echo $ex->getMessage();
    exit;
}
?>