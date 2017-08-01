<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Geosentric 2017</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url()."assets/vendor/bootstrap/";?>css/bootstrap.min.css ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/bootstrap/";?>css/bootstrap.css ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url()."assets/vendor/font-awesome/";?>css/font-awesome.min.css ?>" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="<?php echo base_url()."assets/vendor/";?>magnific-popup/magnific-popup.css ?>" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="<?php echo base_url()."assets/vendor/";?>css/creative.min.css ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/css/geosentric.min.css" ?> ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/";?>css/agency.min.css ?>" rel="stylesheet">
        <link href='<?php echo base_url('assets/vendor/css/sb-admin-2.css')?>' rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top bg-geoPrimary" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url('index.php/dashboard')?>">Dashboard Peserta</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <h5 class="textwhite">Hi, Tim <?php echo $datapeserta['namaTim'];?>!</h5>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo base_url('index.php/dashboard/logout')?>">Logout</a>
                </li>
            </ul>
            <div class="navbar-default sidebar bg-geoPrimary" role="navigation">
                <!--<div class="col-md-2">-->
                    <div class="sidebar-nav navbar-collapse">
                        <?php if($datapeserta['jenisLomba'] == 'Geolympic'){ ?>
                        <img class="img-circle img-responsive sr-icons" src="<?php echo base_url()."assets/img/";?>event0white.png ?>" alt="">
                        <?php } else { ?>
                        <img class="img-circle img-responsive sr-icons" src="<?php echo base_url()."assets/img/";?>event1white.png ?>" alt="">
                        <?php } ?>
                        <ul class="nav" id="side-menu">
                            <li class="active"><a href="<?php echo base_url('index.php/dashboard')?>">Dashboard</a></li>
                            <li><a href="<?php echo base_url()."index.php/dashboard/profile"; ?>">Profile</a></li>
                            <?php if($datapeserta['jenisLomba'] == 'Geolympic'){ ?>
                            <li><a href="<?php echo base_url()."index.php/admin_control/testi"; ?>">Ujian Online</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo base_url()."index.php/admin_control/testi"; ?>">Upload Abstrak</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <!--</div-->
                <div class="col-md-10"></div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <h1>Hola!</h1>
                    <h3>Selamat datang, tim <?php echo $datapeserta['namaTim'];?>!</h3>
                </div>
            </div>
        </div>
    </body>
</html>