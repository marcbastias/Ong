@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    <h1> </h1>
@stop

@section('content')
    <div class="row">
        
        <div class="col-md-3">
            <x-mary-progress-radial value="98" class="text-success" style="--size:6rem; --thickness: 2px" />

        </div>
        <div class="col-md-3">
            <div class="bg-secondary text-white p-3 mb-3">
                Recuadro 2
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-success text-white p-3 mb-3">
                Recuadro 3
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-warning text-white p-3 mb-3">
                Recuadro 4
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="bg-danger text-white p-3 mb-3">
                Recuadro 6 (ocupando 3/4 del espacio)
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-info text-white p-3 mb-3">
                Recuadro 5
            </div>
        </div>

    </div>
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
