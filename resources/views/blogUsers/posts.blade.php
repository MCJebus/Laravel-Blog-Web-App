@extends('layouts.app')

@section('title', '{{ $blogUser->name }} Posts')

@section('content')

    <ul>

        <li>Profile Name: {{ $blogUser->name }}</li>
        <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
        <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
        <li>Phone Number: {{ $blogUser->phone_number }}</li>
        <li>User: {{ $blogUser->user->name }}</li>
        @if (count($posts) > 0)
            <p>Posts:
                @foreach ($posts as $post)
                    <li>Post ID: {{ $post->id }}</li>
                    <li>Text: {{ $post->text }}</li>
                    <li>Image: {{ $post->image }}</li>
                    <p></p>
                @endforeach
            </p>
        @else
            <p>This blogger has not made any posts.</p>
        @endif
    </ul>

    <p><a href="{{ route('home') }}">Home</a></p>

@endsection