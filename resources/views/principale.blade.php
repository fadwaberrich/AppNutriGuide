<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>NutiGuide</title>

<!--

Breezed Template

https://templatemo.com/tm-543-breezed

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css">

    <link rel="stylesheet" href="asset/css/templatemo-breezed.css">

    <link rel="stylesheet" href="asset/css/owl-carousel.css">

    <link rel="stylesheet" href="asset/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="asset/images/slide-01.jpg" alt="">
                <div class="text-content">
                  <h3>Bienvenue dans NutriGuide</h3>
                  <h5>Accéder à votre compte</h5>
                  <a href="/login" class="main-stroked-button">connexion</a>
                  <a href="/register" class="main-filled-button">Register</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#1"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container" id="1">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; ce projet est realisé par Louati Nada & Charbaji Ayoub </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>SUIVEZ-NOUS</p></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="asset/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="asset/js/owl-carousel.js"></script>
    <script src="asset/js/scrollreveal.min.js"></script>
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="asset/js/imgfix.min.js"></script> 
    <script src="asset/js/slick.js"></script> 
    <script src="asset/js/lightbox.js"></script> 
    <script src="asset/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="asset/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>