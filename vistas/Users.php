<?php
    require_once("../controladores/conexion.php");
    require_once("../assets/header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        ?>
        <script>location.href = "../index.php?est=3"</script>
        <?php
    }
    try {

        $query = $db->prepare("SELECT u.Cedula, u.Nombre, u.Apellido , u.Direccion , u.Celular, u.Correo, r.nombreRol AS rol, c.nombreCiudad AS ciudad FROM usuario u INNER JOIN rol r ON u.Ciudad_idCiudad = r.idRol INNER JOIN ciudad c ON u.Ciudad_idCiudad = c.idCiudad;");
        $query->execute();
        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $ex) { //si hay un error en el query, mandará el msj acá
        echo "Ocurrió un error<br>";
        echo $ex->getMessage();
        exit;
    }
?>
<div id="modal"></div>
<div class="tableCont">
    <div class="btncont">        
        <button class="butn" id="create">Crear nuevo Usuario</button>
    </div>
    <hr>
    <br>
        <table class="tableStyle" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th># Identificación</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Ciudad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($rows);
                    foreach ($rows as $x => $row) {
                        echo"
                        <tr>
                            <td>
                                <span>$row[Cedula]</span>
                            </td>
                            <td>
                                <span>$row[Nombre]</span>
                            </td>
                            <td>
                                <span>$row[Apellido]</span>
                            </td>
                            <td>
                                <span>$row[Direccion]</span>
                            </td>
                            <td>
                                <span>$row[Celular]</span>
                            </td>
                            <td>
                                <span>$row[Correo]</span>
                            </td>
                            <td>
                                <span>$row[rol]</span>
                            </td>
                            <td>
                                <span>$row[ciudad]</span>
                            </td>
                            <td class='crud'>
                                <button>editar info</button>
                                <button>Borrar</button>
                            </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="../js/modalUsers.js"></script>
    <hr>

    </div>
    <?php
        require_once("../assets/footer.php");
    ?>
