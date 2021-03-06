@extends('layouts.app') 
@section('page-title', 'My Profile') 
@section('content')
<h2>List of users</h2>
<h6>you can display the patient's profile by clicking on it</h6>
<br>

<table class="table table-hover table-striped page-listofusers">
        <br>
        <tr class="thead-dark">

                <th>type</th>
                <th>name</th>

                @cannot('isInvestigator')
                <th>email</th>
                <th>address</th>
                @endcannot
                <th>location</th>
                <th>gender</th>
                @can('isDoctor')
                <th>delete</th>
                @endcan
        </tr>
        @foreach($users as $user)
        <tr>
                <td>{{$user->type}}</td>
                <td><a class='a-color-pink' href="{{route('sites.userprofile', $user)}}">{{$user->name}}</a></td>
                @cannot('isInvestigator')
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                @endcannot
                <td>{{$user->location}}</td>
                <td>{{$user->sex}}</td>
                @can('isDoctor')
                <td>
                        <button type="button" class="btn btn-danger">    
                        <a class="btn btn-danger" href = 'delete/{{ $user->id }}' onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </button>
                </td>
                @endcan
        </tr>
        @endforeach
</table>
@endsection