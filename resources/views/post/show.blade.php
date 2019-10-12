@extends('layouts.app')

@section('content')
    <div class="container">

            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>

      {{--  <p>{{ $comment->post }}</p>--}}
        @foreach($post->comments as $comment)
            {{ $comment->body}}
            {{ $comment->user_id}}
        @endforeach

    </div>
@endsection