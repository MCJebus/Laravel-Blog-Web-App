@extends('layouts.app')

@section('title', 'Edit Comment')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">
    @if (Auth::user()->blogUser->id == $comment->blog_user_id)
        <form method="POST" action="{{ route('comments.update', $comment->id) }}">

            @csrf
            @method('PUT')

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
            <a href="{{ route('comments.index') }}">Cancel</a>

        </form>
    @else
        <p>You cannot edit someone elses comments.</p>
    @endif
    
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection