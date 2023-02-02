<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_boleta') }}
            {{ Form::text('numero_boleta', $venta->numero_boleta, ['class' => 'form-control' . ($errors->has('numero_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Boleta']) }}
            {!! $errors->first('numero_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $venta->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_total') }}
            {{ Form::text('monto_total', $venta->monto_total, ['class' => 'form-control' . ($errors->has('monto_total') ? ' is-invalid' : ''), 'placeholder' => 'Monto Total']) }}
            {!! $errors->first('monto_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>