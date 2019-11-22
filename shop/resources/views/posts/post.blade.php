@extends('main')

@section('title')
    {{ $post->title }}
@endsection


@section('content')
    <div class="title m-b-md">
        {{ $post->title }}
    </div>
    <div class="flex-center">
        {{ $post->desc }}
    </div>
    <div>
        Created: {{ $post->created_at }}
    </div>
@endsection
