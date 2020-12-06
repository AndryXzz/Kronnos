function createConfig(position) {
    return {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            datasets: [{
                label: 'Año pasado',
                borderColor: window.chartColors.red,
                backgroundColor: window.chartColors.red,
                data: [50, 30, 46, 20, 80, 50, 75, 64, 45, 35, 78],
                fill: false,
            }, {
                label: 'Año Curso',
                borderColor: window.chartColors.blue,
                backgroundColor: window.chartColors.blue,
                data: [7, 49, 46, 13, 25, 30, 22],
                fill: false,
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Ventas anuales - ' + position
            },
            tooltips: {
                position: position,
                mode: 'index',
                intersect: false,
            },
        }
    };
}

window.onload = function () {
    var container = document.querySelector('.barline');

    ['average'].forEach(function (position) {
        var div = document.createElement('div');
        div.classList.add('chart-container');

        var canvas = document.createElement('canvas');
        div.appendChild(canvas);
        container.appendChild(div);

        var ctx = canvas.getContext('2d');
        var config = createConfig(position);
        new Chart(ctx, config);
    });
};