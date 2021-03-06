@extends('layouts.app')

@section('title', 'Edit Blogger')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blogger Posts') }}</div>

                <div class="card-body">

    <form method="POST" action="{{ route('blogUsers.update', $blogUser->id) }}">

        @csrf
        @method('PUT')

        <p>Profile Name: <input type="text" name="name" value="{{ old('name') }}"></p>
        <p>Date of Birth: <input type="text" name="date_of_birth" value="{{ old('date_of_birth') }}"></p>
        <p>Status: <input type="text" name="status" value="{{ old('status') }}"></p>
        <p>Phone Number: <input type="text" name="phone_number" value="{{ old('phone_number') }}"></p>
        <p>User ID: 
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}"
                        @if ($user->id == old('user_id'))
                            selected="selected"
                        @endif
                        >{{ $user->name }}
                    </option>
                @endforeach
            </select>
        </p>
        <input type="submit" value="Submit">
        <a href="{{ route('blogUsers.index') }}">Cancel</a>

    </form>

    </div>
                </div>
            </div>
        </div>
    </div>
@endsection