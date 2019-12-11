@extends('layouts.app')

@section('title', 'Comment Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
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

    <p><a href="{{ route('comments.edit', $comment->id) }}">Edit Comment</a></p>

    <p><a href="{{ route('comments.index') }}">Back</a></p>

    </div>
                </div>
            </div>
        </div>
    </div>

@endsection