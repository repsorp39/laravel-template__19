@extends('layouts.app')

@section('content')
    <section class="col col-4 m-auto mt-2">
        <h2>Modifier étudiant</h2>
        <form class="border p-4" action="/users" method="POST">
            @method("PUT")
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="{{ $user->email }}" required type="email" class="form-control" id="email" name="email"
                    placeholder="name@example.com">

                @error('email')
                    <p class="size-2 mt-2 alert alert-danger"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input value="{{ $user->nom }}" required type="nom" class="form-control" name="nom" id="nom" placeholder="John">

                @error('nom')
                    <p class="size-2 mt-2 alert alert-danger"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input value="{{ $user->prenom }}" required name="prenom" type="prenom" class="form-control" id="prenom" placeholder="Doe">

                @error('prenom')
                    <p class="size-2 mt-2 alert alert-danger"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select required class="form-select" name="sexe" id="sexe">
                    <option {{ $user->sexe == "M" ? "selected":"" }} value="M">Homme</option>
                    <option {{ $user->sexe == "F" ? "selected":"" }} value="F">Femme</option>
                </select>
                @error('sexe')
                    <p class="size-2 mt-2 alert alert-danger"> {{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date_naissance" class="form-label">Date de naissance</label>
                <input value="{{ $user->date_naissance}}" name="date_naissance" required type="date" class="form-select">
                @error('date_naissance')
                    <p class="size-2 mt-2 alert alert-danger"> {{ $message }}</p>
                @enderror
            </div>
            <input type="hidden" name="user_id" value="{{ $user->id }}" >
            <button class="btn btn-success">Modifier</button>
        </form>
    </section>
@endsection
