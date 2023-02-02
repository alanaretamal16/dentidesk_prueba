@extends('layouts.app')

@section('template_title')
    Create Tratamiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tratamiento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tratamientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tratamiento.form')

                        </form>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
