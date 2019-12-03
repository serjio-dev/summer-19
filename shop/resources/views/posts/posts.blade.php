@extends('main')

@section('title')
    Posts
@endsection


@section('content')

    @forelse($posts as $post)
        <div class="flex-center links">
            <div><a href="{{ \Illuminate\Support\Facades\URL::route('post_get', ['id' => $post->id]) }}">{{ $post->title }}</a></div>
            Created: {{ $post->created_at }}
        </div>
        <br/>
    @empty
        <div class="flex-center">
            Еще нет постов!
        </div>
    @endforelse

@endsection

@section('menu')
    1 item <br>
    2 item
@endsection
