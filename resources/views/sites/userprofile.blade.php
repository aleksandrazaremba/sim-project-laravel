@extends('layouts.app') 
@section('page-title', 'Profile') 
@section('content')

<h3>User info:</h3>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{$user->name}}</h2>
            <table class="table table-user-information ">
                <tbody>
                    <tr>
                        <td>Type:</td>
                        <td>{{$user->type}}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>{{$user->location}}</td>
                    </tr>
                    <tr>
                        <td>NIF:</td>
                        <td>{{$user->citizennuber}}</td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td>{{$user->dateofbirth}}</td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td>{{$user->sex}}</td>
                    </tr>
                    <tr>
                        <td>Allergies:</td>
                        <td>{{$user->allergies}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <button class='btn btn-default'><a href='/listofusers'>Go back</a></button>
</div>
@endsection