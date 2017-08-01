<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Geosentric 2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/vendor/bootstrap/";?>css/bootstrap.min.css ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/vendor/font-awesome/";?>css/font-awesome.min.css ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()."assets/vendor/";?>magnific-popup/magnific-popup.css ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url()."assets/vendor/";?>css/creative.min.css ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/vendor/";?>css/geosentric.min.css ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/vendor/";?>css/agency.min.css ?>" rel="stylesheet">
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-default">
					<li>
                        <a class="page-scroll" href="<?php echo base_url().'index.php/dashboard'; ?>">Dashboard</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo base_url().'index.php/register'; ?>">Log Out</a>
                    </li>
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#events">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#jadwal">Jadwal</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#informasi">Informasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--
	<div class="slideshow">
        <div class="mySlides fade">
            <img src="<?php echo base_url()."assets/img/";?>home1.jpg ?>" alt="Header" class="img-responsive" style="width:100%" />
        </div>
        <div class="mySlides fade">
            <img src="<?php echo base_url()."assets/img/";?>home2.jpg ?>" alt="Header" class="img-responsive" style="width:100%" />
        </div>
        <div class="mySlides fade">
            <img src="<?php echo base_url()."assets/img/";?>home0.jpg ?>" alt="Header" class="img-responsive" style="width:100%" />
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div> -->
    <div class="slideshow">
        <img src="<?php echo base_url()."assets/img/";?>home1.jpg ?>" alt="Header" class="img-responsive" style="width:100%" />
    </div>

    <section id="about" class="bg-geoPrimary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About</h2>
                    <hr class="light">
                    <p class="text-faded">Geosentic adalah  ................</p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                    <p class="text-faded">Sejarah Geosentic ................</p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                    <p class="text-faded">Bla Bla Bla .... </p>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <img src="<?php echo base_url()."assets/img/";?>event0.png ?>" alt="Header" class="img-responsive img-circle sr-icons" />
                        <h3>GEOLYMPIC</h3>
                        <p class="text-muted">Penjelasan (?)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <img src="<?php echo base_url()."assets/img/";?>event1.png ?>" alt="Header" class="img-responsive img-circle sr-icons" />
                        <h3>GEOSAT</h3>
                       <p class="text-muted">Penjelasan (?)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <img src="<?php echo base_url()."assets/img/";?>event2.png ?>" alt="Header" class="img-responsive img-circle sr-icons" />
                        <h3>GRAVITASI</h3>
                        <p class="text-muted">Penjelasan (?)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jadwal" class="bg-geoPrimary">
       <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Jadwal</h2>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive sr-icons" src="<?php echo base_url()."assets/img/";?>01.jpg ?>" alt="">
                            </div>
                        </li>
                        <li class="timeline-inverted sr-icons" >
                            <div class="timeline-image">
                                <img class="img-circle img-responsive sr-icons" src="<?php echo base_url()."assets/img/";?>01.jpg ?>" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="informasi" class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Informasi</h2>
                    <br><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                       <img class="img-responsive" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>News 1</h4>
                        <p class="text-muted">Isi News</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <img class="img-responsive" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>News 2</h4>
                        <p class="text-muted">Isi News</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                       <img class="img-responsive" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>News 3</h4>
                        <p class="text-muted">Isi News</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-geoPrimary">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="section-heading">OA LINE : </p>
                        <p class="section-heading">Facebook : </p>
                        <p class="section-heading">Instagram : </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name " id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Question" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Footer</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Informasi Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>News</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                                <p>Isi News</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>News</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                                <p>Isi News</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>News</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="<?php echo base_url()."assets/img/";?>02.jpg ?>" alt="">
                                <p>Isi News</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- jQuery -->
    <script src="<?php echo base_url()."assets/vendor/";?>jquery/jquery.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/vendor/bootstrap/";?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()."assets/vendor/";?>scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()."assets/vendor/";?>magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()."assets/vendor/";?>js/jquery.slide.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()."assets/vendor/";?>js/creative.min.js"></script>
    <script src="<?php echo base_url()."assets/vendor/";?>js/agency.min.js"></script>
    <script type="text/javascript">
    /*
        var slideIndex = 1;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1} 
            x[slideIndex-1].style.display = "block"; 
            setTimeout(carousel, 10000);
        }
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1} 
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none"; 
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block"; 
          dots[slideIndex-1].className += " active";
        }
    */
    </script>
</body>