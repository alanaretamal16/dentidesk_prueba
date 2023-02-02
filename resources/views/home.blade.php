@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Felicidades, estas conectado!') }}
                    <div class="dropdown-menu">
                        <span class="dropdown-item-text">Dropdown item text</span>
                        <a class="dropdown-item" href="#">Inicio</a>
                        <a class="dropdown-item" href="#">Trabajos</a>
                        <a class="dropdown-item" href="#">Quien soy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection