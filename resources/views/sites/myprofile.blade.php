@extends('layouts.app') 
@section('page-title', 'My Profile') 
@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title" style="text-transform: uppercase;">{{Auth::user()->name}}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">                </div>
            <div class=" col-md-9 col-lg-9 ">
                <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td>Type:</td>
                            <td>{{Auth::user()->type}}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{Auth::user()->address}}</td>
                        </tr>
                        <tr>
                            <tr>
                                <td>Location</td>
                                <td>{{Auth::user()->location}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{Auth::user()->sex}}</td>
                            </tr>
                            <tr>
                                <td>Date of birth</td>
                                <td>{{Auth::user()->dateofbirth}}</td>
                            </tr>
                            <td>Allergies</td>
                            <td> {{Auth::user()->allergies}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection