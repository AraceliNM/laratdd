@extends('layout')

@section('title', 'Editar usuario')

@section('content')
    <h1>Editar usuario</h1>

    @include('shared._errors')

    <form action="{{ route('user.update', $user) }}" method="post">
        {{ method_field('PUT') }}

        @include('users._fields')

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Actualizar usuario</button>
            <a href="{{ route('users') }}" class="btn btn-link">Regresar al listado de usuarios</a>
        </div>
    </form>
@endsection