<?php require_once("../assets/header.php");
    if ($infoSession['rol'] != "Admin") {
    ?>
    <script>location.href = "../index.php?est=3"</script>
    <?php
    }
?>

<style>
    .verde{
        color:green;
    }
</style>
<div id="modal">
    
</div>
<table class="tableStyle" id="tFact" cellpadding="10">
    <thead>
        <tr>
            <th># Nomina</th>
            <th>CC Vendedor</th>
            <th>Vendedor <a href="#" onclick="buscarNomina()"><i class="fa fa-search" aria-hidden="true"></i></a></th>
            <th>Ventas en el día</th>
            <th>Fecha de pago</th>
            <th>Pagado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><span>1</span></td>
            <td><span>12345678</span></td>
            <td><span>Pepito Perez</span></td>
            <td><span>5</span></td>
            <td><span>28/10/2020</span></td>
            <td><span class="verde">$50.000</span></td>
        </tr>
        <tr>
            <td><span>6</span></td>
            <td><span>12345678</span></td>
            <td><span>Pepito Perez</span></td>
            <td><span>8</span></td>
            <td><span>30/10/2020</span></td>
            <td><span class="verde">$80.000</span></td>
        </tr>
        <tr>
            <td><span>2</span></td>
            <td><span>01236547</span></td>
            <td><span>Yamid cano</span></td>
            <td><span>7</span></td>
            <td><span>14/10/2020</span></td>
            <td><span class="verde">$70.000</span></td>
        </tr>
        <tr>
            <td><span>3</span></td>
            <td><span>25984652</span></td>
            <td><span>Fabian Sanchez</span></td>
            <td><span>10</span></td>
            <td><span>31/10/2020</span></td>
            <td><span class="verde">$100.000</span></td>
        </tr>
        <tr>
            <td><span>4</span></td>
            <td><span>1000785418</span></td>
            <td><span>Cristian Güiza</span></td>
            <td><span>6</span></td>
            <td><span>28/11/2020</span></td>
            <td><span class="verde">$60.000</span></td>
        </tr>
        <tr>
            <td><span>5</span></td>
            <td><span>10000587428</span></td>
            <td><span>Santiago Reyes</span></td>
            <td><span>2</span></td>
            <td><span>02/10/2020</span></td>
            <td><span class="verde">$20.000</span></td>
        </tr>
        
    </tbody>
</table>
<script src="../js/historialNomina.js"></script>

<?php require_once("../assets/footer.php");?>