@extends('layouts.app')

@section('template_title')
    Costo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Costo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('costos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                                <a  href="{{ route('home') }}" class="btn btn-primary btn-sm float-right"  data-placement="left"> 
                                {{ __('Volver') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
									
										<th>Descripcion</th>
										<th>Valor Unitario</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($costos as $costo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										
											<td>{{ $costo->descripcion }}</td>
											<td>{{ $costo->valor_unitario }}</td>
											<td>{{ $costo->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('costos.destroy',$costo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('costos.show',$costo->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('costos.edit',$costo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $costos->links() !!}
            </div>
        </div>
    </div>
@endsection
