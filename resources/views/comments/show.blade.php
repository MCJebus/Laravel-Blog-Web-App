@extends('layouts.app')

@section('title', 'Comment Details')

@section('content')

    <ul>

        <li>Comment ID: {{ $comment->id }}</li>
        <li>Text: {{ $comment->text }}</li>
        <li>Post: {{ $comment->post->id }}</li>
        <li>Blogger: {{ $comment->blogUser->name }}</li>
       
    </ul>

    <form method="POST"
        action="{{ route('comments.destroy', ['id' => $comment->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('comments.index') }}">Back</a></p>

@endsection