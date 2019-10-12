@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.error')

    <div class="row justify-content-center">
        <div class="col-md-offset-4 col-md-4">
            <form action="{{ route('post.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body"></textarea>
                </div>

                <input type="submit" class="btn btn-success" value="Submit">

            </form>
        </div>
    </div>
</div>


@endsection


