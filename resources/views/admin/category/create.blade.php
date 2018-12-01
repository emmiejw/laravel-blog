@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
<br>
<div class="card">
        <div class="card-header text-center"><h2>Create Category</h2></div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <div class="text-center">
                     <button class="btn btn-success" type="submit" >Add Category</button>
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection