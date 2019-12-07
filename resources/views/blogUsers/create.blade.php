@extends('layouts.app')

@section('title', 'Create Blogger')

@section('content')

    <form method="POST" action="{{ route('blogUsers.store') }}">

        @csrf
        
        <p>Profile Name: <input type="text" name="name" ></p>
        <p>Date of Birth: <input type="text" name="date_of_birth" ></p>
        <p>Status: <input type="text" name="status" ></p>
        <p>Phone Number: <input type="text" name="phone_number" ></p>
        <p>User ID: <input type="text" name="user_id" ></p>
        <input type="submit" value="Submit">
        <a href="{{ route('blogUsers.index') }}">Cancel</a>

    </form>

@endsection
