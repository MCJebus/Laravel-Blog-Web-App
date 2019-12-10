@extends('layouts.app')

@section('title', 'Comments')

@section('content')

    <p>The comments that are on this site:</p>

    <ul>

        @foreach ($comments as $comment)
        
            <li><a href="{{ route('comments.show', ['id' => $comment->id]) }}">{{ $comment->id }}</a></li>

        @endforeach

    </ul>

    <a href="{{ route('comments.create') }}">Create Comment</a>

@endsection
