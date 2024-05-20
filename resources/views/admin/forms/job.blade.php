@extends('adminlte::page')

@section('content_header')
    <h1>Mensajes de Trabajo</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard - Solicitudes de Trabajo</div>

                <div class="card-body">
                    @if ($jobApplications->isEmpty())
                        <p>No hay solicitudes de trabajo por el momento.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Puesto</th>
                                    <th>Acciones</th>
                                    <th>Cv</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobApplications as $application)
                                    <tr>
                                        <td>{{ $application->name }}</td>
                                        <td>{{ $application->email }}</td>
                                        <td>{{ $application->phone }}</td>
                                        <td>{{ $application->position }}</td>
                                        <td>
                                            <a href="{{ route('download.cv', $application->id) }}" class="btn btn-sm btn-primary">Descargar CV</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
