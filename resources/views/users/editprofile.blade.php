{{-- 
@extends('layouts.app') 
@section('page-title', 'My Profile') 
@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Edit Your Profile</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        {{ csrf_field() }} {{ method_field('patch') }}
                        <div class="form-group row">
                            <label for="username" class="col-4 col-form-label">User Name*</label>
                            <div class="col-8">
                                <input id="username" name="username" placeholder="Username" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email*</label>
                            <div class="col-8">
                                <input id="email" name="email" placeholder="Email" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="newpass" class="col-4 col-form-label">New Password</label>
                            <div class="col-8">
                                <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-4 col-form-label">Address</label>
                            <div class="col-8">
                                <input id="address" name="address" placeholder="Address" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sex" class="col-4 col-form-label">Gender</label>
                            <div class="col-8">
                                <select id="sex" name="sex" class="custom-select">
                                <option value="admin">K</option>
                                <option value="admin">M</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="citizennumber" class="col-4 col-form-label">Citizen number</label>
                            <div class="col-8">
                                <input id="citizennumber" name="citizennumber" placeholder="Citizen number" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateofbirth" class="col-4 col-form-label">Date of birth</label>
                            <div class="col-8">
                                <input id="dateofbirth" name="dateofbirth" placeholder="Date of birth" class="form-control here" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="allergies" class="col-4 col-form-label">Allergies</label>
                            <div class="col-8">
                                <textarea id="allergies" name="allergies" cols="40" rows="4" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
 --}}