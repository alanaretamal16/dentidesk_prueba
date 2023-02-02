@extends('layouts.app')

@section('template_title')
    Actualizar Costo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Costo</span>
                    </div>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('costos.update', $costo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('costo.form')

                        </form>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costos.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
