@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<br>
<div class="card">
        <div class="card-header text-center"><h2>Create a new User</h2></div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                     <button class="btn btn-primary" type="submit" >Add User</button>
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection