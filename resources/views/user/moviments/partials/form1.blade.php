<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>moviment</title>
  </head>
  <body>
    {{ Form::hidden('user_id',auth()->user()->id)}}
    <input type="date" name="date" min="2000-01-02"><br>
    <div class="form-group">
        {{ Form::label('code', 'Codigo') }}
        {{ Form::text('code', null, ['class' => 'form-control']) }}
    </div>

    <input type="radio" name="status" value="Entrada"> Entrada<br>
    <input type="radio" name="status" value="Salida"> Salida


    <div class="form-group">
      {{ Form::label('product_id', 'Producto') }}
      {{ Form::select('product_id', $product, null, ['class'=>'multiple']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Descripcion') }}
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('amount', 'Cantidad') }}
        {{ Form::number('amount', null, ['class' => 'form-control',]) }}
    </div>


      <div class="form-group">
<<<<<<< HEAD
          {{ Form::label('price', 'Costo') }}
          {{ Form::number('price', null, ['class' => 'form-control',]) }}
=======
          {{ Form::label('cost', 'Costo') }}
          {{ Form::number('cost', null, ['class' => 'form-control',]) }}
>>>>>>> 8a81a8df7e9d2f01845f27b5e461d6982917b123
      </div>




    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    </div>
  </body>
</html>
