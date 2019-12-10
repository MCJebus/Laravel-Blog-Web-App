@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    <form method="POST" action="{{ route('posts.store') }}">

        @csrf

        <p>Text: <input type="text" name="text" value="{{ old('text') }}"></p>
        <p>Image: <input type="text" name="image" value="{{ old('image') }}"></p>
        <p>Date: <input type="text" name="date_posted" value="{{ old('date_posted') }}"></p>
        <p>Blogger ID: 
            <select name="blog_user_id">
                @foreach ($blogUsers as $blogUser)
                    <option value="{{ $blogUser->id }}"
                        @if ($blogUser->id == old('blog_user_id'))
                            selected="selected"
                        @endif
                        >{{ $blogUser->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>

    </form>

@endsection