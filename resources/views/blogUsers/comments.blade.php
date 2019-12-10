@extends('layouts.app')

@section('title', '{{ $blogUser->name }} Comments')

@section('content')

    <ul>

        <li>Profile Name: {{ $blogUser->name }}</li>
        <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
        <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
        <li>Phone Number: {{ $blogUser->phone_number }}</li>
        <li>User: {{ $blogUser->user->name }}</li>
        @if (count($comments) > 0)
            <p>Comments:
                @foreach ($comments as $comment)
                    <li>Comment ID: {{ $comment->id }}</li>
                    <li>Text: {{ $post->text }}</li>
                    <p></p>
                @endforeach
            </p>
        @else
            <p>This blogger has not made any comments.</p>
        @endif
    </ul>

    <p><a href="{{ route('home') }}">Home</a></p>

@endsection