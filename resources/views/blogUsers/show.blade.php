@extends('layouts.app')

@section('title', 'Blogger Details')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Blogger Profile</div>

                    <div class="card-body">
                    <ul>   
                    <li>Profile Name: {{ $blogUser->name }}</li>
                    <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
                    <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
                    <li>Phone Number: {{ $blogUser->phone_number }}</li>
                    <li>User: {{ $blogUser->user->name }}</li>
                    @if (count($groups) > 0)
                        <p>Groups:
                        @foreach ($groups as $group)
                            <li>{{ $group->name }}</li>
                        @endforeach
                        </p>
                    @else
                        <p>This blogger has not joined any groups.</p>
                    @endif
                    </ul>

                    <form method="POST"
                    action="{{ route('blogUsers.destroy', ['id' => $blogUser->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                    
                    <p></p>
                    <p><a href="{{ route('blogUsers.edit', $blogUser->id) }}">Edit Blogger</a></p>

                    <p><a href="{{ route('blogUsers.index') }}">Back</a></p>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection