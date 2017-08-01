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
                <a class="navbar-brand" href="<?php echo base_url('index.php/admin_control/produk')?>">Dashboard Peserta</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <h5>Hi, Admin</h5>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo base_url('index.php/dashboard/logout')?>">Logout</a>
                </li>
            </ul>
            <div class="navbar-default sidebar bg-geoPrimary" role="navigation">
                <!--<div class="col-md-2">-->
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a href="<?php echo base_url('index.php/dashboard')?>">Dashboard</a></li>
                            <li class="active"><a href="<?php echo base_url()."index.php/dashboard/profile"; ?>">Profile</a></li>
                            <li><a href="<?php echo base_url()."index.php/admin_control/order"; ?>">Order</a></li>
                            <li><a href="<?php echo base_url()."index.php/admin_control/testi"; ?>">Ujian Online</a></li>
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
                    <h3>Edit Profil Tim</h3>
                    <br><br>
                    <?php echo form_open_multipart('produk_control/update/'.$datapeserta['idTim']); ?>
                    <form method="POST">
                        <table class="table">
                            <tr>
                                <td>Nama Tim</td>
                                <td><input type="text" name="kodeProduk" value="<?php echo $datapeserta['kodeProduk']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td><input type="text" name="namaProduk" value="<?php echo $datapeserta['namaProduk']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nama Ketua</td>
                                <td><input type="date" name="tanggalBeli" value="<?php echo $dataproduk['tanggalBeli']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nama Anggota 1</td>
                                <td><input type="text" name="jumlah" value="<?php echo $dataproduk['jumlah']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nama Anggota 2</td>
                                <td><input type="text" name="ukuran" value="<?php echo $dataproduk['ukuran']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td><input type="text" name="berat" value="<?php echo $dataproduk['berat']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>ID Line</td>
                                <td><input type="text" name="jenis" value="<?php echo $dataproduk['jenis']; ?>"/></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="is_submit" value="1" /></td>
                                <td colspan="2"><input type="submit" name="submit" value="Upload" /></td>
                            </tr>
                        </table> 
                        <?php echo form_close(); ?>
                    </form>
                </div>    
            </div>
        </div>
    </body>
</html>