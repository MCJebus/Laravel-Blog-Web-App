@extends('layouts.app')

@section('title', 'Bloggers')

@section('content')

    <p>The bloggers that use this site:</p>

    <ul>

        @foreach ($blogUsers as $blogUser)
        
            <li>{{  $blogUser->name   }}</li>

        @endforeach

    </ul>

@endsection
