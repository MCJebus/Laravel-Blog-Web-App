@extends('layouts.app')

@section('title', 'Create Comment')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
    <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Text: <input type="text" name="text" value="{{ old('text') }}"></p>
        <p>Post ID: 
            <select name="post_id">
                @foreach ($posts as $post)
                    <option value="{{ $post->id }}"
                        @if ($post->id == old('post_id'))
                            selected="selected"
                        @endif
                        >{{ $post->id }}
                    </option>
                @endforeach
            </select>
        </p>
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
        <a href="{{ route('comments.index') }}">Cancel</a>

    </form>

    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
