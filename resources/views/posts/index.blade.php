@extends('layouts.web')

@section('title', 'ssdp')
@section('description', '')

@section('content')
    <h1 class="text-6xl lg:text-8xl px-4 lg:px-8 mb-8">Posts</h1>
    @each('posts/post', $posts, 'post')
@endsection
