@extends('layouts.app')

@section('title', 'Blogger Details')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Group Page</div>

                    <div class="card-body">
                    <ul>   
                    Group Name: {{ $group->name }}
                    @if (count($blogUsers) > 0)
                    <p></p>
                        <p>Bloggers:
                        @foreach ($blogUsers as $blogUser)
                            <li>{{ $blogUser->name }}</li>
                        @endforeach
                        </p>
                    @else
                        <p>This group has no bloggers.</p>
                    @endif
                    </ul>

                    <p><a href="{{ route('groups.index') }}">Back</a></p>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection