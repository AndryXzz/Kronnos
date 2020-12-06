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
                title="Crear Tipo Abono">
                <span data-toggle="modal" data-target="#crear">
                    <span class="livicon shadowed" data-n="plus" data-s="15" data-c="white" data-hc="0"
                        data-onparent="true"></span>
                        Crear Tipo Abono
                </span>
            </a>
        </div>
    </div>
    <br>
    <div class="justify-content-center">
    <table id="grid" class="table table-striped table-bordered dt-responsive nowrap">
        <thead >
            <tr>
                <th>ID</th>
                <th>Tipo Abono</th>
                <th COLSPAN="3">Opciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Contado</td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ver">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="eye-open" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span data-toggle="modal" data-target="#editar">
                            <span class="livicon shadowed" data-n="edit" data-s="30" data-c="blue" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <span data-toggle="modal" data-target="#eliminar">
                            <span class="livicon shadowed" data-n="trash" data-s="30" data-c="red" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Credito</td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Ver">
                        <span data-toggle="modal" data-target="#ver1">
                            <span class="livicon shadowed" data-n="eye-open" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Editar">
                        <span data-toggle="modal" data-target="#editar1">
                            <span class="livicon shadowed" data-n="edit" data-s="30" data-c="blue" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
                <td width="40px">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar">
                        <span data-toggle="modal" data-target="#eliminar1">
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


<!-- Modal Crear -->
<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td><input type="text" class="form-control"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Guardar</button>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td><input type="text" class="form-control" value="Contado"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Guardar</button>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Ver Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td>Contado</td>

                        </tr>
                    </tbody>
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
                <h5 class="modal-title" id="exampleModalLongTitle">ELiminar Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td>Contado</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                <button type="button" class="btn btn-success">Confirmar?</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Editar -->
<div class="modal fade" id="editar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td><input type="text" class="form-control" value="Meta"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ver -->
<div class="modal fade" id="ver1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ver Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td>Meta</td>

                        </tr>
                    </tbody>
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
<div class="modal fade" id="eliminar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ELiminar Tipo Abono</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Tipo Abono</th>
                            <td>Meta</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> -->
                <button type="button" class="btn btn-success">Confirmar?</button>
            </div>
        </div>
    </div>
</div>

<?php require_once("../assets/footer.php");?>