@extends('layouts.app')

@section('title', '{{ $blogUser->name }} Comments')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Comments') }}</div>

                <div class="card-body">
    <ul>

        <li>Profile Name: {{ $blogUser->name }}</li>
        <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
        <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
        <li>Phone Number: {{ $blogUser->phone_number }}</li>
        <li>User: {{ $blogUser->user->name }}</li>
        <p></p>
        @if (count($comments) > 0)
            <p>Comments:
                @foreach ($comments as $comment)
                    <li>Comment ID: {{ $comment->id }}</li>
                    <li>Text: {{ $comment->text }}</li>
                    <li>Post ID: {{ $comment->post_id }}</li>
                    <p></p>
                @endforeach
            </p>
        @else
            <p>This blogger has not made any comments.</p>
        @endif
    </ul>

    <p><a href="{{ route('home') }}">Home</a></p>

    </div>
                </div>
            </div>
        </div>
    </div>

@endsection