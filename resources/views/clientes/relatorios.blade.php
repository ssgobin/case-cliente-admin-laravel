@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 painel>Painel de Controle | {{ strtoupper(now()->translatedFormat('F Y')) }}</h4>

        <div class="btn-group" role="group">
            <a href="?filtro=mes" class="btn {{ $filtro == 'mes' ? 'btn-primary' : 'btn-outline-primary' }}">Mês</a>
            <a href="?filtro=semana" class="btn {{ $filtro == 'semana' ? 'btn-primary' : 'btn-outline-primary' }}">Semana</a>
            <a href="?filtro=hoje" class="btn {{ $filtro == 'hoje' ? 'btn-primary' : 'btn-outline-primary' }}">Hoje</a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Clientes com +18 e renda maior que a média</h6>
                    <h3 class="text-dark">{{ $maioresDeIdadeComRendaMaior }}</h3>
                    <span class="fw-bold">+{{ $maioresDeIdadeComRendaMaior * 3 }}%</span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Classe A</h6>
                    <h3 class="text-danger">{{ $classeA }}</h3>
                    <span class="fw-bold"> {{ $classeA * 2 }}%</span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Classe B</h6>
                    <h3 class="text-warning">{{ $classeB }}</h3>
                    <span class="fw-bold">{{ $classeB * 1.5 }}%</span>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Classe C</h6>
                    <h3 class="text-success">{{ $classeC }}</h3>
                    <span class="fw-bold"> {{ $classeC * 4 }}%</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
