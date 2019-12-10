@extends('layouts.app')

@section('title', 'Bloggers')

@section('content')

    <p>The bloggers that use this site:</p>

    <ul>

        @foreach ($blogUsers as $blogUser)
        
            <li><a href="{{ route('blogUsers.show', ['id' => $blogUser->id]) }}">{{ $blogUser->name }}</a></li>

        @endforeach

    </ul>

    <a href="{{ route('blogUsers.create') }}">Create Blogger</a>
    <a href="{{ route('blogUsers.edit') }}">Edit Blogger</a>
    
@endsection
