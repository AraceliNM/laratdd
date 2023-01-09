@extends('layout')

@section('title', $title)

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">Usuarios</h1>
        <p>
            <a href="{{ route('user.create') }}" class="btn btn-primary">Nuevo usuario</a>
        </p>
    </div>

    @if($users->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="form-inline">
                        @if($user->trashed())
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link"><span class="oi oi-circle-x" /></button>
                            </form>
                        @else
                        <a href="{{ route('user.show', $user) }}" class="btn btn-link"><span class="oi oi-eye" /></a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-link"><span class="oi oi-pencil" /></a>
                        <form action="{{ route('users.trash', $user) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-link"><span class="oi oi-trash" /></button>
                        </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    @else
        <p>No hay usuarios registrados</p>
    @endif
@endsection
