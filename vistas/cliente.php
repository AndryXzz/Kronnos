<?php require_once("../assets/header.php");?>


    <link rel="stylesheet" href="../css/style.css">


<div class="container-fluid" id="container">
    <div class="row">
        <h5><span class="livicon" data-name="dashboard" data-c="dark" data-s="30" data-loop="true"
            data-hovercolor="dark"></span> Dashboard</h5>
    </div>
    <div id="row">
        <div class="row justify-content-center">
            <div id="caja1" class="col-3">
                <h3>Cuotas Pagadas</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de cuotas pagadas">
                    02
                    <span class="livicon" data-name="piggybank" data-c="White" data-s="60" data-loop="true"
                                data-hovercolor="White"></span>
                </h1>
            </div>
            <div id="caja2" class="col-3">
                <h3>Saldo Pendiente</h3>
                <h2 data-toggle="tooltip" data-placement="top" title="Saldo Pendiente">
                    $220.000
                    <span class="livicon" data-name="money" data-c="white" data-s="60" data-loop="true"
                                data-hovercolor="white"></span>
                </h2>
            </div>
            <div id="caja3" class="col-3">
                <h3>Cuotas Por Pagar</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de cuotas por pagar">
                    50
                    <span class="livicon" data-name="credit-card" data-c="White" data-s="60" data-loop="true"
                            data-hovercolor="White"></span>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div id="caja5" class="col-5">
                <div>
                    <h3>Crédito Adquirido</h3>
                    <br>
                    <div data-toggle="tooltip" data-placement="top" title="Credito Disponible">
                        <div class="progress" id="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;">70%</div>
                        </div>
                        <div><h5>$200.000</h5></div>
                    </div>
                    <br>
                    <h3>Total credito 250.000 </h3>
                </div>
            </div>

            <div id="scroll" class="col-5">
                <div id="caja4">
                    <table id="table" class="table">
                        <h3>Historial de Pagos</h3>
                        <tr>
                            <th data-toggle="tooltip" data-placement="top" title="Pago realizado">Pagado</th>
                            <th data-toggle="tooltip" data-placement="top" title="Fecha en que realizo el pago">Fecha</th>
                            <th data-toggle="tooltip" data-placement="top" title="Descarga su Extracto">Extracto</th>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                        <tr>
                            <td>$120.000</td>
                            <td>15/03/2020</td>
                            <td><a target="_blank" href="./">Descargar</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>
</div>

</div>

</body>

    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/raphael-min.js"></script>
    <script src="./js/livicons-customizer-1.4.js"></script>
</html>