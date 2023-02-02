@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvidos al Menú') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Felicidades, estas conectado!') }}
                    
                    <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tratamientos.index') }}"> Tratamientos</a>
                       
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Ventas</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection