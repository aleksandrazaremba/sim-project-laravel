@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit-profile') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $errors->has('name') ? '' : $user->name }}">                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sex" value="{{ $errors->has('sex') ? '' : $user->sex }}">                                @if ($errors->has('name'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('sex') }}</strong>
                                            </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Type:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="type" value="{{ $errors->has('type') ? '' : $user->type }}">                                @if ($errors->has('name'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('type') }}</strong>
                                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Address:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address" value="{{ $errors->has('address') ? '' : $user->address }}">                                @if ($errors->has('name'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Location:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="location" value="{{ $errors->has('location') ? '' : $user->location }}">                                @if ($errors->has('name'))
                                <span class="help-block">
                                                        <strong>{{ $errors->first('location') }}</strong>
                                                    </span> @endif
                            </div>
                            <div class="form-group{{ $errors->has('citizennumber') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Citizen number:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="citizennumber" value="{{ $errors->has('citizennumber') ? '' : $user->citizennumber }}">                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                                        <strong>{{ $errors->first('citizennumber') }}</strong>
                                                    </span> @endif
                                </div>
                                {{--
                                <div class="form-group{{ $errors->has('dateofbirth') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Date of birth:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="dateofbirth" value="{{ $errors->has('dateofbirth') ? '' : $user->dateofbirth }}">                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                                    </span> @endif
                                    </div> --}}


                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>

                                        <div class="col-md-6">
                                            <input type="email" disabled class="form-control" name="email" value="{{ $user->email }}">


                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password"> @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password_confirmation"> @if($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span> @endif

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update
                                </button>
                                        </div>
                                    </div>

                    </form>

                    </div>
                    </div>
                    </div>
                </div>
            </div>
@endsection