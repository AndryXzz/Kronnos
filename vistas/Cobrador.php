<?php require_once("../assets/header.php"); ?>

    <!--        Etilos Yamid Cano         -->
    <link rel="stylesheet" href="../css/style.css">

<div class="container-fluid" id="container">
    <div class="row justify-content-center">
        <div id="caja1" class="col-3">
            <h3>Clientes ya Cobrado</h3>
            <h1 data-toggle="tooltip" data-placement="top" title="Clientes ya Cobrados Hoy">
                15
                <span class="livicon" data-name="crop" data-c="dark" data-s="60" data-loop="true"
                            data-hovercolor="dark"></span>
            </h1>
        </div>
        <div id="caja2" class="col-3">
            <h3>Plata recogida</h3>
            <h2 data-toggle="tooltip" data-placement="top" title="Plata recogia Hoy">
                $689.500 
                <span class="livicon" data-name="money" data-c="dark" data-s="60" data-loop="true"
                    data-hovercolor="dark"></span>
            </h2>
        </div>
        <div id="caja3" class="col-3">
            <h3>Clientes Por Cobrar</h3>
            <h1 data-toggle="tooltip" data-placement="top" title="Clientes Por Cobrar Hoy">
                20
                <span class="livicon" data-name="users-ban" data-c="dark" data-s="60" data-loop="true"
                data-hovercolor="dark"></span>
            </h1>
        </div>
    </div>
</div>


<div class="container-fluid" id="container">
    <h3>Listado de clienteas a Cobrar de <?php echo date('d/m/Y'); ?></h3>
    <br>
    <div class="justify-content-center">
    <table id="grid" class="table table-striped table-bordered dt-responsive nowrap">
        <thead >
            <tr>
                <th>Id Cliente</th>
                <th>Cliente</th>
                <th>Direccion</th>
                <th>Monto a Cobrar</th>
                <th width="60px"></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>43434556</td>
                <td>Pablo</td>
                <td>Calle 69a</td>
                <td>$20.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1434235345</td>
                <td>Juan</td>
                <td>Calle 37a</td>
                <td>$50.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>145677878</td>
                <td>Maria</td>
                <td>Calle 88-30</td>
                <td>$30.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>458456856</td>
                <td>Criatian</td>
                <td>Calle 90-45</td>
                <td>$25.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1456456785</td>
                <td>Miriam</td>
                <td>Calle 09-34</td>
                <td>$40.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
            <tr>
                <td>4567567578</td>
                <td>Fabia</td>
                <td>Calle 69a</td>
                <td>$60.000</td>
                <td width="40px">
                    <a id="btnSimple" data-toggle="tooltip" data-placement="top" title="Confirmar si pago?">
                        <span data-toggle="modal" data-target="#ver">
                            <span class="livicon shadowed" data-n="check-circle" data-s="30" data-c="green" data-hc="0"
                                data-onparent="true"></span>
                        </span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>


<script>
    const $btnSimple = document.querySelector("#btnSimple")

    $btnSimple.addEventListener("click", () => {
        Swal.fire({
        title: 'El cliente Pago?',
        showCancelButton: true,
        confirmButtonText: 'Confirmar Pago',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        timer: 5000,
        timerProgressBar: true,
        }).then(function(result) {
        if (result.value) {
            Swal.fire({icon: 'success', text: 'Clientes Cobrado'});
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({icon: 'error', text: "Oprecion cancelada :("});

        } else {
            console.log(`modal was dismissed by ${result.dismiss}`)
        }
        });
    });
</script>
<?php require_once("../assets/footer.php"); ?>