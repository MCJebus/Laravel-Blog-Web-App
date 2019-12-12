@extends('layouts.app')

@section('title', '{{ $blogUser->name }} Posts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
    <ul>

        <li>Profile Name: {{ $blogUser->name }}</li>
        <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
        <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
        <li>Phone Number: {{ $blogUser->phone_number }}</li>
        <li>User: {{ $blogUser->user->name }}</li>
        <p></p>
        @if (count($posts) > 0)
            <p>Posts:
                @foreach ($posts as $post)
                    <li>Post ID: {{ $post->id }}</li>
                    <li>Text: {{ $post->text }}</li>
                    @if ($post->image)
                        <img src="{{ asset($post->image) }}" style="width: 275px; height: 200px;">
                    @else
                        <li>Image: No Image Set</li>
                    @endif
                    <p></p>
                @endforeach
            </p>
        @else
            <p>This blogger has not made any posts.</p>
        @endif
    </ul>

    <p><a href="{{ route('home') }}">Home</a></p>

    </div>
                </div>
            </div>
        </div>
    </div>
@endsection