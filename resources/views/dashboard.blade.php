<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>


          <!-- Importando o Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>  

<!-- titulo  -->
        @include('header')

<!-- Criação do gráfico -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="60" height="20" ></canvas>
        </div>
    </div>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Associados', 'Dependentes'],
        datasets: [{
            label: 'associado',
            data: [{{ $quantidadeAssociados }}, {{ $quantidadeDependentes }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>

    </body>
</html>
