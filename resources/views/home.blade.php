@extends('layouts.app')

@section('content')
<div class="container container-blue-archive">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-blue-archive">
                <div class="card-header card-header-blue-archive">
                    {{ __('Dashboard') }}
                </div>

                <div class="card-body card-body-blue-archive">
                    @if (session('status'))
                        <div class="alert alert-blue-archive" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-blue-archive">{{ __('You are logged in!') }}</p>
                    <a href="{{ url('/todo') }}">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
