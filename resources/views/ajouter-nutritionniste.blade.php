@extends('theme')
@section ('page')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Ajouter nutritionniste</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <form action="/addnutritionniste" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('nom') is-invalid @enderror" type="text" placeholder="Tapez le nom"
                                                    id="example-text-input" name="nom" value="{{old('nom')}}">
                                                    @error('nom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Prénom</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('prenom') is-invalid @enderror" type="text" placeholder="Tapez le prenom"
                                                    id="example-text-input" name="prenom" value="{{old('prenom')}}">
                                                    @error('prenom')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Age</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('age') is-invalid @enderror" type="text" placeholder="Tapez l'age"
                                                    id="example-text-input" name="age" value="{{old('age')}}">
                                                    @error('age')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Localisation</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('local') is-invalid @enderror" type="text" placeholder="Tapez la localisation"
                                                    id="example-text-input" name="local" value="{{old('local')}}">
                                                    @error('local')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Téléphone</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('telephone') is-invalid @enderror" type="text" placeholder="Tapez le numéro du téléphone"
                                                    id="example-text-input" name="telephone" value="{{old('telephone')}}">
                                                    @error('telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Tapez l'email"
                                                    id="example-email-input" name="email" value="{{old('email')}}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Qalification professionnelles</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('qualif') is-invalid @enderror" type="text" placeholder="Tapez la qualification professionelle"
                                                    id="example-text-input" name="qualif" value="{{old('qualif')}}">
                                                    @error('qualif')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label for="example-file-input" class="col-md-2 col-form-label">Image</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="example-file-input" 
                                                name="image" value="{{old('image')}}">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <span><button type="submit" class="btn btn-success">Ajouter</button>
                                            <button type="reset" class="btn btn-secondary">Annuler</button></span>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </form>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                @endsection