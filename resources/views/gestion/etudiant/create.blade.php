@extends('layouts.header')

@section('title', 'Etudiants')
@section('btn-toolbar')
    <a type="button" href="{{ route('etudiants.index') }}" class="btn btn-outline-secondary">
        <span data-feather="list"></span>
        Liste Etudiants
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Nouvel Etudiant</div>
                    <div class="card-body">
                        @include('gestion.etudiant.partials.form')
                        {{-- @if (!isset($cours))
                            @include('gestion.etudiant.partials.form')
                        @else
                            @include('gestion.formations.partials.editForm')
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
