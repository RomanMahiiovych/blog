@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $user->name }}</h2>
        <p>{{ $role->slug }}</p>
    </div>
@endsection