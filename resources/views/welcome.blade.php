@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center px-4">
                        <h2>
                            {{ __('Liste des liens') }}
                        </h2>
                        <span>
                            <a class="btn fw-bold btn-lg btn-outline-primary" href="/submit">Ajouter un lien</a>
                        </span>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            <div class="row gap-4 d-flex justify-content-center">
                                @foreach ($liens as $lien)
                                    <div class="col-md-3 mt-5 border shadow-sm  py-3 ">
                                        <div class="box-part text-center">
                                            <i class="fa-brands fa-chrome text-info fa-3x my-2"></i>
                                            <div class="title">
                                                <h4>{{ $lien->titre }}</h4>
                                            </div>
                                            <div class="text">
                                                <span>{{ $lien->description }}</span>
                                            </div>
                                            <div>
                                                <a class="my-2 btn fw-bold btn-outline-warning" target="_blank"
                                                    href="{{ $lien->url }}"><i class="fa-solid fa-link"></i> Visit Link </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
