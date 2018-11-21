@extends('layouts.app')

@section('content')
<h1>See all posts</h1>
    <table class="table table-hover">
            <br>

            <tr>
                    <th>Title</th>
                    <th>description</th>
                </tr>
        @foreach($sites as $site)
        <tr>
            <td><a href="{{route('sites.show', $site)}}">{{$site->title}}</a></td>
            <td>{{$site->description}}</td>
        </tr>
        @endforeach
    </table>
@endsection