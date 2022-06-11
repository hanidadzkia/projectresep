@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <h1>Variazione per "{{ $ingredient->name }}"</h1>
    <p class="lead">Perbaharui, atau<a href="{{ route('ingredient.create') }}">kembali.</a></p>
    <hr>


    {!! Form::model($ingredient, [
    'method' => 'PUT',
    'route' => ['ingredient.update', $ingredient->id]
]) !!}
<div class="form-group">
{!! Form::label('name', 'Nama Resep:') !!}
{!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Memperbaharui Bahan', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

{!! Form::open([
'method' => 'DELETE',
'route' => ['ingredient.destroy', $ingredient->id]
]) !!}
<div class="form-group">
{!! Form::submit('Cancel', ['class' => 'btn btn-primary btn-danger form-control']) !!}
</div>
{!! Form::close() !!}
</div>
</div>
@endsection