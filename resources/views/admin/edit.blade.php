@extends('layouts.admin')

@section('content')
<div class="container">

        <h1 class="page-header">Edit user "{{ $user->name }}"</h1>
   
    <hr>
{!! Form::model($user, [
    'method' => 'PUT',
    'route' => ['admin.update', $user->id]
]) !!}

<div class="form-group">
{!! Form::label('name', 'Nama') !!}
{!! Form::input('text', 'name', null, ['class' => 'form-control']) !!}
{!! Form::label('email', 'Alamat E-mail') !!}
{!! Form::input('email', 'email', null, ['class' => 'form-control']) !!}

{!! Form::label('role', 'Role', ['class' =>'control-label']) !!}

{!! Form::select('role', [
   'admin' => 'admin',
   'author' => 'author',
   'guest' => 'guest'],
    null, ['class' => 'form-control']
) !!}
</div>
<div class="form-group">
{!! Form::submit('Perbaharui User', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

{!! Form::open([
'method' => 'DELETE',
'route' => ['admin.destroy', $user->id]
]) !!}
<div class="form-group">
{!! Form::submit('Cancel', ['class' => 'btn btn-primary btn-danger form-control']) !!}
</div>
{!! Form::close() !!}

</div>
@endsection