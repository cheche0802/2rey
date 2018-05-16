<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'presentation']) }}
</div>
<div class="form-group">
    {{ Form::label('address', 'Direccion') }}
    {{ Form::textarea('address', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.config.height = 400;
  CKEDITOR.config.width  = 'auto';

  CKEDITOR.replace('address');
</script>
@endsection
