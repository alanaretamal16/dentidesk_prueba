@extends('layouts.app')

@section('template_title')
    {{ $tratamiento->name ?? 'Show Tratamiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tratamientos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tratamiento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $tratamiento->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Pieza Dental:</strong>
                            {{ $tratamiento->pieza_dental }}
                        </div>
                        <div class="form-group" >
                            <strong>Fecha:</strong>
                            {{ $tratamiento->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
