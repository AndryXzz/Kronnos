<?php
    require_once("../assets/header.php");
    // var_dump($_SESSION['user']);
    if ($infoSession['rol'] != "Admin" &&  $infoSession['rol'] != "Contador" ) {
        ?>
        <script>location.href = "../index.php?est=3"</script>
        <?php
    }
    
?>
<style>
.tableStyle tbody tr td:nth-child(3) {
    color: #429642;
}

#tFact img {
    width: 50px;
}
</style>
<table class="tableStyle" id="tFact" cellpadding="10">
    <thead>
        <tr>
            <th># Articulo</th>
            <th>Nombre</th>
            <th>Tipo Articulo</th>
            <th>Foto</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Felpa Color Crema</td>
            <td>Cubre lecho</td>
            <td><img id="img" src="../img/img_tienda/felpa-crema_12.jpg" alt=""></td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra rutrum felis id aliquam.
                Curabitur.</td>
            <td>
                <button>Editar</button>
                <button>Ver</button>
                <button>Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>
<div id="modal"></div>
<script src="../js/inventario.js"></script>

<?php require_once("../assets/footer.php");?>