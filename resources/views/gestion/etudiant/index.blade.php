@extends('layouts.header')


@section('title', 'Etudiants')
@section('btn-toolbar')
    <a type="button" href="{{ route('etudiants.create') }}" class="btn btn-outline-secondary">
        <span data-feather="plus"></span>
        Etudiants
    </a>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table" id="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Prenom</th>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Telephone</th>
                    <th class="text-center">Role</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
