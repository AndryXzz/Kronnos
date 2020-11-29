<?php
    require_once("header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
    }
?>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.5.1.slim.min.js"></script>
    <script src="./js/Chart.min.js"></script>
    <script src="./js/utils.js"></script>
    
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

<div class="container-fluid" id="container">
    <div class="row">
        <h5><span class="livicon" data-name="dashboard" data-c="dark" data-s="30" data-loop="true"
            data-hovercolor="dark"></span> Dashboard</h5>
    </div>
    <div id="row">
        <div class="row justify-content-center">
            <div id="caja1" class="col-3">
                <h3>Clientes</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de clientes">
                    351
                    <span class="livicon" data-name="users" data-c="White" data-s="60" data-loop="true"
                                data-hovercolor="White"></span>
                </h1>
            </div>
            <div id="caja2" class="col-3">
                <h3>Ventas Diarias</h3>
                <h2 data-toggle="tooltip" data-placement="top" title="Ventas diarias">
                    $3.689.500 
                    <span class="livicon" data-name="money" data-c="white" data-s="60" data-loop="true"
                        data-hovercolor="white"></span>
                </h2>
            </div>
            <div id="caja3" class="col-3">
                <h3>Cantidad Ventas</h3>
                <h1 data-toggle="tooltip" data-placement="top" title="Numero de ventas diarias">
                    50
                    <span class="livicon" data-name="truck" data-c="White" data-s="60" data-loop="true"
                    data-hovercolor="White"></span>
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
    </div>
    <br>
</div>

</body>


<script>
        function createConfig(position) {
            return {
                type: 'line',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    datasets: [{
                        label: 'Año pasado',
                        borderColor: window.chartColors.red,
                        backgroundColor: window.chartColors.red,
                        data: [50, 30, 46, 20, 80, 50, 75, 64, 45, 35, 78],
                        fill: false,
                    }, {
                        label: 'Año Curso',
                        borderColor: window.chartColors.blue,
                        backgroundColor: window.chartColors.blue,
                        data: [7, 49, 46, 13, 25, 30, 22],
                        fill: false,
                    }]
                },
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Ventas anuales - ' + position
                    },
                    tooltips: {
                        position: position,
                        mode: 'index',
                        intersect: false,
                    },
                }
            };
        }

        window.onload = function () {
            var container = document.querySelector('.barline');

            ['average'].forEach(function (position) {
                var div = document.createElement('div');
                div.classList.add('chart-container');

                var canvas = document.createElement('canvas');
                div.appendChild(canvas);
                container.appendChild(div);

                var ctx = canvas.getContext('2d');
                var config = createConfig(position);
                new Chart(ctx, config);
            });
        };
    </script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/raphael-min.js"></script>
    <script src="./js/livicons-customizer-1.4.js"></script>

</html>
