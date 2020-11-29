<?php
    require_once("header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin") {
        header("location:index.php?est=3");
        die();
    }
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/progress.css">

<div class="caja0">
    <div class="caja">
        <div class="caja1">
            <h3>Cuotas Pagadas</h3>
            <table>
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
        <div class="caja2">
            <h3>Saldo Pendiente</h3>
            <table>
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
        <div class="caja3">
            <h3>Cuotas Por Pagar</h3>
            <table>
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
    <div class="caja">
        <div class="caja4">
            <h3>Crédito Adquirido</h3>
            <table>
                <tr>
                    <th>
                        <div class="progress">
                            <p>En uso $50.000</p>
                            <progress id="php" max="100" value="72"></progress>
                            <span></span>
                        </div>
                    </th>
                    <th>
                        Disponible $200.000
                    </th>
                </tr>
            </table>
            <h3>Total credito 250.000 </h3>
        </div>
        <div class="caja4">
            <h3>Historial de Pagos</h3>
            <table id="table" class="table">
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
            </table>
            <h3>Total Pagado 250.000 </h3>
        </div>
    </div>
</div>

</body>
<script src="./js/jquery-1.11.1.min.js"></script>
<script src="./js/raphael-min.js"></script>
<script src="./js/livicons-customizer-1.4.js"></script>
<script src="./js/progress.js"></script>

</html>
