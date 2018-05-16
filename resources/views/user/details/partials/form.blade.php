
<div class="form-group">
  {{ Form::label('category_id', 'Categorias') }}
  {{ Form::select('category_id', $categories, null, ['']) }}
</div>


<div class="form-group">
    {{ Form::label('delivery', 'Presentacion') }}
    {{ Form::text('delivery', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.config.height = 400;
  CKEDITOR.config.width  = 'auto';

  CKEDITOR.replace('description');
</script>
@endsection
