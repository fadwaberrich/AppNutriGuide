@extends('theme')
@section ('page')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Ajouter admin</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <form action="/addadmin" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Tapez le nom"
                                                    id="example-text-input" name="name" value="{{old('name')}}">
                                                    @error('name')
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
                                            <label for="example-password-input" class="col-md-2 col-form-label">Mot de passe</label>
                                            <div class="col-md-10">
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Tapez le mot de passe"
                                                    id="example-password-input" name="password" value="{{old('password')}}">
                                                    @error('password')
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
