@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Groups') }}</div>

                <div class="card-body">
    <p>The groups that are on this site:</p>

    <ul>

        @foreach ($groups as $group)
        
            <li><a href="{{ route('groups.show', ['id' => $group->id]) }}">{{ $group->name }}</a></li>

        @endforeach

    </ul>

    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection