@extends('theme')
@section ('page')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste nutritionniste</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    @if(session('message0'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('message0')}}
                                        </div>
                                        @endif
                                        @if(session('message1'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('message1')}}
                                        </div>
                                        @endif
                                        @if(session('message2'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('message2')}}
                                        </div>
                                        @endif
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Age</th>
                                                <th>Localisation</th>
                                                <th>téléphone</th>
                                                <th>Email</th>
                                                <th>Qalification professionnelles</th>
                                                <th>photo</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            @foreach($data4 as $element)
                                            <tr>
                                                <td>{{$element->nom}}</td>
                                                <td>{{$element->prenom}}</td>
                                                <td>{{$element->age}}</td>
                                                <td>{{$element->local}}</td>
                                                <td>{{$element->telephone}}</td>
                                                <td>
                                                    <a href="mailto:{{$element->email}}">{{$element->email}}</a>
                                                </td>
                                                <td>{{$element->qualif}}</td>
                                                <td>{{$element->image}}</td>
                                                <td><a href="modifier-nutritionniste/{{$element->id}}" class="btn btn-success">Modifier</a>
                                                    <a href="suppnutritionniste/{{$element->id}}" class="btn btn-danger">supprimer</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                @endsection