@extends('layouts.app')

@section('page-title', 'Add')

@section('content')

    <form action="{{route('sites.save')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Post title">
        </div>
        <div class="form-group">
            <textarea name="description" class="form-control" placeholder="Type your post content here!"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                         Save
            </button>
        </div>
    </form>

@endsection