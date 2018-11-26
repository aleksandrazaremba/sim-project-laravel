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
                <th>gender</th>
                <th>delete</th>
        </tr>
        @foreach($users as $user)
        <tr>
                <td>{{$user->type}}</td>
                <td><a href="{{route('sites.userprofile', $user)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->location}}</td>
                <td>{{$user->sex}}</td>
                <td>

                        @can('isDoctor')
                        <button type="button" class="btn btn-danger">
                                        {{-- <form  --}}
                                        {{-- action='{{ route('users.destroy', $user->id)}}' method='POST' id="delete-form-{{$user->id}}" style="display: none;">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}} --}}
                                                
                                            {{-- </form> --}}
                                            {{-- <a href='' 
                                            onclick="if(confirm('Are you sure, You want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$user->id}}').submit();
                                            }else{
                                                event.preventDefault();
                                            } " --}}
                                            {{-- >
                                                  Delete
                                            </a> --}}

                                            <a href = 'delete/{{ $user->id }}' onclick="return confirm('Are you sure you want to delete this item?');"
                                            >Delete</a>
                                </button> @endcan
                </td>
        </tr>
        @endforeach






</table>
@endsection