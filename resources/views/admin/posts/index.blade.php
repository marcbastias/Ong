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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
