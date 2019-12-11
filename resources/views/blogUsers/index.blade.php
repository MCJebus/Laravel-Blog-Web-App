@extends('layouts.app')

@section('title', 'Bloggers')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blogger') }}</div>

                <div class="card-body">
    <p>The bloggers that use this site:</p>

    <ul>

        @foreach ($blogUsers as $blogUser)
        
            <li><a href="{{ route('blogUsers.show', ['id' => $blogUser->id]) }}">{{ $blogUser->name }}</a></li>

        @endforeach

    </ul>

    <a href="{{ route('blogUsers.create') }}">Create Blogger</a>

    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
