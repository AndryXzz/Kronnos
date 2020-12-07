<?php require_once("../assets/header.php"); ?>
<table class="tableStyle" cellpadding="10">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Cúotas faltantes</th>
            <th>Valor de la cúota</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
        <tr>
            <td>Felpa Color Crema</td>
            <td>2</td>
            <td>5</td>
            <td>$10.000</td>
            <td><button class="btn btn-success" data-toggle="modal" data-target="#Pagar">Pagar</button></td>
        </tr>
    </tbody>
</table>
<div class="modal fade" id="Pagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pagar Cúotas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="debito" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="debito">Tarjeta Debito</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="credito" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="credito">Tarjeta de Crédito</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="giroB" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="giroB">Giro Bancario</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" sa
                    data-target="#Pagara">Continuar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="Pagara" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pagar Cúotas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <label for="nCard">N° tarjeta</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nCard">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="cc">Cedula</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cc">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="cutoas">Cuótas a Pagar</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="cutoas">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="saldo">Saldo a pagar</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="saldo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Continuar</button>
            </div>
        </div>
    </div>
</div>
<?php require_once("../assets/footer.php"); ?>