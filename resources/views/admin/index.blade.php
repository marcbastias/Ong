@extends('adminlte::page')

@section('title', 'DASHBOARD')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-4">
        
        <div class="col-md-15">
    <div class="card bg-white text-dark shadow-lg rounded">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <div class="chart">
            <!-- Canvas para el gráfico de líneas -->
            <canvas id="chart-line" class="chart-canvas" height="300" width="606"></canvas>
        </div>

        <script>
            // Datos para el gráfico de líneas
            const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'Voluntarios Mensuales',
                    data: [20, 30, 45, 60, 80, 100],
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.4
                }]
            };

            // Configuración del gráfico de líneas
            const config = {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            // Crear el gráfico de líneas en el canvas con el ID 'chart-line'
            var myChartLine = new Chart(
                document.getElementById('chart-line'),
                config
            );
        </script>

        <div class="card-body">
            <h5 class="card-title mt-3">Voluntarios Mensuales</h5>
        </div>
    </div>
</div>


        </div>
        <div class="col">
            <div class="col-md-12">
                <div class="card bg-primary text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-sm mb-2">Usuarios:</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-users fa-lg mr-1"></i>
                            <h4 class="text-lg ml-auto">{{ $usersCount }}</h4>
                        </div>
                        <a href="/admin/users" class="ml-auto text-white">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card bg-danger text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <h2 class="text-sm mb-2">Post:</h2>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-blog"></i>
                            <h4 class="text-lg ml-auto">{{ $postCount }}</h4>
                        </div>
                        <a href="/admin/posts" class="ml-auto text-white">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Ingresos Hoy</p>
                            <h5 class="font-weight-bolder mb-0">
                                53,000€
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Ventas</p>
                            <h5 class="font-weight-bolder mb-0">
                                103,430€
                                <span class="text-success text-sm font-weight-bolder">+5%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card bg-white text-white shadow-lg rounded">
                    <div class="card-body d-flex flex-column">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Gastos</p>
                            <h5 class="font-weight-bolder mb-0">
                                10,430€
                                <span class="text-danger text-sm font-weight-bolder">-10%</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
    <div class="card bg-white text-dark shadow-lg rounded">
        <div class="card-body">
            <div>
                <canvas id="userVisitsChart"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('userVisitsChart');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                        datasets: [{
                            label: 'Number of User Visits',
                            data: [120, 150, 180, 200, 170, 190],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
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
            <h5 class="card-title mt-3">Visitas de Usuarios</h5>
        </div>
    </div>
</div>

    </div>
   
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .switch-button {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            justify-content: center;
            margin: auto;
            height: 55px;
        }

        .switch-button .switch-outer {
            height: 100%;
            background: #252532;
            width: 115px;
            border-radius: 165px;
            -webkit-box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
            box-shadow: inset 0px 5px 10px 0px #16151c, 0px 3px 6px -2px #403f4e;
            border: 1px solid #32303e;
            padding: 6px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            cursor: pointer;
            -webkit-tap-highlight-color: transparent;
        }

        .switch-button .switch-outer input[type="checkbox"] {
            opacity: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            position: absolute;
        }

        .switch-button .switch-outer .button-toggle {
            height: 42px;
            width: 42px;
            background: -webkit-gradient(linear,
                    left top,
                    left bottom,
                    from(#3b3a4e),
                    to(#272733));
            background: -o-linear-gradient(#3b3a4e, #272733);
            background: linear-gradient(#3b3a4e, #272733);
            border-radius: 100%;
            -webkit-box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
            box-shadow: inset 0px 5px 4px 0px #424151, 0px 4px 15px 0px #0f0e17;
            position: relative;
            z-index: 2;
            -webkit-transition: left 0.3s ease-in;
            -o-transition: left 0.3s ease-in;
            transition: left 0.3s ease-in;
            left: 0;
        }

        .switch-button .switch-outer input[type="checkbox"]:checked+.button .button-toggle {
            left: 58%;
        }

        .switch-button .switch-outer input[type="checkbox"]:checked+.button .button-indicator {
            -webkit-animation: indicator 1s forwards;
            animation: indicator 1s forwards;
        }

        .switch-button .switch-outer .button {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .switch-button .switch-outer .button-indicator {
            height: 25px;
            width: 25px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            border-radius: 50%;
            border: 3px solid #ef565f;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            right: 10px;
            position: relative;
        }

        @-webkit-keyframes indicator {
            30% {
                opacity: 0;
            }

            0% {
                opacity: 1;
            }

            100% {
                opacity: 1;
                border: 3px solid #60d480;
                left: -68%;
            }
        }

        @keyframes indicator {
            30% {
                opacity: 0;
            }

            0% {
                opacity: 1;
            }

            100% {
                opacity: 1;
                border: 3px solid #60d480;
                left: -68%;
            }
        }
    </style>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-something-unique" crossorigin="anonymous" />
@stop
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-something-unique" crossorigin="anonymous"></script>
    <script>
        function toggleFichado() {
            var button = document.getElementById("fichadoButton");
            if (button.innerText === "Fichado") {
                button.innerText = "No Fichado";
                button.classList.remove("btn-success");
                button.classList.add("btn-outline-light");
            } else {
                button.innerText = "Fichado";
                button.classList.remove("btn-outline-light");
                button.classList.add("btn-success");
            }
        }

        function toggleFichado() {
            var button = document.getElementById("fichadoButton");
            if (button.innerText === "Fichado") {
                button.innerText = "No Fichado";
                button.classList.remove("btn-success");
                button.classList.add("btn-outline-light");
            } else {
                button.innerText = "Fichado";
                button.classList.remove("btn-outline-light");
                button.classList.add("btn-success");
            }
        }
    </script>
@stop
