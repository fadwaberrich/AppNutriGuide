@extends('navbar')
@section ('nav')

<br><br><br><br><br><br><br><br><br><br><br><br>
<!--contact-form-section-->
<section class="ttm-row contact-form-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="pt-50">
                          
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row  spacing-12 box-shadow1 ttm-bgcolor-white mb-25">
                            <div class="col-md-12">
                                <h4>Reserver un rendez-vous</h4>
                                
                                <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" action="/addreservation" method="post">
                                    
                                @csrf
                                @if(session('message1'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('message1')}}
                                        </div>
                                        @endif
                                        <input type="hidden" value="{{$id}}" name="nutri_id"/>
                                    <div class="row"> 
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="jour" type="date" placeholder="date du rendez-vous" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="heure" type="time" placeholder="heure du rendez-vous" required="required"></span>
                                            </label>
                                        </div>
                                        
                                    </div>
                                    
                                    <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-5" value="Envoyer">
                                    <a href="/liste-reserv" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-5">Liste des réservations</a>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--contact-form-section end-->


@endsection