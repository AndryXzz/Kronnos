<?php
    require_once("../assets/header.php");
    if ($infoSession['rol'] != "Admin") {
        ?>
        <script>location.href = "../index.php?est=3"</script>
        <?php
    
    }
?>

<link rel="stylesheet" href="../css/style.css">

<div class="container-fluid" id="container">
    <div class="row justify-content-center">
            <div id="caja1" class="col-3">
                <h3>Clientes</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de clientes">
                    351
                    <span class="livicon" data-name="users" data-c="dark" data-s="60" data-loop="true"
                                data-hovercolor="dark"></span>
                </h1>
            </div>
            <div id="caja2" class="col-3">
                <h3>Ventas Diarias</h3>
                <h2 data-toggle="tooltip" data-placement="top" title="Ventas diarias">
                    $3.689.500 
                    <span class="livicon" data-name="money" data-c="dark" data-s="60" data-loop="true"
                        data-hovercolor="dark"></span>
                </h2>
            </div>
            <div id="caja3" class="col-3">
                <h3>Cantidad Ventas</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de ventas diarias">
                    50
                    <span class="livicon" data-name="truck" data-c="dark" data-s="60" data-loop="true"
                    data-hovercolor="dark"></span>
                </h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div id="caja5" class="col-5">
                <div class="barline">
                </div>
            </div>

            <div id="scroll" class="col-5">
                <div id="caja4">
                    <table id="table" class="table">
                        <h3>Informe Diario</h3>
                        <tr>
                            <th data-toggle="tooltip" data-placement="top" title="Nombre Vendedor">Vendedor</th>
                            <th data-toggle="tooltip" data-placement="top" title="Venta realizadas al dia">Venta</th>
                            <th data-toggle="tooltip" data-placement="top" title="Comicion por venta realizada">Comicion</th>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>$120.000</td>
                            <td>12.000</td>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>$120.000</td>
                            <td>12.000</td>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>$120.000</td>
                            <td>12.000</td>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>$120.000</td>
                            <td>12.000</td>
                        </tr>
                        <tr>
                            <td>Pepito Perez</td>
                            <td>$120.000</td>
                            <td>12.000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
</div>




<script src="../js/Admin.js"></script>

<?php require_once("../assets/footer.php");?>
