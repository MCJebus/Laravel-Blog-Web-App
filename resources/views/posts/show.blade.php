@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
    <ul>

        <li>Post ID: {{ $post->id }}</li>
        <li>Text: {{ $post->text ?? 'No Text Set'}}</li>
        <img src="/tmp/{{ $post->image }}" alt="Image for the post.">
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



    <p><a href="{{ route('posts.edit', $post->id) }}">Edit Post</a></p>

    <p><a href="{{ route('posts.index') }}">Back</a></p>

    <p><a href="{{ route('comments.create') }}">Comment on this post</a></p>
    
@if (count($comments) > 0)
    <p>Comments: 
            @foreach ($comments as $comment)
            <ul>

                <li>Comment ID: {{ $comment->id }}</li>
                <li>Text: {{ $comment->text}}</li>
                <li>Blogger: {{ $comment->blogUser->name }}</li>

            </ul>
            @endforeach
    </p>
@else
        <p>No comments for this post.</p>
@endif

</div>
                </div>
            </div>
        </div>
    </div>
@endsection