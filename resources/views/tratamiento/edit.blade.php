@extends('layouts.app')

@section('template_title')
    Update Tratamiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Tratamiento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tratamientos.update', $tratamiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tratamiento.form')

                        </form>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costos.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
