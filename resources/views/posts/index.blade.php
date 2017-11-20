@extends('layouts.app')

@section('content')

    <h3>Posts</h3>

    @if(count($posts) > 0)
        
        @foreach ($posts as $post)
            <div class="well">
                <h4> <a href="posts/{{$post->id}}"> {{$post->title}} </a></h4>
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <small>No posts found.</small>
    @endif

@endsection