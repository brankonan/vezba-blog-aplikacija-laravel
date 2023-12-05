@extends('layout.default')

@section('content')

<div>
<div class='container'>
    <img src="{{ $post->image_url }}" >
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <small>{{ $post->category }}</small>
</div>
</div>