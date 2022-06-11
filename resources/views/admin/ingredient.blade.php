@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="page-header">Daftar Bahan</h1>
    <table class="table table-striped custab">
    <thead>
        
        <tr>
            <th>Nama</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    @foreach($ingredient as $ing)
            <tr>
                <td>{{$ing->name}}</td>
                <td>
                {!! Form::close() !!}

                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['ingredient.destroy', $ing->id]
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
    {!! $ingredient->render() !!}
    </div>
</div>
@endsection