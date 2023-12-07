@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>
    {{ $post->body }}
    <a href="/post">Back to Post</a>
@endsection
