@extends('layouts.app')

@section('content')
<br>
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            Welcome {{auth()->user()->name}},
        </div>
    </div>
      
  

@endsection
