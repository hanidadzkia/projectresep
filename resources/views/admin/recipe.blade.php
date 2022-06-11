@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="page-header">Daftar Resep</h1>
    <a class="btn btn-primary" href="{{ route('recipe.create') }}" role="button">Tambah Resep</a>
    <table class="table table-striped custab">
    <thead>

        <tr>
            <th>Nama</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    @foreach($recipe as $rec)
            <tr>
                <td>{{$rec->name}}</td>
                <td>
                {!! Form::close() !!}

                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['rec.destroy', $rec->id]
                ]) !!}
                <div class="form-group">
                {!! Form::submit('Cancel', ['class' => 'btn btn-warning btn-sm']) !!}
                </div>
                {!! Form::close() !!}
                </td>
            </tr>
             @endforeach
    </table>

    <div class="page-nation">
    {!! $recipe->render() !!}
    </div>
</div>
@endsection