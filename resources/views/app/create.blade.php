@extends('layouts.layout')
@section('title', 'Create')
@section('content')

<!-- Section-->
<section class="py-5">
            <h1 class="text-center">Ajouter un étudiant</h1>
            <div class="text-center">
            <a href="{{ route('app.index')}}" class="btn btn-primary btn-sm text-center">Retourner</a>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 border border-3" >

                            <!-- Etudiant details-->
                            <form action="" method="POST">
                                @csrf
                                <div class="card-header">
                                    Formulaire
                                </div>
                                <div class="card-body">
                                    <!-- Nom -->
                                    <div class="control-group col-12">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom">
                                    </div>
                                    <div class="control-group col-12">
                                        <!-- Adresse -->
                                        <label for="adresse">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse">
                                    </div>
                                    <div class="control-group col-12">
                                        <!-- Phone -->
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                    </div>
                                    <div class="control-group col-12">
                                        <!-- Email -->
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="control-group col-12">
                                        <!-- Date de naissance -->
                                        <label for="dateNaissance">Date de naissance</label>
                                        <input type="text" class="form-control" name="dateNaissance" id="dateNaissance">
                                    </div>
                                    <div class="control-group col-12">
                                        <!-- Ville -->
                                        <label for="id_ville">Ville</label>
                                        <select name="id_ville" id="id_ville">
                                            @foreach($villes as $ville)
                                            <option value="{{$ville->id}}" name="id_ville">{{$ville->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <hr>
                                    <!-- Etudiant actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <input type="submit" value="Ajouter" class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
