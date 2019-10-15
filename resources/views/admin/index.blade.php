@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Admin panel</h3>


        {{--@foreach($users as $user)
         --}}{{-- {{  dd($user->roles[0]->id) }}--}}{{--
            @if($user->roles[0]->slug == 'commentator')
                {{ dd($user->roles[0]->id = 'author') }}
            @endif
        @endforeach--}}


        <table class="table table-hover">
            <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
            <th>Operation</th>
            </thead>
            <tbody>
            @if(count($users))
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->roles[0]->slug }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('admin.edit', ['id' => $user->id]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <br/>

    </div>
@endsection