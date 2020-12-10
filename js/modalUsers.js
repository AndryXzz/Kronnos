const modal = document.getElementById("modal");
const botones = document.getElementsByClassName('crud');


var abrirmodal = function (tipoAccion) {
    let infoID = '';
    let action = '../modelos/';
    let inputId = '';
    let idAct = '';
    let contra = '';
    if (tipoAccion == "Actualizar") {
        infoID = `<p id="inpID"></p>`;
        action += 'updateCrud.php';
        idAct = `<input type="hidden" id="idd" name="idd">`;

    } else {
        action += 'crearCrud.php';
        inputId = `
                    <section>
                        <label for="idd">Número de Cédula</label><br>
                        <input required class="input" type="number" name="idd" id="idd">
                    </section>
                `;
        contra = `<section>
                        <label for="passw">Contraseña</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="passw">
                    </section>`;
    }

    modal.innerHTML = `
            <div style="margin:5% 30% 0px 30%; padding: unset;  max-height: 80%; overflow-y: scroll;direction: rtl;" class="scroll contentModal">
                <button id="closeModal">X</button>
                <form id="formm" action="${action}" method="POST">
                    ${infoID}
                    ${inputId}
                    <section>
                        <label for="name">Nombre</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="name">
                    </section>
                    <section>
                        <label for="lastName">Apellidos</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="lastName">
                    </section>
                    <section>
                        <label for="dpto">Departamento</label><br>
                            <select required name="dpto" required="" class="input" >
                                <option selected disabled="" value=""> Seleccione un departamento</option>
                                <option value="5" disabled>Amazonas</option>
                                <option value="2" disabled>Antioquia</option>
                                <option value="3" disabled>Arauca</option>
                                <option value="4" disabled>Atlántico</option>
                                <option value="1">Bogotá</option>
                                <option value="6" disabled>Bolívar</option>
                                <option value="7" disabled>Boyacá</option>
                                <option value="8" disabled>Caldas</option>
                                <option value="9" disabled>Caquetá</option>
                                <option value="10" disabled>Casanare</option>
                                <option value="11" disabled>Cauca</option>
                                <option value="12" disabled>Cesar</option>
                                <option value="13" disabled>Chocó</option>
                                <option value="14" disabled>Córdoba</option>
                                <option value="15" disabled>Cundinamarca</option>
                                <option value="16" disabled>Guainía</option>
                                <option value="17" disabled>Guaviare</option>
                                <option value="18" disabled>Huila</option>
                                <option value="19" disabled>La Guajira</option>
                                <option value="20" disabled>Magdalena</option>
                                <option value="21" disabled>Meta</option>
                                <option value="22" disabled>Nariño</option>
                                <option value="23" disabled>Norte de Santander</option>
                                <option value="24" disabled>Putumayo</option>
                                <option value="25" disabled>Quindío</option>
                                <option value="26" disabled>Risaralda</option>
                                <option value="27" disabled>San Andrés y Providencia</option>
                                <option value="28" disabled>Santander</option>
                                <option value="29" disabled>Sucre</option>
                                <option value="30" disabled>Tolima</option>
                                <option value="31" disabled>Valle del Cauca</option>
                                <option value="32" disabled>Vaupés</option>
                                <option value="33" disabled>Vichada</option>
                            </select>
                    </section>
                    <section>
                        <label for="city">Ciudad</label><br>
                            <select required name="city" required="" class="input" >
                                <option selected disabled="" value=""> Seleccione una ciudad</option>
                                <option value="1">Bogotá</option>
                            </select>
                    </section>
                    <section>
                        <label for="address">Dirección</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="address">
                    </section>
                    <section>
                        <label for="number">Celular</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="number">
                    </section>
                    <section>
                        <label for="email">Correo</label><br>
                        <input required class="input" type="text" placeholder="Ingrese un nuevo valor" name="email">
                    </section>
                    <section>
                        <label for="Rol">Rol</label><br>
                            <select required name="rol" id="rol" required="" class="input" >
                                <option selected disabled="" value=""> Seleccione un rol</option>
                                <option value="1">Admin</option>
                                <option value="2">Cliente</option>
                                <option value="3">Vendedor</option>
                                <option value="4">Cobrador</option>
                                <option value="5">Contador</option>
                            </select>
                    </section>
                    ${idAct}
                    ${contra}
                    <input required class="butn" type="submit" value="${tipoAccion}">
                </form>
        </div>`;
    cerrar();
}
var cerrar = function () {
    document.getElementById("closeModal").addEventListener("click", function () {
        modal.style.animation = "cerrar 0.5s ease";
        setTimeout(function () { modal.style.display = "none"; modal.style.animation = ""; }, 500);
        modal.innerHTML = ``;
    });
}

var aparecer = function () {
    modal.style.opacity = "0";
    modal.style.display = "block"
    modal.style.animation = "aparecer 0.5s ease";
    setTimeout(function () { modal.style.opacity = ""; modal.style.animation = ""; }, 500);
}

var editar = function () {
    // Aparecer modal
    aparecer();
    abrirmodal("Actualizar");

    var valores = this.parentNode.parentNode.getElementsByTagName("span");
    var inputs = modal.getElementsByTagName("input");
    var selects = modal.getElementsByTagName("select");
    //Poner el ID en el modal
    document.getElementById("inpID").innerHTML = valores[0].innerHTML.trim();
    document.getElementById("idd").value = valores[0].innerHTML.trim();

    console.log(valores);

    //poner info en los input
    console.log(inputs);
    selects.rol
    selects.rol.value = valores[2].innerHTML.trim();
    for (let i = 1; i <= 5; i++) {
        inputs[i - 1].value = valores[i].innerHTML.trim();
    }

    let idRol = 0;
    switch (valores[6].innerHTML.trim()) {
        case "Admin":
            idRol = 1;
            break;
        case "Cliente":
            idRol = 2;
            break;
        case "Vendedor":
            idRol = 3;
            break;
        case "Cobrador":
            idRol = 4;
            break;
        case "Contador":
            idRol = 5;
            break;

    }
    document.getElementById("rol").value = idRol;


}

var borrar = function () {
    let borrar = confirm("Está seguro de desear borrar este paciente? la info no se podrá recuperar");
    if (borrar) {
        let id = this.parentNode.parentNode.getElementsByTagName("td")[0].innerText;
        // console.log(location.href );
        location.href = '../modelos/deleteCrud.php?id=' + id;
    }
}

var crear = function () {
    aparecer();
    abrirmodal("Crear");
}

for (let i = 0; i < botones.length; i++) {
    botones[i].getElementsByTagName("button")[0].addEventListener("click", editar);
    botones[i].getElementsByTagName("button")[1].addEventListener("click", borrar);
}
document.getElementById("create").addEventListener("click", crear);