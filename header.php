<?php 
    // session_start();
    // Conecto a base de datos
    header('Content-Type: text/html; charset=UTF-8');
    $db = new PDO('mysql:host=localhost;dbname=kronnos;charset=utf8', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    session_start();
    $infoSession = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--        Etilos Yamid Cano         -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.5.1.slim.min.js"></script>
    <script src="./js/Chart.min.js"></script>
    <script src="./js/utils.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!--        Etilos Yamid Cano         -->


</head>

<body background="img/OIP.jpg">
<?php if($infoSession['rol'] != "Cliente") { ?>
    <header>
        <div class="left-menu">
            <div class="logo"><img src="img/kronnos logo.png" alt="Logo" srcset=""></div>
            <div class="content">
                <div id="usr">
                    <i class="fa fa-user" style="font-size:48px;"></i> <span>Bienvenido
                        <?= $_SESSION['user']['Nombre'] ?></span>
                </div>
                <div class="options">
                    <ul>
                        <li>
                            <i class="fa fa-home"></i> <span><a href="Admin.php">Dashboard</a></span>
                        </li>
                        <li>
                            <i class="fa fa-users"></i> <span><a href="Users.php">Usuarios</a></span>
                        </li>
                        <li>
                            <i class="fa fa-bar-chart"></i> <span>Contabilidad</span>
                        </li>
                        <li>
                            <i class="fa fa-archive"></i> <span>Inventario</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
<?php }else{ ?> <style>.content-body{margin:0px; width:100%;}</style> <?php }?>
<div class="top-menu">
            <div class="icons">
                <a href="cliente.php">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <i class="fa fa-search" aria-hidden="true"></i>
                <i class="fa fa-bell" aria-hidden="true"></i>
                <a href="perfilUsuario.php">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                </div>
                
            </div>
        </div>
    <div class="content-body">