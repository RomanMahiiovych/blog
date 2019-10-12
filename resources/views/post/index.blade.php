@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.success')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            @if(!$posts->count())
                There's nothing in your postline, yet.
            @else
                    @foreach($posts as $post)
                        <div class="media">
                            <a class="mr-2" href="#">
                                <img src="{{ $post->users->getAvatarUrl() }}" class="media-object"
                                     alt="{{ $post->users->name }}">
                            </a>
                            <div class="media-body">
                                <h4 class="mt-2">
                                    <a href="#">{{ $post->users->name }}</a>
                                </h4>
                                <h5 class="mt-3 text-primary"><b>{{ $post->title }}</b></h5>
                                <p>{{ $post->body }}</p>


                                @foreach($post->comments as $comment)


                                    <div class="media">
                                        <a class="mr-2" href="#">
                                            <img src="{{ $comment->users->getAvatarUrl() }}" class="media-object"
                                                 alt="{{ $comment->users->name }}">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"><a href="#">
                                                    {{ $comment->users->name }}
                                                </a></h5>
                                            <p>{{ $comment->body  }}</p>
                                            <ul class="list-inline">
                                               {{-- <li>{{ $post->created_at->diffForHumans() }}</li>--}}
                                            </ul>
                                        </div>
                                    </div>

                                @endforeach

                                <form action="/post/{{ $post->id }}/comments" role="form" method="post">
                                    <div class="form-group-reply{{ $errors->has("body") ? ' has-error' : '' }}">
                                    <textarea name="body"  class="form-control"
                                              placeholder="Reply to this post" rows="2"></textarea>
                                        @if($errors->has("body"))
                                            <span class="text-danger">{{ $errors->first("body") }}</span>
                                            <style>
                                                .form-group-reply > textarea{
                                                    border: 1px solid red;
                                                }
                                            </style>
                                        @endif
                                    </div>
                                    <input type="submit" value="Reply" class="btn btn-primary mt-2">
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>

                            </div>
                        </div>
                    @endforeach
                    {{--{!! $postes->render() !!}--}}
                @endif
        </div>
    </div>
</div>
@endsection