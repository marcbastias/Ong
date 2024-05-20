@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="mb-4">Resultados del Formulario</h1>
        <div class="row">
            @foreach ($formResults as $result)
                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $result->name }}</h5>
                            <span class="badge {{ $result->urgency === 'low' ? 'bg-success' : ($result->urgency === 'medium' ? 'bg-warning' : 'bg-danger') }}">{{ ucfirst($result->urgency) }}</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Email:</strong> {{ $result->email }}</p>
                            <p class="card-text"><strong>Teléfono:</strong> {{ $result->phone }}</p>
                            <p class="card-text"><strong>Tipo de Animal:</strong> {{ $result->animal_type }}</p>
                            <p class="card-text"><strong>Ubicación:</strong> {{ $result->location }}</p>
                            <p class="card-text"><strong>Descripción:</strong> {{ $result->description }}</p>
                        </div>
                        @if ($result->photo_content)
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#photoModal{{ $result->id }}">
                                    Ver Foto
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Modal -->
                @if ($result->photo_content)
                    <div class="modal fade" id="photoModal{{ $result->id }}" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel{{ $result->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="photoModalLabel{{ $result->id }}">Foto del Animal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="data:image/jpeg;base64,{{ base64_encode($result->photo_content) }}" alt="Foto del Animal" class="img-fluid rounded">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

@section('css')
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js')
    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
