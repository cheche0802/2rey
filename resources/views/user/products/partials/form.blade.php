{{ Form::hidden('user_id',auth()->user()->id)}}

<div class="form-group">
  {{ Form::label('category_id', 'Categorias') }}
  {{ Form::select('category_id', $categories, null, ['']) }}
</div>
<div class="form-group">
  {{ Form::label('detail_id', 'Detalle') }}
  {{ Form::select('detail_id', $details, null, ['']) }}
</div>

<div class="form-group">
    {{ Form::label('code', 'Codigo') }}
    {{ Form::text('code', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('amount', 'Cantidad') }}
    {{ Form::number('amount', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('tax', 'Impuesto') }}
    {{ Form::number('tax', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')

@endsection
