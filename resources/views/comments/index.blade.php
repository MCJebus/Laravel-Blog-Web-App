@extends('layouts.app')

@section('title', 'Comments')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">

    <p>The comments that are on this site:</p>

    <ul>

        @foreach ($comments as $comment)
        
            <li><a href="{{ route('comments.show', ['id' => $comment->id]) }}">{{ $comment->id }}</a></li>

        @endforeach

    </ul>

    <a href="{{ route('comments.create') }}">Create Comment</a>

    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
