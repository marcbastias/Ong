@extends('adminlte::page')

@section('title', 'Dashboard - Otras Consultas')

@section('content_header')
    <h1>Dashboard - Otras Consultas</h1>
@stop

@section('content')
    <div class="container">
        <h1 class="mb-4">Resultados de Otras Consultas</h1>
        <div class="row">
            @foreach ($formResults as $result)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header bg-dark text-white">
                            <h5 class="card-title mb-0">{{ $result->first_name }} {{ $result->last_name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Email:</strong> {{ $result->email }}</p>
                            <p class="card-text"><strong>Teléfono:</strong> {{ $result->phone ?? 'No proporcionado' }}</p>
                            <p class="card-text"><strong>Relación con WWF:</strong> {{ $result->relation ?? 'No especificado' }}</p>
                            <p class="card-text"><strong>Mensaje:</strong> {{ $result->message }}</p>
                            <p class="card-text"><strong>Protección de datos:</strong> {{ $result->privacy_policy ? 'Aceptado' : 'No aceptado' }}</p>
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" class="btn btn-primary">Responder</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <style>
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-footer {
            background-color: #f8f9fa;
        }
        .card-text {
            margin-bottom: 0.5rem;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Dashboard loaded');
    </script>
@stop
