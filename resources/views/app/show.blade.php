@extends('layouts.layout')
@section('title', 'Show')
@section('content')

        <!-- Section-->
        <section class="py-5">
            <h1 class="text-center">Details d'un étudiant</h1>
            <a href="{{ route('app.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 border border-3" >
                            <!-- Etudiant image-->
                            <img class="card-img-top" src="https://picsum.photos/450/300" alt="..." />
                            <h3 class="text-center">{{ $etudiant->nom }}</h3>
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
                                <div class="text-center"><a class="btn btn-info mt-auto" href="{{route('app.edit', $etudiant->id)}}">Update</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>{{ $etudiant->nom}}</strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Êtes vous sur que vous voulez effacer l'étudiant : <strong>{{ $etudiant->nom}}</strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{route('app.edit', $etudiant->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Effacer">
            </form>
      </div>
    </div>
  </div>
</div>


@endsection
