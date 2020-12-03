<?php require_once("../assets/header.php"); ?>
<style type="text/css">
    input {
        font-size: 120%;
        color: black;
        background-color: #f2f2f2;
        border: 1px solid #bdbdbd;
        border-radius: 5px;
        padding: 5px 10px 5px 10px;
        background-repeat: no-repeat;
        background-position: 8px 9px;
        display: block;
        margin-bottom: 10px;
    }

    input#submit {
        color: #444444;
        text-shadow: 0px 1px 1px #ffffff;
        border-bottom: 2px solid #b2b2b2;
        background-color: #b9e4e3;
        background: -webkit-gradient (linear, left top, left bottom, from(#beeae9), to(#28cfce));
        background: -moz-linear-gradient(top, #beeae9, #a8cfce);
        background: -o-linear-gradient(top, #beeae9, #a8cfce);
        background: -ms-linear-gradient (top, #beeae9), #a8cfce;
    }

    input#submit:hover {
        color: #333333;
        border: 1px solid #a4a4a4;
        border-top: 2px solid #b2b2b2;
        background-color: #a0dbc4;
        background: -webkit-gradient(linear, left top, left bottom, from(#a8cfce), to(#beeae9));
        background: -moz-linear-gradient(top, #a8cfce, #beeae9);
        background: -o-linear-gradient(top, #a8cfce, #beeae9);
        background: -ms-linear-gradient (top, #a8cfce, #beeae9);
    }

    h1 {
        background-color: #ec9494;
        padding: 10px;
    }


    th,
    td {
        padding: 7px 10px 10px 10px;
    }

    th {
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-size: 90%;
        border-bottom: 2px solid #111111;
        border-top: 1px solid #999;
        text-align: left;
    }

    tr {
        background-color: #ec9494;
    }

    tr:hover {
        background-color: #efefef;
    }

    h1.one {
        font-size: 20px;
        text-align: center;
    }

    img.kronnos {
        margin-right: auto;
    }

    img.star {
        list-style-image: url("./star.png");
        height: 50px;
    }

    .contenido {
        display: inline-block;
    }
</style>
<link rel="shortcut icon" href="kronnos logo.png">

<body>
    <div class="contenido">
        <h1>lenceria pelusa </h1>
        <img src="img/felpa-gris-claro_7.jpg" width="600px" height="400px" alt="">
    </div>

    <div style="float: right; padding-top: 3em; width: 50%;" class="contenido">
        <h1 class="one">Duvet Felpa Plus Gris Claro Con Reverso Ovejero + Fundas + Cojines Sin Plumón - My Home Store
        </h1>
        <img class="star" src="img/star.png" alt="">
        <img class="star" src="img/star.png" alt="">
        <img class="star" src="img/star.png" alt="">
        <img class="star" src="img/star.png" alt="">
        <img class="star" src="img/star.png" alt="">

        <table>
            <tr>
                <th>Producto</th>
                <th>Referencia</th>
                <th class="money">Precio</th>
            </tr>
            <tr>
                <td>Duvet Felpa Plus Gris Claro Con Reverso Ovejero + Fundas + Cojines Sin Plumón - My Home Store</td>
                <td>#000022</td>
                <td class="money">$266,000.00</td>
            </tr>
            <tr>
                <td>Duvet Felpa Plus Crema Con Reverso Ovejero + Fundas + Cojines Sin Plumón - My Home Store</td>
                <td>#000023</td>
                <td class="money">$266,000.00</td>
            </tr>

        </table>
    </div>
    <hr>
    <form>
        <input type="submit" value="comprar" id="submit" />
    </form>

    </div>

</body>

</html>