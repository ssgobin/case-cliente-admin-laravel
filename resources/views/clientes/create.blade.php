@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Cadastrar Cliente</h2>
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required maxlength="150">
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" required pattern="\d{11}" maxlength="11">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control" required max="{{ date('Y-m-d') }}">
        </div>
        <div class="mb-3">
            <label>Renda Familiar (opcional)</label>
            <input type="number" name="renda_familiar" class="form-control" step="0.01" min="0">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
