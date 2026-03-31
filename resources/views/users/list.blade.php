@extends('layouts.app')

@section('content')
    <section class="col col-6 m-auto">
        <h1 class="mt-5">Liste des étudiants</h1>
        <a class="btn btn-secondary" href="/users-form">Ajouter</a>
        <table class="table table-bordered table-striped mt-2">
            <thead>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Sexe</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->nom }} </td>
                        <td> {{ $user->prenom }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->sexe }} </td>
                        <td>
                            <a class="btn btn-danger" href="{{ "/users/delete/$user->id" }}">Supprimer</a>
                            <a class="btn btn-success" href="{{ "/users/$user->id" }}">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>
@endsection
