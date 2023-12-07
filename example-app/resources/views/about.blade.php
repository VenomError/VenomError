@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $img }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle">
@endsection
