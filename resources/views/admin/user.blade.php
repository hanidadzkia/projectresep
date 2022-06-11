@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="page-header">Daftar User</h1>
    <div class="row col-md-12">
    <table class="table table-striped custab">
             <thead>
             <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-center">Tindakan</th>
        </tr>
            </thead>
            @foreach($user as $user)
            <tr>
                
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="{{ route('admin.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span> Ubah</a></td>
            
            </tr>
            @endforeach
    </table>
    </div>
</div>
@endsection