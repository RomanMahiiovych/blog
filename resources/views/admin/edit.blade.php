@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partials.error')

        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <form action="{{ route('admin.update', ['id' => $user->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group">
                        <label for="userId">UserId</label>
                        <input type="text" disabled class="form-control" id="userId" name="userId" value="{{ $user->name }}">
                    </div>

                    <div class="form-group ">
                        <label for="roleId">RoleId</label>
                       {{-- <input type="text" class="form-control" id="roleId" name="roleId" value="{{ $role->id }}">--}}
                        <p>
                        <select name="roleId" id="roleId">
                            @if($role->id == 1)
                                <option selected value="1">Author</option>
                                <option  value="2">Commentator</option>
                            @else
                                <option value="1">Author</option>
                                <option selected value="2">Commentator</option>
                            @endif
                        </select>
                        </p>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection