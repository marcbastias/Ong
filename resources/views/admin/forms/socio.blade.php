@extends('adminlte::page')

@section('content_header')
    <h1>Mensajes de Trabajo</h1>
@stop

@section('content')
    <div class="container">
        <h1>Formularios de Atención al Socio</h1>
        <div class="row">
            <div class="col-md-12">
                @if ($socioAttentions->isEmpty())
                    <p>No hay formularios de atención al socio disponibles.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Teléfono</th>
                                <th>Número de Socio</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socioAttentions as $socioAttention)
                                <tr>
                                    <td>{{ $socioAttention->name }}</td>
                                    <td>{{ $socioAttention->email }}</td>
                                    <td>{{ $socioAttention->phone }}</td>
                                    <td>{{ $socioAttention->member_number }}</td>
                                    <td>{{ $socioAttention->message }}</td>
                                    <td>{{ $socioAttention->created_at->format('Y-m-d H:i:s') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
