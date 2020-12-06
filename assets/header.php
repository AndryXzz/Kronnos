<?php 
    session_start();
    $infoSession = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kronnos</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../img/faviconxd.ico" type="image/x-icon">


    <!--        Etilos Yamid Cano         -->
    <link rel="stylesheet" href=".././css/bootstrap.min.css">
    <script src=".././js/jquery-3.5.1.slim.min.js"></script>
    <script src=".././js/Chart.min.js"></script>
    <script src=".././js/utils.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!--        Etilos Yamid Cano         -->


</head>

<body background="../img/OIP.jpg">
    <?php if($infoSession['rol'] != "Cliente") { ?>
    <header>
        <div class="left-menu">
            <div class="logo"><img src="../img/kronnos_logo.png" alt="Logo" srcset=""></div>
            <div class="content">
                <div id="usr">
                    <i class="fa fa-user" style="font-size:48px;"></i> <span>Bienvenido
                        <?= $_SESSION['user']['Nombre'] ?></span>
                </div>
                <div class="options">
                    <ul>
                        <li>
                            <i class="fa fa-home"></i> <span><a href="Admin.php?n=Dashboard">Dashboard</a></span>
                        </li>
                        <li>
                            <i class="fa fa-users"></i> <span><a href="Users.php?n=Usuarios">Usuarios</a></span>
                        </li>
                        <li>
                            <i class="fa fa-bar-chart"></i> <span><a
                                    href="Facturas.php?n=Contabilidad">Contabilidad</a></span>
                        </li>
                        <li>
                            <i class="fa fa-archive"></i> <span><a
                                    href="Inventario.php?n=Inventario">Inventario</a></span>
                        </li>
                        <li>
                            <i class="fa fa-history" aria-hidden="true"></i> <span><a
                                    href="historialVentas.php?n=Historial de ventas">Ventas</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <?php }else{ ?> <style>
        .content-body {
            margin: 0px;
            width: 100%;
        }
    </style> <?php }?>
    <div class="top-menu">
        <div class="icons">
            <a href="#" title="Historial de Nomina" name="nomina" onclick="asigEventobtn(this)">
                <i class="fa fa-money" aria-hidden="true"></i>
            </a>
            <a href="#" title="Tienda Web" name="tienda" onclick="asigEventobtn(this)">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
            <!-- <a href="" name="selecc">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="" name="selecc">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a> -->

                <a href="perfilUsuario.php?n=Perfil De Usuario">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
                <a href="Configuraciones.php?n=Configuraciones Tablas">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </a>
                <a href="#" title="Mi cuenta" name="cuenta" onclick="asigEventobtn(this)">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </a>
                <a id="offSes" title="Cerrar Sesión">
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                </a>
            </div>


        </div>
    </div>
    <script>
        document.getElementById("offSes").addEventListener('click', function () {
            let salir = confirm("¿Seguro desea cerrar sesión?");
            if (salir) {
                location.href = "../controladores/cerrarSesion.php";
            }
        });
        var title = "";
        var asigEventobtn = function (obj) {
            var redireccion = obj.getAttribute("name");
            let url = "../vistas/";
            switch (redireccion) {
                case "nomina":
                    url += "historialNomina.php?n=Historial de nómina";
                    // title = "Historia de nómina";
                    break;
                case "tienda":
                    url = "../credihogar_tienda.php";
                    break;
                case "cuenta":
                    url += "perfilUsuario.php?n=Mi cuenta";
                    // title = "Mi cuenta";
                    break;

                default:
                    break;
            }
            location.href = url;
        }

        // const btnmenu = document.getElementsByClassName("icons")[0].children;
        // console.log(btnmenu);

        // for (let i = 0; i < btnmenu.length - 1; i++) {
        //     console.log(btnmenu[i]);;
        //     btnmenu[i].addEventListener("click", asigEventobtn(this));
        // }
    </script>
    <div class="content-body">
        <div>
            <h5><span class="livicon" data-name="dashboard" data-c="dark" data-s="30" data-loop="true" data-hovercolor="dark"></span> <span><?= $_GET['n']; ?></span></h5>
        </div>
        <div id="row">