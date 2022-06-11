@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (auth()->check())
                   @if (auth()->user()->can_post())
                    Halo, Selamat Datang {{ Auth::user()->name }}
                    
                    @else
                    Halo, Selamat Datang {{ Auth::user()->name }}<br>
                    Tunggu admin untuk mengonfirmasi persetujuan akun Anda.
                   @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
