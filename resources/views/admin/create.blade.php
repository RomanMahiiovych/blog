@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partials.error')

        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <form action="{{ route('admin.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="userId">UserId</label>
                        <input type="text" class="form-control" id="userId" name="userId">
                    </div>

                    <div class="form-group">
                        <label for="roleId">RoleId</label>
                        <input type="text" class="form-control" id="roleId" name="roleId">
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection