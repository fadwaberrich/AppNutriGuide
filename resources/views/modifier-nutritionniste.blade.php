@extends('theme')
@section ('page')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier nutritionniste</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <form action="/updatenutritionniste" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data4->id}}">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">   
                                    <div class="card-body">
                                    <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez le nom"
                                                    id="example-text-input" name="nom" value="{{$data4->nom}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Prénom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez le prénom"
                                                    id="example-text-input" name="prenom" value="{{$data4->prenom}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Age</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez l'age"
                                                    id="example-text-input" name="age" value="{{$data4->age}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Localisation</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez la localisation"
                                                    id="example-text-input" name="local" value="{{$data4->local}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Téléphone</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez le numéro de téléphone"
                                                    id="example-text-input" name="telephone" value="{{$data4->telephone}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Tapez l'email"
                                                    id="example-email-input" name="email" value="{{$data4->email}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Qalification professionnelles</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez la qalification professionnelles"
                                                    id="example-text-input" name="qualif" value="{{$data4->qualif}}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-file-input" class="col-md-2 col-form-label">Photo de nutritionniste</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file"
                                                    id="example-file-input" name="image" value="{{$data4->image}}">
                                            </div>
                                        </div>

                                        <span><button type="submit" class="btn btn-success">Modifier</button>
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