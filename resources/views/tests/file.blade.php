@extends('layouts.app')

@section('content')
    <section class="col-6 m-auto mt-5">
        <form enctype="multipart/form-data" action="/file" method="post">
            <div>
                <label class="form-label" for="file">Photo de l'étudiant</label>
                <input class="form-control" type="file" name="file" id="file">
            </div>
            <button class="btn btn-success mt-5">Uploader</button>
        </form>
    </section>
@endsection
