@extends('layouts.web')

@section('title', $post->title)
@section('description', '')

@section('content')
    <div class="lg:px-8">
            <div class="max-w-3xl mx-auto py-10 lg:py-16 px-4">
                <h1 class="text-3xl lg:text-5xl font-bold">{{ $post->title }}</h1>
                <div class="flex items-center gap-6 mt-2 lg:mt-2 text-sm">
                    <div>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM YYYY') }}</div>
                    <div class="flex items-center gap-1">
                        <svg class="icon-svg h-4 w-4">
                            <use xlink:href="#icon-eye" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                    </div>
                </div>
                <div class="mt-8 content-text">{!! $post->content !!}</div>
            </div>
    </div>
@endsection
