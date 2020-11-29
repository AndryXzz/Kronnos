<?php
    require_once("header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
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
    <button class="btn" id="create">Crear nuevo Usuario</button>
    <div class="tableCont">
        <table class="tableStyle" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th># Identificación</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Ciudad</th>
                    <th>Rol</th>
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
                                $row[Cedula]
                            </td>
                            <td>
                                $row[Nombre]
                            </td>
                            <td>
                                $row[Apellido]
                            </td>
                            <td>
                                $row[Direccion]
                            </td>
                            <td>
                                $row[Celular]
                            </td>
                            <td>
                                $row[Correo]
                            </td>
                            <td>
                                $row[rol]
                            </td>
                            <td>
                                $row[ciudad]
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
    <script>
        const modal = document.getElementById("modal");
        const botones = document.getElementsByClassName('crud');


        var abrirmodal = function (tipoAccion) {
            let infoID = '';
            let action = '';
            let inputId = '';
            let idAct = '';
            let contra = '';
            if (tipoAccion == "Actualizar") {
                infoID = `<p id="inpID"></p>`;
                action = 'updateCrud.php';
                idAct = `<input type="hidden" id="idd" name="idd">`;

            } else {
                action = 'crearCrud.php';
                inputId = `
                    <section>
                        <label for="name">Número de Cédula</label>
                        <input required class="input" type="number" name="idd" id="idd">
                    </section>
                `;
                contra= `<section>
                        <label for="passw">Contraseña</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="passw">
                    </section>`;
            }

            modal.innerHTML = `
            <div style="margin:5% 30% 0px 30%; padding: unset;  max-height: 80%;">
                <button id="closemodal">X</button>
                <form id="formm" action="${action}" method="POST">
                    ${infoID}
                    ${inputId}
                    <section>
                        <label for="name">Nombre</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="name">
                    </section>
                    <section>
                        <label for="lastName">Apellidos</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="lastNamename">
                    </section>
                    <section>
                        <label for="address">Dirección</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="address">
                    </section>
                    <section>
                        <label for="number">Celular</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="number">
                    </section>
                    <section>
                        <label for="email">Correo</label>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="email">
                    </section>
                    <section>
                        <label for="Rol">Rol</label>
                            <select required name="rol" id="rol" required="" class="input" >
                                <option selected disabled="" value=""> Seleccione un rol</option>
                                <option value="1">Admin</option>
                                <option value="2">Cliente</option>
                                <option value="3">Vendedor</option>
                                <option value="4">Cobrador</option>
                                <option value="5">Contador</option>
                            </select>
                    </section>
                    ${idAct}
                    ${contra}
                    <input required class="btn" type="submit" value="${tipoAccion}">
                </form>
        </div>`;

            cerrar();

        }
        var cerrar = function () {
            document.getElementById("closemodal").addEventListener("click", function () {
                modal.style.animation = "cerrar 0.5s ease";
                setTimeout(function () { modal.style.display = "none"; modal.style.animation = ""; }, 500);
                modal.innerHTML = ``;
            });
        }

        var aparecer = function () {
            modal.style.opacity = "0";
            modal.style.display = "block"
            modal.style.animation = "aparecer 0.5s ease";
            setTimeout(function () { modal.style.opacity = ""; modal.style.animation = ""; }, 500);
        }

        var editar = function () {
            // Aparecer modal
            aparecer();
            abrirmodal("Actualizar");

            var valores = this.parentNode.parentNode.getElementsByTagName("td");
            var inputs = modal.getElementsByTagName("input");
            //Poner el ID en el modal
            document.getElementById("inpID").innerHTML = valores[0].innerHTML.trim();
            document.getElementById("idd").value = valores[0].innerHTML.trim();

            console.log(valores);

            //poner info en los input
                console.log(inputs);
                document.getElementById("rol").value = valores[2].innerHTML.trim();
            for (let i = 1; i <= 5; i++) {
                inputs[i-1].value = valores[i].innerHTML.trim();
            }

            let  idRol = 0;
            switch (valores[6].innerHTML.trim()) {
                case "Admin":
                    idRol = 1;
                    break;
                case "Cliente":
                    idRol = 2;
                    break;
                case "Vendedor":
                    idRol = 3;
                    break;
                case "Cobrador":
                    idRol = 4;
                    break;
                case "Contador":
                    idRol = 5;
                    break;
            
            }
            document.getElementById("rol").value = idRol;
            

        }

        var borrar = function () {
            let borrar = confirm("Está seguro de desear borrar este paciente? la info no se podrá recuperar");
            if (borrar) {
                let id = this.parentNode.parentNode.getElementsByTagName("td")[0].innerHTML.trim();
                location.href = 'deleteCrud.php?id=' + id;
            }
        }

        var crear = function () {
            aparecer();
            abrirmodal("Crear");
        }

        for (let i = 0; i < botones.length; i++) {
            botones[i].getElementsByTagName("button")[0].addEventListener("click", editar);
            botones[i].getElementsByTagName("button")[1].addEventListener("click", borrar);
        }
        document.getElementById("create").addEventListener("click", crear);

    </script>
    <hr>

    <a href="cerrarSesion.php">Cerrar Sesión</a>
    </div>
</body>

</html> 