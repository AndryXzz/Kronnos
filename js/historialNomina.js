const modal = document.getElementById("modal");
var modalVendedor = function (idV){

    
    aparecer();

    modal.innerHTML = 
        `<div style="margin:5% 15% 0px 15%; padding: unset;  max-height: 80%; overflow-y: scroll;padding-bottom:2em;" class="scroll contentModal">
            <button class="closeModal" id="closeModal">X</button>
        <div class="row">
            <div class="col-6">
                <h4 class="text-left">${idV}</h4>
            </div>
            <div class="col-6">
                <h4 class="text-right">Pepito Perez</h4>
            </div>
            <br>
            <br>
            <br>
            <div class="col-12">
                <table class="tableStyle" cellpadding="10">
                    <thead>
                        <tr>
                            <th>#Nomina</th>
                            <th>Productos Vendidos</th>
                            <th>Fecha de pago</th>
                            <th>Pagado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2 <a href="#">Sábanas</a>, 3 <a href="#">Cobijas</a></td>
                            <td>28/10/2020</td>
                            <td class="verde">$50.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3 <a href="#">Sábanas</a> , 4 <a href="#">Cobijas</a> , 1 <a href="#">Tapete</a></td>
                            <td>30/10/2020</td>
                            <td class="verde">$80.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            

        </div>
    </div>`;

    cerrar();
    

}

var buscarNomina = function () {
    var idV = prompt("Ingrese el Id del vendedor");
    if (/^([0-9])*$/.test(idV)) {
        modalVendedor(idV);
    } else {
        
        alert("por favor, ingrese sólo numeros.");
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