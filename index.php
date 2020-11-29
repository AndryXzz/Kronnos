<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        var estado = function (est) {
            switch (est) {
                case 1: //contra incorrecta
                    alert("Su contraseña es incorrecta");
                    break;

                case 2: // no existe usuario
                    alert("Su identificación no existe");
                    break;

                case 3: // no existe usuario
                    alert("Usted no tiene autorización, por favor, Ingrese de nuevo.");
                    break;

                default:
                    break;
            }
        }
    </script>
    <style>
        html {
            background-image: url(img/OIP.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="login">
        <div>
            <img src="img/kronnos logo.png" alt="LOGO" srcset="" style="display: inline-block;margin-bottom: 18px;">
            <form method="POST" action="dashboard.php" style="display: inline-block;">
                <label><strong>Iniciar Sesión</strong></label>
                <input type="text" name="cc" placeholder="        Nombre" required="">
                <input type="password" name="ps" id="pass" required="" placeholder="        Contraseña">
                <br><br>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</body>

</html>
<?php 
    if (!empty($_GET['est'])) {
?>
<script>estado(<?= $_GET['est'] ?>)</script>
<?php
    }
?>


</script>