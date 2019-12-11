@extends('layouts.app')

@section('title', 'Posts')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">

    <p>The posts that are on this site:</p>

    <ul>

        @foreach ($posts as $post)
        
            <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->id }}</a></li>

        @endforeach

    </ul>

    {{ $posts->links() }}

    <a href="{{ route('posts.create') }}">Create Post</a>


    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
