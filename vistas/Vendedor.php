<?php require_once("../assets/header.php"); ?>
<script src="../js/vendedor.js"></script>
<style>
    .vendedorxd div.col-3 div {
        text-align: center;
        font-size: 25px;
        background-color: #332e44;
        color: white;
        border-radius: 3px;
        line-height: 31px;
        height: 7em;
        padding: 8px 0px;
        padding-top: 8px;
    }

    .vendedorxd div.col-3 section {
        background-color: #5f6679;

    }

    div.oculto {
        display: none;
    }
</style>
<div class="container-fluid">
    <div class="row vendedorxd">
        <div class="col-3">
            <div>
                <i class="fa fa-history" aria-hidden="true"></i><br>
                <span>Ventas Realizadas (Diario)</span><br><br>
                <section>7</section>
            </div>
        </div>
        <div class="col-3">
            <div>
                <i class="fa fa-money" aria-hidden="true"></i><br>
                <span>Dinero de pagos de contado</span><br><br>
                <section>$300.000</section>
            </div>
        </div>
        <div class="col-3">
            <div>
                <i class="fa fa-check-square-o" aria-hidden="true"></i><br>
                <span>Ventas a crédito</span><br><br><br>
                <section>5</section>
            </div>
        </div>
        <div class="col-3">
            <div>
                <i class="fa fa-check-square-o" aria-hidden="true"></i><br>
                <span>Ventas de contado</span><br><br><br>
                <section>2</section>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button class="butn" data-toggle="modal" data-target="#venta">Registrar Venta</button>
    </div>
    <br>
    <div class="col-12">
        <table class="tableStyle" cellpadding="8">
            <thead>
                <tr>
                    <th>CC cliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Producto Adquirido</th>
                    <th>Tipo Abono</th>
                    <th>Fecha venta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
                <tr>
                    <td>52250046</td>
                    <td>Johan</td>
                    <td>Escobar</td>
                    <td>Sabana Ajustable</td>
                    <td>Credito</td>
                    <td>28/11/2020</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- MODAL VENTA -->
<div class="modal fade" id="venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-6">
                        <label for="cc">CC del cliente</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-address-card"
                                        aria-hidden="true"></i></span>
                            </div>
                            <input required type="number" class="form-control"
                                placeholder="Ingrese la Celuda del cliente" id="cc" name="cc">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tipoV">Tipo de venta</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="tipoV"><i class="fa fa-caret-square-o-down"
                                        aria-hidden="true"></i></label>
                            </div>
                            <select required class="custom-select" id="tipoV" name="tipoV" onchange="isCredit(this)">
                                <option disabled selected>Escoge Una</option>
                                <option value="1">Crédito</option>
                                <option value="2">Contado</option>
                            </select>
                        </div>
                    </div>
                    <section id="brss"></section>
                    <div class="col-5 oculto">
                        <label for="nCuotas">Número de cúotas</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="nCuotas"><i class="fa fa-sort-numeric-asc"
                                        aria-hidden="true"></i></label>
                            </div>
                            <input required type="number" class="form-control" placeholder="Número de cúotas"
                                id="nCuotas" name="nCuotas">
                        </div>
                    </div>
                    <div class="col-7 oculto">
                        <label for="nDiasPago">¿Cada cúanto desea pagar? (# Días)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="nDiasPago"><i class="fa fa-calendar"
                                        aria-hidden="true"></i></label>
                            </div>
                            <input required type="number" class="form-control" placeholder="Número de cúotas"
                                id="nDiasPago" name="nDiasPago">
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="col-12">
                        <button class="butn" data-toggle="modal" data-target="#productos">Añadir producto</button>
                    </div>
                    <br><br><br>
                    <div class="col-12">
                        <table class="tableStyle" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Id Producto</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio (U)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25</td>
                                    <td>Sabana</td>
                                    <td>2</td>
                                    <td>50000</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th><span>Total</span></th>
                                    <th><span>100.000</span></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Registrar Venta</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL PRODUCTOS -->


<div class="modal fade" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-12">
                        <table class="tableStyle" cellpadding="8">
                            <thead>
                                <tr>
                                    <th>Id Producto</th>
                                    <th>Producto</th>
                                    <th>Imagen</th>
                                    <th>Descripción</th>
                                    <th>Precio (U)</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25</td>
                                    <td>Sabana</td>
                                    <td><img src="../img/felpa-crema_12.jpg" width="50" height="50"></td>
                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ratione
                                        laboriosam, natus libero omnis molestiae? Molestiae,</td>
                                    <td>50000</td>
                                    <td><input required type="number" name="" id="" style="width: 4em;"></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>cubrelecho</td>
                                    <td><img src="../img/felpa-gris-claro_7.jpg" width="50" height="50"></td>
                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ratione
                                        laboriosam, natus libero omnis molestiae? Molestiae,</td>
                                    <td>62000</td>
                                    <td><input required type="number" name="" id="" style="width: 4em;"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sabana Negra</td>
                                    <td><img src="../img/img_tienda/forro_duvet_negro.jpg" width="50" height="50"></td>
                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque ratione
                                        laboriosam, natus libero omnis molestiae? Molestiae,</td>
                                    <td>85000</td>
                                    <td><input required type="number" name="" id="" style="width: 4em;"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Añadir a factura</button>
            </div>
        </div>
    </div>
</div>





<?php require_once("../assets/footer.php"); ?>