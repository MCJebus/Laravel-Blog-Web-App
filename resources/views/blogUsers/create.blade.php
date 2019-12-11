@extends('layouts.app')

@section('title', 'Create Blogger')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blogger') }}</div>

                <div class="card-body">

                @if (!Auth::user()->blogUser)

                <form method="POST" action="{{ route('blogUsers.store') }}">

                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Profile Name:') }}</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group row">
                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth:') }}</label>
                    <input type="text" name="date_of_birth" value="{{ old('date_of_birth') }}">
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status:') }}</label>
                    <input type="text" name="status" value="{{ old('status') }}">
                </div>
                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number:') }}</label>
                    <input type="text" name="phone_number" value="{{ old('phone_number') }}">
                </div>
                <div class="form-group row">
                    <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID:') }}</label>
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
                </div>
                <div class="row">
                            <div class="col-6 text-left">
                                <p></p>
                                <a href="{{ route('blogUsers.index') }}">Cancel</a>
                            </div>
                            <div class="col-6 text-right">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                </div>

</form>
                </div>
                @else
                <div class="form-group row">
                    <label class="col-md-8 col-form-label text-md-right">{{ __('You can only have one blogger profile.') }}</label>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
