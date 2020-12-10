<?php
    require_once("../assets/header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
    }
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!--        Etilos Yamid Cano         -->
    <link rel="stylesheet" href="../css/style.css">
    <!--        Etilos Datatable         -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
    <Script>
    $(document).ready(function() {
        $('#grid').DataTable();
    });
    </Script>

<div class="container-fluid" id="container">
    <div class="row align-items-end">

        <div id="btnleft" class="col text-left">
            <a href="#" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top"
                title="Crear Producto">
                <span data-toggle="modal" data-target="#crear">
                    <span class="livicon shadowed" data-n="plus" data-s="15" data-c="white" data-hc="0"
                        data-onparent="true"></span>
                        Crear Producto
                </span>
            </a>
            <a href="#" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top"
                title="Stock">
                <span data-toggle="modal" data-target="#Stock">
                    <span class="livicon shadowed" data-n="plus" data-s="15" data-c="white" data-hc="0"
                        data-onparent="true"></span>
                        Stock
                </span>
            </a>
        </div>
    </div>
    <br>
    <div class="justify-content-center">
    <table id="grid" class="table table-striped table-bordered dt-responsive nowrap">
        <thead >
            <tr>
                <th># Articulo</th>
                <th>Nombre Articulo</th>
                <th>Foto Articulo</th>
                <th style="width:330px">Descripcion</th>
                <th>STOCK</th>
                <th width="150px">Opciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>01</td>
                <td>Felpa Color Crema</td>
                <td><img id="img" src="../img/img_tienda/felpa-crema_12.jpg" alt=""></td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                <br>  Vivamus viverra rutrum felis id aliquam. Curabitur.</td>
                <td style="color:green">10</td>
                <td>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ver">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="eye-open" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span data-toggle="modal" data-target="#editar">
                            <span class="livicon shadowed" data-n="edit" data-s="30" data-c="blue" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <span data-toggle="modal" data-target="#eliminar">
                            <span class="livicon shadowed" data-n="trash" data-s="30" data-c="red" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>02</td>
                <td>Sabana Ajustable</td>
                <td><img src="../img/img_tienda/cama_intro1.jpg"></td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                <br>  Vivamus viverra rutrum felis id aliquam. Curabitur.</td>
                <td style="color:blue">5</td>
                <td>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ver">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="eye-open" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span data-toggle="modal" data-target="#editar">
                            <span class="livicon shadowed" data-n="edit" data-s="30" data-c="blue" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <span data-toggle="modal" data-target="#eliminar">
                            <span class="livicon shadowed" data-n="trash" data-s="30" data-c="red" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <br>
                <td>03</td>
                <td>Sabana Doble Planchado</td>
                <td><img src="../img/img_tienda/doble_planchado_click_comprar.png" class="offer-img"></td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                <br>Vivamus viverra rutrum felis id aliquam. Curabitur.</td>
                <td style="color:red">2</td>
                <td>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ver">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="eye-open" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span data-toggle="modal" data-target="#editar">
                            <span class="livicon shadowed" data-n="edit" data-s="30" data-c="blue" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <span data-toggle="modal" data-target="#eliminar">
                            <span class="livicon shadowed" data-n="trash" data-s="30" data-c="red" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>

    </table>
    </div>

</div>

<!-- Modal Stock -->
<div class="modal fade" id="Stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
                        <tr>
                            <th scope="row">Articulo</th>
                            <td><select class="custom-select custom-select-lg mb-3">
                            <option selected>Selecione un Articulo</option>
                            <option value="1">Felpa Color Crema</option>
                            <option value="2">Sabana Ajustable</option>
                            <option value="3">Sabana Doble Planchado</option>
                            </select></td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Stock de entrada</th>
                            <td><input type="number" class="form-control"></td>
                            
                        </tr>
                        <tr>
                            <th scope="row">Stock de Salida</th>
                            <td><input type="number" class="form-control"></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="crear1">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
                        <tr>
                            <th scope="row"># Articulo</th>
                            <td><input type="text" class="form-control"></td>
                            <th scope="row">Nombre Articulo</th>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <th scope="row">Descripcion</th>
                            <td><textarea class="md-textarea form-control" rows="2" value=""></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">Foto Articulo</th>
                            <td><input type="file" name="archivosubido"></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="crear1">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
                        <tr>
                            <th scope="row"># Articulo</th>
                            <td><input type="text" class="form-control" value="01"></td>
                            <th scope="row">Nombre Articulo</th>
                            <td><input type="text" class="form-control" value="Felpa Color Crema"></td>
                        </tr>
                        <tr>
                            <th scope="row">Descripcion</th>
                            <td><textarea class="md-textarea form-control" rows="2" value="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra rutrum felis id aliquam. Curabitur.	</textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">Foto Articulo</th>
                            <td><input type="file" name="archivosubido"></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="editar1">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ver -->
<div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ver Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
                        <tr>
                            <th scope="row"># Articulo</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre Articulo</th>
                            <td>Felpa Color Crema</td>
                        </tr>
                        <tr>
                            <th scope="row">Descripcion</th>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra rutrum felis id aliquam. Curabitur.</td>
                        </tr>
                        <tr>
                            <th scope="row">Foto Articulo</th>
                            <td><img id="img" src="../img/img_tienda/felpa-crema_12.jpg" alt=""></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-success">Guardar</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal Eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <table class="table">
                        <tr>
                            <th scope="row"># Articulo</th>
                            <td>01</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre Articulo</th>
                            <td>Felpa Color Crema</td>
                        </tr>
                        <tr>
                            <th scope="row">Descripcion</th>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra rutrum felis id aliquam. Curabitur.</td>
                        </tr>
                        <tr>
                            <th scope="row">Foto Articulo</th>
                            <td><img id="img" src="../img/img_tienda/felpa-crema_12.jpg" alt=""></td>
                        </tr>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                <button type="button" class="btn btn-success" data-dismiss="modal" id="eliminar1">Confirmar?</button>
            </div>
        </div>
    </div>
</div>


<?php require_once("../assets/footer.php");?>