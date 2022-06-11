@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <br>
    <br>
    <h1>Buat Resep Baru</h1>
    <p class="lead">Buat, atau <a href="{{ route('recipe.index') }}">kembali ke resep.</a></p>
    <hr>
{!! Form::open([
'route' => 'recipe.store','files' => true
], ['class'=>'form-horizontal',]) !!}
</div>
<div class="row">
<div class="col-md-4">

    <div class="form-group">
        {!! Form::label('name', 'Nama Resep:') !!}
        {!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}
    </div>
    </div>
  <div class="col-md-4">
    <div class="form-group">
{!! Form::label('name', 'Kategori:', ['class' =>'control-label']) !!}

{!! Form::select('category', [
   'Antipasti' => 'Appetizer',
   'Primi' => 'Maincourse',
   'Secondi' => 'Dessert',
   'Contorni' => 'Drink',
   'Dolci e Dessert' => 'Snacks'],
    null, ['class' => 'form-control']
) !!}
</div>

</div>

<div class="col-md-4">
    <div class="form-group">
{!! Form::label('name', 'Kesulitan:', ['class' =>'control-label']) !!}

{!! Form::select('difficult', [
   'Alta' => 'Tinggi',
   'Media' => 'Sedang',
   'Bassa' => 'Mudah'],
    null, ['class' => 'form-control']
) !!}

</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
<div class="form-group">
{!! Form::label('description', 'Deskripsi Resep:') !!}
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
    <div class="form-group">
{!! Form::label('ingredient_list', 'Ingredients:', ['class' =>'control-label']) !!}

{!! Form::select('ingredient_list[]', $ingredients, null, ['id' => 'ingredient_list', 'class' => 'form-control', 'multiple']) !!}

</div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
    {!! Form::label('Immagine') !!}
    {!! Form::file('image', null) !!}
</div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
{!! Form::submit('Tambahkan resep', ['class' => 'btn btn-primary form-control']) !!}
</div>
    </div>

</div>

{!! Form::close() !!}


</div>

@endsection
@section('footer')
<script type="text/javascript">
  $('#ingredient_list').select2({
       placeholder: 'Pilih atau tambahkan bahan baru' ,
       tags: true,
       tokenSeparators: [","],
        createTag: function(newIngredient) {
       return {
           id: 'new:' + newIngredient.term,
           text: newIngredient.term + ' (+)'
       };
   }
      });
</script>
@endsection