@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <br>
    Selamat Datang ADMIN!
    <br><br>
    <a href="{{ route('admin.galeri') }}" class="btn btn-md btn-success mb-3">Galeri</a><br>
    <a href="{{ route('admin.guru') }}" class="btn btn-md btn-success mb-3">Tenaga Pendidik</a><br>
    <a href="{{ route('admin.status') }}" class="btn btn-md btn-success mb-3">Status Guru</a><br>
@endsection