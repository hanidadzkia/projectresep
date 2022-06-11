@extends('layouts.admin')

@section('content')
<div class="container">
        <h1 class="page-header">Buat Pengguna Baru</h1>
  
    <hr>
{!! Form::open([
    'route' => 'admin.store'
], ['class'=>'form-horizontal']) !!}

<div class="form-group">
{!! Form::label('name', 'Nama') !!}
{!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}
{!! Form::label('email', 'Alamat E-mail') !!}
{!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}
{!! Form::label('password', 'Password') !!}
{!! Form::input('text', 'password', null, ['class' => 'form-control']) !!}
{!! Form::label('role', 'Role', ['class' =>'control-label']) !!}

{!! Form::select('role', [
   'admin' => 'admin',
   'author' => 'author',
   'guest' => 'guest'],
    null, ['class' => 'form-control']
) !!}
</div>
<div class="form-group">
{!! Form::submit('Tambahkan User', ['class' => 'btn btn-primary form-control']) !!}
</div>
</div>
@endsection