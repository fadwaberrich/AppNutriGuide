@extends('navbar')
@section ('nav')

<!-- page-title -->
<div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading ttm-textcolor-white">
                                <h1 class="title">Contact</h1>
                            </div><!-- /.page-title-captions -->
                            
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->



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
                                <h4>Envoyez votre message</h4>
                                <p>N'hésitez pas à nous envoyer un message, notre équipe vous aidera 24h/24 et 7j/7.</p>
                                <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" action="/addcontact" method="post">
                                @csrf
                                @if(session('message1'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('message1')}}
                                        </div>
                                        @endif
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="nom" type="text"  placeholder="Nom" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="prenom" type="text" placeholder="Prénom" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="email" type="email" placeholder="Email" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label>
                                                <span class="text-input"><input name="telephone" type="text" placeholder="téléphone" required="required"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <label>
                                        <span class="text-input"><textarea name="sujet" rows="5" cols="40" placeholder="Ecrire ton probléme" required="required"></textarea></span>
                                    </label>
                                    <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-5" value="Envoyer">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--contact-form-section end-->








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