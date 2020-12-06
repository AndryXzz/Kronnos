const modal = document.getElementById("modal");

var abrirmodal = function (e) {
    aparecer();
    let tipo = e.path[0].innerText;


    modal.innerHTML = `
            <div style="margin:5% 15% 0px 15%; padding: unset;  max-height: 80%; overflow-y: scroll;padding-bottom:2em;" class="scroll contentModal">
                <button class="closeModal" id="closeModal">X</button>
                <div class="row">
            <div class="col-6">
                <h4 class="text-left">Editar Factura</h4>
            </div>
            <div class="col-6">
                <h4 class="text-right">Fact. 1</h4>
            </div>
            <div class="col-6">
                <label for="name">Nombre</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="name" value="Juan Perez">
                </div>
            </div>
            <div class="col-6">
                <label for="dir">Direccion</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="fa fa-address-card-o"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="dir" value="Calle 59 S no. 93 C 46">
                </div>
            </div>
            <div class="col-6">
                <label for="cc">Cedula</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-id-badge"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="cc" value="52501464">
                </div>
            </div>
            <div class="col-6">
                <label for="email">Correo</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="email" value="Ejemplo@correo.com">
                </div>
            </div>
            <div class="col-12">
                <table class="tableStyle" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sabana</td>
                            <td>2</td>
                            <td>50000</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
            <br><br>
            <br><br>
            <div class="col-6">
                <label for="ventaT">Tipo de venta</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i
                                class="fa fa-shopping-cart"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="ventaT" value="Crédito">
                </div>
            </div>
            <div class="col-6">
                <label for="subTotal">Sub Total</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-money"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="subTotal" value="50000">
                </div>
            </div>
            <div class="col-6">
                <label for="State">Estado</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-list-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="State" value="Sin pagar">
                </div>
            </div>
            <div class="col-6">
                <label for="iva">IVA</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-arrow-up"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="iva" value="9500">
                </div>
            </div>
            <div class="col-6" id="botonesModal">
                <p>Observaciones de la Factura</p>
                <button class="btn btn-danger closeModal" >Cancelar</button>
                <button class="btn btn-success">Guardar</button>
            </div>
            <div class="col-6">
                <label for="Total">Total</label>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-money"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        name="Total" value="59500">
                </div>
            </div>
        </div>
        </div>`;

    cerrar();
    if (tipo == "Ver") {
        let inputs = document.getElementsByTagName("input");
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].setAttribute("disabled", true);
        }
        document.getElementById("botonesModal").style.display = "none";
    }

}
var cerrar = function () {
    let x = document.getElementsByClassName("closeModal");
    x[0].addEventListener("click", function () {
        modal.style.animation = "cerrar 0.5s ease";
        setTimeout(function () {
            modal.style.display = "none";
            modal.style.animation = "";
        }, 500);
        modal.innerHTML = ``;
    });

    x[1].addEventListener("click", function () {
        modal.style.animation = "cerrar 0.5s ease";
        setTimeout(function () {
            modal.style.display = "none";
            modal.style.animation = "";
        }, 500);
        modal.innerHTML = ``;
    });
}

var aparecer = function () {
    modal.style.opacity = "0";
    modal.style.display = "block"
    modal.style.animation = "aparecer 0.5s ease";
    setTimeout(function () {
        modal.style.opacity = "";
        modal.style.animation = "";
    }, 500);
}

var eliminar = function () {
    confirm("Seguro que desea Eliminar? no se podrá recuperar.");
}

var botones = document.getElementsByTagName("button");
for (let i = 0; i < botones.length; i++) {
    switch (botones[i].innerText) {
        case "Editar":
            botones[i].addEventListener("click", abrirmodal, this);
            break;

        case "Ver":
            botones[i].addEventListener("click", abrirmodal, this);

            break;

        case "Eliminar":
            botones[i].addEventListener("click", eliminar);

            break;
    }

}