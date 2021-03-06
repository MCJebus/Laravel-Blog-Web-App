@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">

        @csrf

        <p>Text: <input type="text" name="text" value="{{ old('text') }}"></p>
        <p>Image: <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}"></p>
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
        <input type="hidden" name="check_id" value="{{ Auth::user()->blogUser->id }}">
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>

    </form>

    </div>
                </div>
            </div>
        </div>
    </div>

@endsection