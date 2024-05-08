@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center fs-3">
            <div class="col-md-8">
                <h1 class="text-center">Soumettre un lien</h1>

                <form action="/submit" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger fs-5" role="alert">
                            Veuillez corriger les erreurs suivantes
                        </div>
                    @endif

                    <div class="form-group mt-2">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre"
                            name="titre" placeholder="Titre" value="{{ old('titre') }}">

                        @error('titre')
                            <div class="invalid-feedback fs-5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="url">Url</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                            name="url" placeholder="ex: https://example.com" value="{{ old('url') }}">
                        @error('url')
                            <div class="invalid-feedback fs-5">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-2">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            placeholder="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback fs-5">{{ $message }}</div>
                        @enderror
                    </div>

                    <a href="/" class="mt-3 btn btn-lg btn-outline-secondary">Back</a>
                    <button type="submit" class="mt-3 btn btn-lg btn-primary">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
@endsection
