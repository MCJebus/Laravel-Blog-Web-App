@extends('layouts.app')

@section('title', 'Post Details')

@section('content')

    <ul>

        <li>Post ID: {{ $post->id }}</li>
        <li>Text: {{ $post->text ?? 'No Text Set'}}</li>
        <li>Image: {{ $post->image ?? 'No Image Set' }}</li>
        <li>Date Posted: {{ $post->date_posted }}</li>
        <li>Blogger: {{ $post->blogUser->name }}</li>
       
    </ul>

    <form method="POST"
        action="{{ route('posts.destroy', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('posts.index') }}">Back</a></p>

@endsection