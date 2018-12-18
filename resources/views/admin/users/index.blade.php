@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header text-center"><h2>Users</h2></div>
        <br>
        <center>
            <div class="col-10 text-center">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Profile Photo</th>
                                <th>Name</th>
                                <th>Permission</th>
                                {{-- <th>Delete</th> --}}
                                
                            </tr>
                        </thead>
                        <tbody>
                          @if($users->count() > 0)  
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" height="60px" style="border-radius: 50%;"></td>
                                    <td><b>{{$user->name}}</b></td>   
                                    <td>                                         
                                        @if ($user->admin)
                                            <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-primary">Remove admin <br> privilages</a>
                                        @else
                                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success">Make admin</a>  
                                        @endif    
                                    </td>
                                    <td>
                                        @if(Auth::id() !== $user->id)
                                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                        @endif
                                    </td>
                                    

                            @endforeach
                            @else
                            <tr>
                              <th class="text-center display-3" colspan="8" style="color:cornflowerblue"> No Current Users!</th>
                            </tr>     
                          @endif  
                        </tbody>
                    </table>
                </div>
        </center>        
        </div>
    </div>


@endsection