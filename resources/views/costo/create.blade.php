@extends('layouts.app')

@section('template_title')
    Create Costo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Costo</span>
                    </div>
                    <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('costos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('costo.form')

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
