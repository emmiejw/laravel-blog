@extends('layouts.app')

@section('content')
<div class="row">
            <div class="col-lg-3">
                <div class="card bg-info">
                    <div class="panel-heading text-center">
                         POSTED
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $posts_count }}</h1>
                    </div>
                </div>
            </div>
<br>
            <div class="col-lg-3">
                <div class="card bg-danger">
                    <div class="card-heading text-center">
                        TRASHED POSTS
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $trashed_count }}</h1>
                    </div>
                </div>
            </div>
<br>
            <div class="col-lg-3">
                <div class="card bg-success">
                    <div class="card-heading text-center">
                        USERS
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $users_count }}</h1>
                    </div>
                </div>
            </div>
<br>
            <div class="col-lg-3">
                <div class="card bg-warning">
                    <div class="card-heading text-center">
                        CATEGORIES
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">{{ $categories_count }}</h1>
                    </div>
                </div>
            </div>

</div>
@endsection
