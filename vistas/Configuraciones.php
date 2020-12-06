<?php
    require_once("../assets/header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
    }
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="../css/style.css">


<div class="container">

    <div class="row icon-box-03">
        <div class="col-md-4">
            <div class="icon-wrapper bg2" data-toggle="tooltip" data-placement="top" title="Departamento">
                <div class="sub-wrapper">
                    <a href="departamento.php?n=Departamnento">
                        <span class="livicon shadowed" data-n="folders" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-wrapper bg1" data-toggle="tooltip" data-placement="top" title="Ciudad">
                <div class="sub-wrapper">
                    <a href="ciudad.php?n=Ciudad">
                        <span class="livicon shadowed" data-n="bank" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-wrapper bg3" data-toggle="tooltip" data-placement="top" title="Roles">
                <div class="sub-wrapper">
                    <a href="roles.php?n=Roles de Usuarios">
                        <span class="livicon shadowed" data-n="address-book" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row icon-box-03">
        <div class="col-md-4">
            <div class="icon-wrapper bg5" data-toggle="tooltip" data-placement="top" title="Tipo de Abono">
                <div class="sub-wrapper">
                    <a href="TpoAbono.php?n=Tipo de Abono">
                        <span class="livicon shadowed" data-n="credit-card" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-wrapper bg6" data-toggle="tooltip" data-placement="top" title="Tipo de Producto">
                <div class="sub-wrapper">
                    <a href="TpoProducto.php?n=Tipo de Producto">
                        <span class="livicon shadowed" data-n="inbox" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="icon-wrapper bg8" data-toggle="tooltip" data-placement="top" title="Proveedores">
                <div class="sub-wrapper">
                    <a href="proveedor.php?n=Proveedores">
                        <span class="livicon shadowed" data-n="truck" data-s="100" data-c="white" data-hc="0"
                                data-onparent="true">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once("../assets/footer.php");?>