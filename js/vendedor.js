var isCredit = function(sel){
    var inputs = ``;
    if (sel.value == 1) {
        inputs = `
            <br><br><br>
        `;
        document.getElementsByClassName("oculto")[0].style.display = "block";
        document.getElementsByClassName("oculto")[1].style.display = "block";
    }else{
        document.getElementsByClassName("oculto")[0].style.display = "none";
        document.getElementsByClassName("oculto")[1].style.display = "none";
    }
    document.getElementById("brss").innerHTML = inputs;
}