<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tratamiento_id') }}
            {{ Form::text('tratamiento_id', $costo->tratamiento_id, ['class' => 'form-control' . ($errors->has('tratamiento_id') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento Id']) }}
            {!! $errors->first('tratamiento_id', '<div class="invalid-feedback">:message</div>') !!}
            
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $costo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_unitario') }}
            {{ Form::text('valor_unitario', $costo->valor_unitario, ['class' => 'form-control' . ($errors->has('valor_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Valor Unitario']) }}
            {!! $errors->first('valor_unitario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $costo->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>