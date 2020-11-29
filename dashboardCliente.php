<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <div class="container-fluid" id="container">
        <div>
            <br>
            <h5>DASHBOARD</h5>
        </div>
        <div id="row">
            <div class="row justify-content-center">
                <div id="caja1" class="col-3">
                    <h3 id="h3">Cuotas Pagadas</h3>
                    <table class="table">
                        <tr>
                            <th>
                                <h1>02</h1>
                            </th>
                            <th>
                                <span class="livicon" data-name="piggybank" data-c="White" data-s="60" data-loop="true"
                                    data-hovercolor="White"></span>
                            </th>
                        </tr>
                    </table>
                </div>
                <div id="caja2" class="col-3">
                    <h3 id="h3">Saldo Pendiente</h3>
                    <table class="table">
                        <tr>
                            <th>
                                <h1>$220.000</h1>
                            </th>
                            <th>
                                <span class="livicon" data-name="money" data-c="black" data-s="60" data-loop="true"
                                    data-hovercolor="black"></span>
                            </th>
                        </tr>
                    </table>
                </div>
                <div id="caja3" class="col-3">
                    <h3 id="h3">Cuotas Por Pagar</h3>
                    <table class="table">
                        <th>
                            <h1>50</h1>
                        </th>
                        <th>
                            <span class="livicon" data-name="credit-card" data-c="White" data-s="60" data-loop="true"
                                data-hovercolor="White"></span>
                        </th>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
  
                    <div id="caja4" class="col-5">
                        <h3>Crédito Adquirido</h3>
                        <table class="table">
                            <tr>
                                <th>
                                    <div class="progress" id="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                      </div>
                                </th>
                                <th>
                                    Disponible $200.000
                                </th>
                            </tr>
                        </table>
                        <h3>Total credito 250.000 </h3>
                    </div>

                <div id="scroll" class="col-5">
                    <div id="caja4" >
                        <table id="table" class="table">
                            <h3 id="h3">Historial de Pagos</h3>
                            <tr>
                                <th>
                                    Valor Pagado
                                </th>
                                <th>
                                    Fecha
                                </th>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
                            </tr>
                            <tr>
                                <td>$120.000</td>
                                <td>15/03/2020</td>
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


</body>
    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/raphael-min.js"></script>
    <script src="./js/livicons-customizer-1.4.js"></script>
    <script src="./js/bootstrap-material-design.js"></script>
</html>