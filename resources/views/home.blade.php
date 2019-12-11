@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                         Hi there, regular user
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->blogUser)

    <p><a href="{{ route('blogUsers.show', Auth::user()->blogUser->id) }}">My blogger profile</a></p>
    <p><a href="{{ route('blogUsers.posts', Auth::user()->blogUser) }}">My posts</a></p>
    <p><a href="{{ route('blogUsers.comments', Auth::user()->blogUser) }}">My comments</a></p>
@else
    <p><a href="{{ route('blogUsers.create') }}">Create blogger</a></p>
@endif
@endsection
