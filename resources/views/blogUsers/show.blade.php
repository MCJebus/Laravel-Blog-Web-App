@extends('layouts.app')

@section('title', 'Blogger Details')

@section('content')

    <ul>

        <li>Profile Name: {{ $blogUser->name }}</li>
        <li>Date of Birth: {{ $blogUser->date_of_birth }}</li>
        <li>Status: {{ $blogUser->status ?? 'No Status Set' }}</li>
        <li>Phone Number: {{ $blogUser->phone_number }}</li>
        <li>User: {{ $blogUser->user->name }}</li>
       
    </ul>

    <form method="POST"
        action="{{ route('blogUsers.destroy', ['id' => $blogUser->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('blogUsers.index') }}">Back</a></p>

@endsection