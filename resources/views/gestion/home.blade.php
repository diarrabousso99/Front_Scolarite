@extends('layouts.header')

@section('title', 'Dashboard')

@section('btn-toolbar')
    <a type="button" href="#" class="btn btn-outline-secondary">
        <span data-feather="user"></span>
        {{Auth::user()->prenom." ".Auth::user()->nom}}
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
