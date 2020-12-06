<?php
    require_once("../assets/header.php");
    // var_dump($_SESSION['user']);
        if ($infoSession['rol'] != "Admin") {
        ?>
        <script>location.href = "../index.php?est=3"</script>
        <?php
    
?>
<style>
    .tableStyle tbody tr td:nth-child(7) {
        color: #429642;
    }
</style>
<table class="tableStyle" id="tFact" cellpadding="10">
    <thead>
        <tr>
            <th># Factura</th>
            <th>CC Vendedor</th>
            <th>Vendedor</th>
            <th>Fecha</th>
            <th>Sub total</th>
            <th>IVA (%)</th>
            <th>Total</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1000785418</td>
            <td>Cristian Güiza</td>
            <td>28/10/2020</td>
            <td>121.500</td>
            <td>19</td>
            <td>150000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>1000785418</td>
            <td>Cristian Güiza</td>
            <td>29/10/2020</td>
            <td>68.850</td>
            <td>19</td>
            <td>85000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>1000785418</td>
            <td>Cristian Güiza</td>
            <td>30/10/2020</td>
            <td>29.565</td>
            <td>19</td>
            <td>36500</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>12345678</td>
            <td>Pepito Perez</td>
            <td>31/10/2020</td>
            <td>81.000</td>
            <td>19</td>
            <td>100000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>12345678</td>
            <td>Pepito Perez</td>
            <td>1/11/2020</td>
            <td>46.170</td>
            <td>19</td>
            <td>57000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>6</td>
            <td>01236547</td>
            <td>Yamid Cano</td>
            <td>2/11/2020</td>
            <td>50.220</td>
            <td>19</td>
            <td>62000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>7</td>
            <td>01236547</td>
            <td>Yamid Cano</td>
            <td>3/11/2020</td>
            <td>202.500</td>
            <td>19</td>
            <td>250000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>8</td>
            <td>01236547</td>
            <td>Yamid Cano</td>
            <td>4/11/2020</td>
            <td>121.500</td>
            <td>19</td>
            <td>150000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>9</td>
            <td>25984652</td>
            <td>Fabián Sanchez</td>
            <td>5/11/2020</td>
            <td>16.200</td>
            <td>19</td>
            <td>20000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>25984652</td>
            <td>Fabián Sanchez</td>
            <td>6/11/2020</td>
            <td>89.100</td>
            <td>19</td>
            <td>110000</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>
<div id="modal">




</div>
<script src="../js/modalFactura.js"></script>

<?php require_once("../assets/footer.php");?>