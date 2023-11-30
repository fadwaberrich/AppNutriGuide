@extends('navbar')
@section ('nav')


        <!-- ttm-topbar-wrapper -->
        <div class="ttm-topbar-wrapper ttm-bgcolor-black ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">     
                        <div class="topbar-right text-right">
                            <span class="ttm-fbar-btn ttm-fbar-btn-cposition-right">
                                <a href="#" class="ttm-fbar-btn-link">
                                    <span class="ttm-fbar-open-icon"><i class="ti ti-menu"></i></span>
                                    <span class="ttm-fbar-close-icon"><i class="ti ti-close"></i></span>
                                
                                </a>
                            </span>
                        </div>
                        <div class="ttm-fbar ttm-fbar-right">
                            <div class="ttm-fbar-inner">
                                <div class="ttm-fbar-box-w ttm-bg ttm-bgimage-yes ttm-bgcolor-skincolor ttm-textcolor-white">
                                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="ttm-fbar-content-wrapper">
                                        <div class="ttm-fbar-content">
                                            <div class="ttm-fbar-box">
                                                <div class="floatingbar-widget-top">
                                                   
                                                    <div class="ttm-fbar-widget ttm-fbar-widget-odd">
                                                        <h3 class="widget-title">Rappel du rendez-vous:</h3>
                                                        
                                                            <div class="ttm-pricelistbox-wrapper ">
                                                                <div class="ttm-pricelist-block-wrapper">
                                                                    <ul class="ttm-pricelist-block mt-10">
                                                                        <li>Date : {{$last_reservation->jour}}<p class="service-price"></p></li>
                                                                    </ul>
                                                                    <ul class="ttm-pricelist-block mt-10">
                                                                        <li>Heure : {{$last_reservation->heure}}<p class="service-price"></p></li>
                                                                    </ul>
                                                                    <ul class="ttm-pricelist-block mt-10">
                                                                        <li>Localisation : {{$last_reservation->nutritionniste->local}}<p class="service-price"></p></li>
                                                                    </ul>
                                                                    <ul class="ttm-pricelist-block mt-10">
                                                                        <li>Nutritionniste Mr/Mme : {{$last_reservation->nutritionniste->nom}}  {{$last_reservation->nutritionniste->prenom}}<p class="service-price"></p></li>
                                                                    </ul>
                                                                    <br>
                                                                    <h3 class="widget-title">Soyez les bienvenues</h3>
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="ttm-fbar-widget ttm-fbar-widget-even">
                                                        <div class="featured-icon-box left-icon icon-align-top">
                                                            <div class="featured-icon">
                                                                <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                            </div>
                                                            <div class="featured-content">
                                                                <div class="featured-title">
                                                                    <h5>+126 22 555 888</h5>
                                                                </div>
                                                                <div class="featured-desc">
                                                                    <p>Avez vous des quesions? Appeler nous maintenant!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="ttm-fbar-close">
                                            <span class="ttm-fbar-close-icon">
                                                <i class="ti ti-close"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ttm-topbar-wrapper end -->


        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        
            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                
                <ul>
                    <li data-index="rs-13" data-transition="slotslide-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="images/slides/slider-mainbg-001.jpg" alt="" title="mainslider-bg003" width="1920" height="760" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ttm-bgcolor-skincolor" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','-240','-240']" data-y="['top','top','top','top']" data-voffset="['182','182','179','179']"
                            
                        data-width="40"
                        data-height="['2','2','1','1']"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
                        data-type="shape"
                        data-responsive_offset="on"
                        data-frames='[{"delay":130,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        ></div>

                        <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="['left','left','center','center']" data-hoffset="['107','107','0','0']" data-y="['top','top','middle','middle']" data-voffset="['173','173','-135','-112']"
                        
                        data-fontsize="['16','16','15','14']"
                        data-lineheight="['20','20','15','14']"
                        data-fontweight="['700','700','700','700']"
                        data-color="['rgb(157, 202, 0)','rgb(157, 202, 0)','rgb(157, 202, 0)','rgb(157, 202, 0)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":220,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        >Bienvenue dans NutriGuide
                        </div>

                        <div class="tp-caption main-font tp-resizeme" id="slide-1-layer-3" data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" data-y="['top','top','middle','middle']" data-voffset="['210','210','-78','-69']"
                           
                        data-fontsize="['60','60','55','40']"
                        data-lineheight="['75','75','68','50']"
                        data-fontweight="['400','400','400','300']"
                        data-color="['rgb(38,45,51)','rgb(38,45,51)','rgb(27,37,44)','rgb(27,37,44)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":340,"speed":800,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        >“La santé, c'est un esprit sain</div>

                        <div class="tp-caption main-font" id="slide-1-layer-4" data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']" data-y="['top','top','middle','middle']" data-voffset="['292','292','-7','-10']"
                            
                        data-fontsize="['60','60','55','40']"
                        data-lineheight="['75','75','68','50']"
                        data-fontweight="['400','400','400','300']"
                        data-color="['rgb(38,45,51)','rgb(38,45,51)','rgb(27,37,44)','rgb(27,37,44)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":520,"speed":800,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        >dans un<strong class="ttm-textcolor-skincolor"> corps</strong> sain.”
                        </div>

                        <div class="tp-caption tp-shape tp-shapewrapper ttm-bgcolor-skincolor tp-resizeme" id="slide-1-layer-5" data-x="['left','left','left','left']" data-hoffset="['292','292','319','189']" data-y="['top','top','top','top']" data-voffset="['358','358','244','187']"
                        data-width="['150','150','140','100']"
                        data-height="3"
                        data-whitespace="nowrap"
                        data-type="shape"
                        data-responsive_offset="on"
                        data-frames='[{"delay":990,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        ></div>

                        <div class="tp-caption tp-resizeme" id="slide-1-layer-6" data-x="['left','left','center','center']" data-hoffset="['50','50','-759','-479']" data-y="['top','top','middle','middle']" data-voffset="['379','379','10','-2']"
                        
                        data-fontsize="['18','18','15','12']"
                        data-lineheight="['29','29','24','20']"
                        data-fontweight="['400','400','400','300']"
                        data-color="['rgb(111,120,126)','rgb(111,120,126)','rgb(114,118,120)','rgb(114,118,120)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":870,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        >Une bonne alimentation est la base d’une bonne santé et un élément clé<br>du développement humain d’avant la naissance jusqu’à la fin de la vie.
                        </div>

                        <a class="tp-caption button black-button tp-resizeme" href="/apropos" target="_self" id="slide-1-layer-7" data-x="['left','left','center','center']" data-hoffset="['48','48','0','0']" data-y="['top','top','middle','middle']" data-voffset="['485','485','117','106']"
                        
                        data-fontsize="['15','15','13','13']"
                        data-lineheight="['15','15','13','13']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-actions=''
                        data-responsive_offset="on"
                        data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[15,15,12,12]"
                        data-paddingright="[35,35,20,20]"
                        data-paddingbottom="[15,15,12,12]"
                        data-paddingleft="[35,35,20,20]"
                        >Voir plus</a>
                        
                        <a class="tp-caption button skin-button tp-resizeme" href="/contact" target="_self" id="slide-1-layer-8" data-x="['left','left','center','center']" data-hoffset="['213','213','0','0']" data-y="['top','top','middle','middle']" data-voffset="['485','485','64','53']"
                            
                        data-fontsize="['16','16','13','13']"
                        data-lineheight="['16','16','13','13']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-actions=''
                        data-responsive_offset="on"
                        data-frames='[{"delay":1110,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[15,15,12,12]"
                        data-paddingright="[35,35,30,30]"
                        data-paddingbottom="[15,15,12,12]"
                        data-paddingleft="[35,35,30,30]"
                        >Contactez nous </a>
                    </li>     
                 </div>
            </div>
        <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!--row-top-section-->
        <section class="ttm-row row-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt_60 mlr-15 res-991-m-0 mb-20">
                            <div class="row row-equal-height ttm-bgcolor-white box-shadow1">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style1 top-icon text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <span class="flaticon flaticon-care"></span>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Les mieux notés</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Avec autant de choix de conseils alimentaires et diététiques, nous sommes la principale cause de services à domicile.</p><br>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline mb-10 ttm-btn-underline" href="#">Voir Plus</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 box-shadow1">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style1 top-icon text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <span class="flaticon flaticon-healthy"></span>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5> Meilleure qualité</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Ne perdez pas, faites de l'exercice qui concerne notre corps humain ! Nous fournissons les meilleurs services de qualité pour votre corps.</p>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline mb-10 ttm-btn-underline" href="#">Voir plus</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box style1 top-icon text-center">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <span class="flaticon flaticon-healthy-nutrition"></span>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Mange frais</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>La qualité compte ! quand on se sent bien on est plus heureux, quand on est plus heureux et on est plus productif.</p><br>
                                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline mb-10 ttm-btn-underline" href="#">Voir plus</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- row-top-section end -->

       

        <!-- working-section -->
        <section class="ttm-row working-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title -->
                        <div class="section-title text-center clearfix">
                            <div class="title-header">
                                <h5>Nos offres</h5>
                                <h2 class="title">Comment ça fonctionne?</h2>
                            </div>
                            <div class="title-desc">Si vous recherchez un environnement collaboratif au rythme rapide, vous profiterez d'un environnement innovant et collaboratif.&amp;culture axée sur les résultats et guidée par les faits.</div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="blog-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-service ttm-box-view-top-image">
                            <div class="featured-thumbnail">
                                <img width="720" height="500" class="img-fluid" src="images/blog/06.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                        <i class="flaticon flaticon-fruits"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="personalized-nutrition.html" tabindex="-1">Alimentation personnalisée</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Nos aliments nutritionnels personnalisés sont faits pour vous,&amp;les suppléments doivent être pris avec un régime alimentaire.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline ttm-btn-underline pt-3" href="personalized-nutrition.html">Voir plus</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-service ttm-box-view-top-image">
                            <div class="featured-thumbnail">
                                <img width="720" height="500" class="img-fluid" src="images/blog/07.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                        <i class="flaticon flaticon-reduce"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="weight-loss-programs.html" tabindex="-1">Programmes de perte de poids</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Le processus de perte de poids ne signifie pas s'efforcer de corps, mais rendre le processus d'alimentation sain et totalement exotique.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline ttm-btn-underline pt-3" href="weight-loss-programs.html">Voir plus</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-service ttm-box-view-top-image">
                            <div class="featured-thumbnail">
                                <img width="720" height="500" class="img-fluid" src="images/blog/08.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                        <i class="flaticon flaticon-meditation"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title">
                                    <h5><a href="individual-coaching.html" tabindex="-1">Coaching Individuel</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Le Personal Training consiste en l’accompagnement sur mesure d’une personne dans une démarche de changement physique et mental, à un moment clé de sa vie, à partir des besoins qu’elle exprime.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline ttm-btn-underline pt-3" href="individual-coaching.html">Voir plus</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- working-section end -->

        <!-- services-section -->
        <section class="ttm-row services-section bg-layer bg-layer-equal-height break-991-colum res-991-mt-0  mt_60 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <!-- col-img-img-two -->
                        <div class="col-bg-img-two ttm-col-bgimage-yes ttm-bg ttm-left-span">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            </div>
                            <div class="layer-content"></div>
                        </div><!-- col-img-bg-img-two end-->
                        <img src="images/bg-image/col-bgimage-2.jpg" class="ttm-equal-height-image" alt="bg-image">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- col-bg-img-three -->
                        <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes  ttm-right-span ttm-bgcolor-skincolor spacing-1 z-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-bg-layer-inner"></div>
                            </div><!-- col-bg-img-three -->
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>Nos activités</h5>
                                        <h2 class="title">Pourquoi choisissez-nous ?</h2>
                                    </div>
                                    <div class="title-desc">Nous sélectionnons les meilleurs nutritionnistes et experts en santé de tout le pays pour nous assurer que vous obtenez la personne la plus personnalisée en matière de santé.</div>
                                </div><!-- section title end -->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style3 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="flaticon flaticon-care-1"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Consulter un nutritionniste</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Nous mettons à votre disposition des nutritionnistes qualifiés et vous pouvez réserver un rendez-vous facilement.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="separator">
                                    <div class="sep-line mt_5 mb-35"></div>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style3 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                            <i class="flaticon flaticon-healthy-lifestyle-logo"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Stratégies nutritionnelles et sport</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Nos stratégies de nutrition vous permettent de connaître le meilleur régime alimentaire qui s'adapte avec vous en outre, nous avons le service de participer aux séances de sport.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div><!-- about-content end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--services-section end-->
        <br><br>
    <!--footer start-->
    <footer class="footer widget-footer ttm-bgcolor-black clearfix">
      
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="images/logo-app.png">
                            </div>
                            <p>Nous offrons les meilleurs soins nutritifs. Nous sommes fiers de notre riche histoire dans le domaine des services de nutrition.</p>
                            <div class="separator pt-5">
                                <div class="sep-line mb-30"></div>
                            </div>
                            <ul class="widget-contact">
                                <li><a href="mailto:NutriGuide@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i>NutriGuide@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i>(+216) 55 888 555</li>
                            </ul>
                            <div class="social-icons social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">liens rapides</h3>
                            <ul id="menu-footer-services">
                                <li><a href="/accueil">Accueil</a></li>
                                <li><a href="/apropos">A propos</a></li>
                                <li><a href="/nutritionniste">Nutritionnistes</a></li>
                                <li><a href="/liste-reserv">Liste des réservations</a></li>
                                <li><a href="/repas">Les repas</a></li>
                                <li><a href="/sports">Sports</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                           <h3 class="widget-title">Publications récentes</h3>
                           <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="single-blog.html"><img width="150" height="150" src="images/blog/post-1.jpg" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>20 avril 2022</span>
                                    <a href="single-blog.html" class="clearfix">Combien faut-il pour manger par jour?</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img width="150" height="150" src="images/blog/post-2.jpg" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>01 août 2022</span>
                                    <a href="single-blog.html" class="clearfix">Conseils pour rester en bonne santé</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img width="150" height="150" src="images/blog/post-3.jpg" alt="post-img"></a>
                                    <span class="post-date"><i class="fa fa-calendar"></i>13 Octobre 2022</span>
                                    <a href="single-blog.html" class="clearfix">S'entraîner et faire de l'activité physique.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                           <div class="ttm-newsletter-box">
                               <h3 class="widget-title">Infolettre</h3>
                               <p>Inscrivez-vous pour recevoir nos offres exclusives et rester à jour.</p>
                               <form class="mc4wp-form mc4wp-form-24" method="post" data-id="24" data-name="Newsletter Form">
                                    <div class="mc4wp-form-fields">
                                        <div class="mailchimp-inputbox">
                                            <input type="email" name="EMAIL" placeholder="Votre adresse e-mail" required="">
                                            <input type="submit" value="S'abonner">
                                        </div>
                                    </div>
                                    <div class="mc4wp-response"></div>
                                </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->
@endsection