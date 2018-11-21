@extends('layouts.app')

@section('page-title', 'My Profile')

@section('content')
<h2>List of users</h2>
<h6>you can display the patient's profile by clicking on it</h6>
<br>

<table class="table table-hover">
        <br>
        <tr>
                
                <th>type</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>location</th>
                <th>date of birth</th>
                <th>sex</th>
        </tr>
    @foreach($users as $user)
    <tr>
                <td>{{$user->type}}</td>
                <td><a href="{{route('sites.userprofile', $user)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->location}}</td>
                <td>{{$user->dateofbirth}}</td>
                <td>{{$user->sex}}</td>
    </tr> 
     @endforeach

     




</table>



@endsection