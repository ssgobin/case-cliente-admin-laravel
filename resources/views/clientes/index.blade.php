@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Lista de Clientes</h2>
    <form method="GET" action="{{ url('/') }}" class="mb-4">
        <input type="text" name="nome" placeholder="Pesquisar por nome" class="form-control" value="{{ request('nome') }}">
    </form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Renda</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>
                @if ($cliente->renda_familiar !== null)
                    <span class="badge-renda {{ classRenda($cliente->renda_familiar) }}">
                        R$ {{ number_format($cliente->renda_familiar, 2, ',', '.') }}
                    </span>
                @else
                    <span class="text-muted">Sem renda</span>
                @endif
            </td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">Editar</a>

                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
