@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to NextGenFCT</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br><br>
                    <img class="col-md-12" src="{{ url('/img/projektobraz.PNG') }}">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
