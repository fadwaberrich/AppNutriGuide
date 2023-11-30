@extends('navbar')
@section ('nav')

        <div class="row">
                    <div class="wrap-team  team-slide ttm-boxes-spacing-10px owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="true">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow1">
                            <div class="featured-thumbnail"><!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/02.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Pilates Exercises" href="images/portfolio/01.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow1">
                            <div class="featured-thumbnail"><!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/01.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Athletic Leg Exercise" href="images/portfolio/01.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow1">
                            <div class="featured-thumbnail"><!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/03.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Diet Old People" href="images/portfolio/03.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow1">
                            <div class="featured-thumbnail"><!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/04.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Children Diet Management" href="images/portfolio/04.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow1">
                            <div class="featured-thumbnail"><!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/05.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Diabetes Drinks" href="images/portfolio/05.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->


                

        <div class="ttm-row customer-success-story-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <!-- row end -->


                
                <!-- row -->
                @foreach($data4 as $element)
                <div class="row ttm-sucessstories-box box-shadow2">
                    <div class="col-md-3">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper">
                            <div class="text-left">
                                <img class="img-fluid" src="{{$element->image}}" alt="">
                            </div>
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-md-9">
                        <!-- section title -->
                        <div class="section-title mb-10 clearfix">
                            <div class="title-header">
                                <h2 class="title">Nutritionniste</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="separator">
                            <div class="sep-line mt_5 mb-20"></div>
                        </div>
                        
                        
                            <p>Nom : {{$element->nom}}</p>
                            <p>Prenom : {{$element->prenom}}</p>
                            <p>Age : {{$element->age}}</p>
                            <p>Localisation : {{$element->local}}</p>
                            <p>Téléphone : {{$element->telephone}}</p>
                            <p>Email : {{$element->email}}</p>
                            <p>Qualification professionnelles : {{$element->qualif}}</p>

                        <a href="/details{{$element->id}}" class="btn btn-outline-primary">Reserver</a>
                    </div>
                </div>
                @endforeach
                <!-- row end -->
            


@endsection