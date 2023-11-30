@extends('theme')
@section ('page')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Modifier admin</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <form action="/updateadmin" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Tapez le nom"
                                                    id="example-text-input" name="name" value="{{$data->name}}">
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Tapez l' email"
                                                    id="example-email-input" name="email" value="{{$data->email}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-password-input" class="col-md-2 col-form-label">Mot de passe</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" placeholder="Tapez le mot de passe"
                                                    id="example-password-input" name="password" value="{{$data->password}}">
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