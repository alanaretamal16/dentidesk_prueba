@extends('layouts.app')

@section('template_title')
    {{ $costo->name ?? 'Show Costo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Costo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                       
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $costo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Unitario:</strong>
                            {{ $costo->valor_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $costo->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
