@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
    @if (Auth::user()->blogUser->id == $post->blog_user_id)
        <form method="POST" action="{{ route('posts.update', $post->id) }}">

            @csrf
            @method('PUT')

            <p>Text: <input type="text" name="text" value="{{ old('text') }}"></p>
            <p>Image: <input type="text" name="image" value="{{ old('image') }}"></p>
            <p>Date: <input type="text" name="date_posted" value="{{ old('date_posted') }}"></p>
            <p>Blogger ID: 
                <select name="blog_user_id">
                    @foreach ($blogUsers as $blogUser)
                        @if ($blogUser->id == Auth::user()->blogUser->id)
                        <option value="{{ $blogUser->id }}"
                            @if ($blogUser->id == old('blog_user_id'))
                                selected="selected"
                            @endif
                            >{{ $blogUser->name }}
                        </option>
                        @endif
                    @endforeach
                </select>
            </p>
            <input type="submit" value="Submit">
            <a href="{{ route('posts.index') }}">Cancel</a>

        </form>
    @else
        <p>You cannot edit someone elses posts.</p>
    @endif
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection