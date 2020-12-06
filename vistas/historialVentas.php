<?php require_once("../assets/header.php");
    if ($infoSession['rol'] != "Admin") {
    ?>
    <script>location.href = "../index.php?est=3"</script>
    <?php

?>
    <table class="tableStyle" cellpadding="10">
        <thead>
            <tr>
                <th>Id Venta</th>
                <th>CC Cliente</th>
                <th>CC Vendedor</th>
                <th>Id Factura</th>
                <th>Tipo de Abono</th>
                <th>Fecha de venta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>123</td>
                <td>1000785418</td>
                <td>3</td>
                <td>Contado</td>
                <td>28/10/2020</td>
            </tr>
            <tr>
                <td>2</td>
                <td>456</td>
                <td>1000785418</td>
                <td>7</td>
                <td>Crédito</td>
                <td>30/10/2020</td>
            </tr>
            <tr>
                <td>3</td>
                <td>789</td>
                <td>01236547</td>
                <td>1</td>
                <td>Contado</td>
                <td>14/10/2020</td>
            </tr>
            <tr>
                <td>4</td>
                <td>101</td>
                <td>01236547</td>
                <td>2</td>
                <td>Contado</td>
                <td>31/10/2020</td>
            </tr>
            <tr>
                <td>5</td>
                <td>121</td>
                <td>25984652</td>
                <td>3</td>
                <td>Crédito</td>
                <td>28/11/2020</td>
            </tr>
        </tbody>
    </table>
<?php require_once("../assets/footer.php");?>