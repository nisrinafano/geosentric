<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    </head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-default">
                        <li>
                            <a class="page-scroll active" href="<?php echo base_url().'index.php/Welcome/login'; ?>">Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo base_url().'index.php/Welcome/register'; ?>">Register</a>
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
        <section class="registerform">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 class="text-center">Registrasi</h2><br>
                        <?php echo form_open_multipart('peserta/create/'); ?>
                        <form method="POST">
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Nama Tim</label></h6>  
                                <div class="col-md-9">
                                    <input  name="namaTim" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Asal Sekolah / Universitas</label></h6>  
                                <div class="col-md-9">
                                    <input  name="sekolah" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Region</label></h6>
                                <div class="col-md-9">
                                    <select name="region" class="form-control">
                                        <option value="">---- Pilih Region ----</option>
                                        <option value="Jember">Jember</option>
                                        <option value="Banyuwangi">Banyuwangi</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Tuban">Tuban</option>
                                        <option value="Kediri">Kediri</option>
                                        <option value="Pamekasan">Pamekasan</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Mojokerto">Mojokerto</option>
                                        <option value="Gresik">Gresik</option>
                                    </select>    
                                </div>
                            </div><br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Nama Ketua</label></h6>  
                                <div class="col-md-9">
                                    <input  name="namaKetua" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Nama Anggota 1</label></h6>  
                                <div class="col-md-9">
                                    <input  name="namaAnggota1" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Nama Anggota 2</label></h6>  
                                <div class="col-md-9">
                                    <input  name="namaAnggota2" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">No. Hp</label></h6>  
                                <div class="col-md-9">
                                    <input  name="noHP" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>  
                                <div class="col-md-9">
                                    <input  name="email" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Password</label></h6>  
                                <div class="col-md-9">
                                    <input  name="password" type="password" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">ID Line</label></h6>  
                                <div class="col-md-9">
                                    <input  name="idLine" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Jenis Lomba</label></h6>  
                                <div class="col-md-9">
                                    <input  name="jenisLomba" type="text" class="form-control input-md" >
                                </div>
                            </div>
                            <br><br>
                            <h6>Upload berkas dengan format .rar / .zip</h6><br>
                            <div class="form-group">
                                <h6><label class="col-md-3 control-label" for="textinput">Upload Berkas</label></h6>  
                                <div class="col-md-9">
                                    <input  name="berkas" type="file" >
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <input type="hidden" name="is_submit" value="1" />
                                <input type="submit" name="submit" value="Upload" />
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                        
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
    </body>
</html>