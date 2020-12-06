<?php
    require_once("../assets/header.php");
    if ($infoSession['rol'] != "Admin") {
    ?>
    <script>location.href = "../index.php?est=3"</script>
    <?php

?>
 
    <link rel="stylesheet" href="../css/style.css">

    

<div class="container-fluid" id="container">
    <div class="row align-items-end">

        <div id="btnright" class="col text-right">
            <a href="#" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top" title="Editar Usuario">
                <span data-toggle="modal" data-target="#editar">
                    <span class="livicon shadowed" data-n="edit" data-s="15" data-c="white" data-hc="0" data-onparent="true"></span>
                 Editar
                </span>
              </a>
        </div>
        
    </div>
    <div >
        <div class="row justify-content-center">
            <div id="fonfoto" class="col-3">
                <div>
                    <img src="../img/user-defaul.png" class="img-fluid" alt="Responsive image" alt="...">
                </div>
                <h3>Pepito Perez</h3>
            </div>
            <div class="col justify-content-center">
                <h2 class="text-center">Informacion usuario</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td>Pepito</td>
                            <th scope="row">Apellido</th>
                            <td>Perez</td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td>Pepito @gmaol.com</td>
                            <th scope="row">Genero</th>
                            <td>Sin Definir</td>
                        </tr>
                        <tr>
                            <th scope="row">Cedula</th>
                            <td>1.563.228</td>
                            <th scope="row">Direccion</th>
                            <td>Calle avenida suba</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  
  <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><input type="text" class="form-control" value="Pepito"></td>
                            <th scope="row">Apellido</th>
                            <td><input type="text" class="form-control" value="Perez"></td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td><input type="text" class="form-control" value="Pepito @gmaol.com"></td>
                            <th scope="row">Genero</th>
                            <td><input type="text" class="form-control" value="Sin Definir"></td>
                        </tr>
                        <tr>
                            <th scope="row">Cedula</th>
                            <td><input type="text" class="form-control" value="1.563.228"></td>
                            <th scope="row">Direccion</th>
                            <td><input type="text" class="form-control" value="Calle avenida suba"></td>
                        </tr>
                        <tr>
                            <th scope="row">Subir Foto</th>
                            <td><input type="file" name="archivosubido"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>

    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/raphael-min.js"></script>
    <script src="../js/livicons-customizer-1.4.js"></script>

</html>
