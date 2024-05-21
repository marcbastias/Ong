@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Lista de Posts</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-secondary">Nuevo Post</a>
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    @livewire('admin.post-index')

    <!-- Formulario de creación de posts -->
    <div class="card mt-4">
        <div class="card-header">
            <h2 class="card-title">Nuevo Post</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Contenido:</label>
                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Categoría:</label>
                    <select class="form-control" id="category" name="category_id">
                        <option value="">Selecciona una categoría</option>
                        {{-- @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach --}}
                    </select>
                </div>
                <div class="form-group">
                    <label for="author">Autor:</label>
                    <input type="text" class="form-control" id="author" name="author_id">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
