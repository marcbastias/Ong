@extends('adminlte::page')
 
@section('title', 'DASHBOARD')
 
@section('content_header')
    <h1>Dashboard</h1>
@stop
 
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-white shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title text-center">Recuadro 1</h5>
                    <p class="card-text text-center">¡Bienvenido!</p>
                    <label class="switch-button" for="switch">
                        <div class="switch-outer">
                            <input id="switch" type="checkbox">
                            <div class="button">
                                <span class="button-toggle"></span>
                                <span class="button-indicator"></span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-white shadow-lg rounded">
                <svg class="w-50 h-50" >
                  <!-- Background circle -->
                  <circle
                    class="text-gray-200 stroke-current"
                    stroke-width="10"
                    cx="50"
                    cy="50"
                    r="40"
                    fill="transparent"
                  ></circle>
                  <!-- Progress circle -->
                  <circle
                    class="text-indigo-500  progress-ring__circle stroke-current"
                    stroke-width="10"
                    stroke-linecap="round"
                    cx="50"
                    cy="50"
                    r="40"
                    fill="transparent"
                    stroke-dasharray="251.2" 
                    stroke-dashoffset="calc(251.2 - (251.2 * 70) / 100)"
                  ></circle>
                  
                  <!-- Center text -->
                  <text x="50" y="50" font-family="Verdana" font-size="12" text-anchor="middle" alignment-baseline="middle">70%</text>
              
                </svg>
              </div>
              
 
        </div>
        
        <div class="col-md-3">
            <div class="card bg-success text-white shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title">Recuadro 3</h5>
                    <p class="card-text">¡Qué tal!</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title">Recuadro 4</h5>
                    <p class="card-text">¡Saludos!</p>
                </div>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-md-9">
            <div class="card bg-danger text-white shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title">Recuadro 6 (ocupando 3/4 del espacio)</h5>
                    <p class="card-text">¡Gran tamaño!</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white shadow-lg rounded">
                <div class="card-body">
                    <h5 class="card-title">Recuadro 5</h5>
                    <p class="card-text">¡Pequeño pero poderoso!</p>
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

    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
<script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
