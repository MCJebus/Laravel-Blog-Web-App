@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <p>The posts that are on this site:</p>

    <ul>

        @foreach ($posts as $post)
        
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->id }}</a></li>

        @endforeach

    </ul>

    {{ $posts->links() }}

    <a href="{{ route('posts.create') }}">Create Post</a>

@endsection
