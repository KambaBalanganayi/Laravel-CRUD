@extends('layouts.layout')
@section('title', 'Index')
@section('content')
        <!-- Section-->
        <section class="py-5">
            <h1 class="text-center">Liste des Étudiants</h1>
            <div class="text-center">
                <a href="{{route('app.create')}}" class=" btn btn-warning">Ajouter un étudiant</a>
            </div>
            
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($etudiants as $etudiant)
                    <div class="col mb-5">
                        <div class="card h-100 border border-3" >
                            <!-- Etudiant image-->
                            <img class="card-img-top" src="https://picsum.photos/450/300" alt="..." />
                            <h3 class="text-center"><a href="{{route('app.show', $etudiant->id)}}">{{ $etudiant->nom }}</a></h3>
                            <!-- Etudiant details-->
                            <div class="card-body p-4 " >
                                <div class="text-center">
                                    <p class="fw-bolder">{{ $etudiant->adresse}}</p>
                                    <p class="fw-bolder">{{ $etudiant->phone}}</p>
                                    <p class="fw-bolder">{{ $etudiant->email}}</p>
                                    <p class="fw-bolder">{{ $etudiant->dateNaissance}}</p>
                                    <p class="fw-bolder">{{ $etudiant->id_ville}}</p>
                                </div>
                            </div>
                            <!-- Etudiant actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-info mt-auto" href="{{route('app.edit', $etudiant->id)}}" >Update</a>
                                </div>
                                <hr>
                                <div class="text-center">
                                <form action="{{route('app.edit', $etudiant->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Effacer">
                                </form>
                                </div>

                            </div>
                            <div class="col-6 text-center">

                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$etudiants}}
                </div>
            </div>
        </section>
        @endsection
        
