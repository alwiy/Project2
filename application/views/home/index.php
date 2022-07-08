<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Faskes-Depok</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asets/css/bootstrap.css')?> "/>
    <link rel="stylesheet" href="<?php echo base_url('asets/css/fontawesome-all.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asets/css/swiper.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('asets/css/magnific-popup.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('asets/css/styles.css')?>"/>
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
        <!-- Image Logo -->
        <div>

        </div>
        <img width="170px" height="40px" src="https://daftarpuskesmas.depok.go.id/assets-view/img/logo.png"> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <div class="row">
                <div class="col-lg-11 col-md-11">
                    <div class="">
                        <marquee class="teks-jalan; mt-2">
                            <h6><span>"Melayani Pasien Dengan Lebih Baik"</span></h6>
                        </marquee>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('index.php/login1')?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url("index.php/tampil/faskes")?>">Faskes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url("index.php/tampil/jenis")?>">Jenis Faskes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url("index.php/tampil/kecamatan")?>">kecamatan Faskes</a>                
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content" style="padding-top: 120px; padding-bottom: 100px; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3><span class="turquoise">Layanan Untuk Mempermudah </span> Mendaftar Faskes kota Depok dimana Saja</h3>
                            <p class="p-large">Cukup daftar online dari rumah untuk periksa hari ini, besok atau lusa.</p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo base_url('index.php/register')?>">Daftar Sekarang</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo base_url('asets/images/header-teamwork.svg')?>" alt="alternative" >
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col" >
                <h2>Daftar Faskes Kota Depok</h2>
                    <!-- Card -->
                    <!-- <div class="circle"></div>
                    <div class="circle"></div> -->
                    <div class="card " style="width: 80rem; height: 30rem; margin: 15px;">
                        <img src="<?php echo base_url('asets/images/RSUD_Kota_Depok.jpg')?>" class="rounded"  style="width : 280px; height : 220px;" >
                        <div class="card-body">
                            <br>
                            <h4 class="card-title">RSUD Kota Depok</h4>   
                        <div align = "left">
                            <br>
                            <p >Jadwal Pendaftaran :</p> 
                             Buka 24 jam setiap hari
                            <p> </p>
                        </div>             
                            <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" >Detail</button>
                        </div>
                    </div> 
                    <!-- end of card -->
<!-- <style>
    .card {
        background: rgba(225, 225, 225, 0, 25);
        backdrop-filter: blur(4px);
        border-radius : 10px;
        border: 1px solid rgba(225, 225, 225, 0, 25);
        position : relative;
    }
    .circle {
        position : absolute;
        height : 6rem ;
        width : 6rem ;
        border-radius : 50%;
        background : deepskyblue;
        transform : translate(-8rem, 9rem);
    }
    .circle : nth-child(2){
        transform : translate(-8rem, -9rem);
        background : deeppink;
    }
</style> -->
                    <!-- Card -->
                    <div class="card" style="width: 80rem; height: 30rem; margin: 15px;">
                        <img src="<?php echo base_url('asets/images/klinik-pinky-house-1.jpg')?>" class="rounded"  style="width : 280px; height : 220px; margin-bottom : 20px">
                        <div class="card-body" >
                            <h4 class="card-title">Klinik Pinky House 1</h4>
                        <div align = "left">
                            <br>
                            <p >Jadwal Pendaftaran :</p> 
                            Senin - Minggu : 9.00 - 21.00
                            <p> </p>
                        </div> 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".example" style="margin-top : 23px">Detail</button>
                        </div>
                    </div>
                    <!-- end of card  -->

                    <!-- Card -->
                    <div class="card" style="width: 80rem; height: 30rem; margin: 15px;">
                        <img src="<?php echo base_url('asets/images/UPTD Puskesmas Abadi Jaya.jpg')?>" class="rounded" style="width : 280px; height : 220px; margin-bottom : px">
                        <div class="card-body">
                            <br>
                        <h4 class="card-title" >UPTD Abadi Jaya</h4>
                            <br>
                        <div align = "left">
                            <p >Jadwal Pendaftaran :</p> 
                            Senin - Sabtu : 7.30 - 9.30
                            <br>
                        </div>
                            <div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd" style="margin-top : 39px" >Detail</button>
                            </div>
                        </div>
                    </div> 
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card" style="width: 80rem; height: 30rem; margin: 15px;">
                        <img src="<?php echo base_url('asets/images/adelina.png')?>" class="rounded"  style="width : 280px; height : 220px; margin-bottom : 20px">
                        <div class="card-body">
                        <h4 class="card-title">Klinik Adelina</h4>
                        <div align = "left">
                            <br>
                            <p >Jadwal Pendaftaran :</p> 
                            Senin - Minggu : 8.00 - 21.00
                            <p> </p>
                        </div> 
                            <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".lg" style="margin-top : 7px">Detail</button>
                        </div>
                    </div> 
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card " style="width: 80rem; height: 30rem; margin: 15px; ">
                        <img src="<?php echo base_url('asets/images/tumbuh_sehat.jpg')?>" class="rounded"  style="width : 280px; height : 220px; margin-bottom : 20px" >
                        <div class="card-body">
                        <br/>
                            <h5 class="card-title">Apotik Tumbuh Sehat</h5>
                        <div align = "left">
                            <br>
                            <p >Jadwal Pendaftaran :</p> 
                            Senin - Minggu : 9.00 - 21.00
                            <p> </p>
                        </div> 
                            <div class="btn" style="margin-top : px">
                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target=".modul">Detail</button>
                            </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <div class="modal fade lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        
                                        <div style="width: 16rem; height: 22rem; padding-top: 12px;">
                                            <img src="<?php echo base_url('asets/images/adelina.png')?>" style="width : 320px; height : 250px;" >
                                            
                                            <p style="margin-top : 15px;"><b>Klinik umum : klinik Adelina
                                                <br/> Beji, Kota Depok, Jawa Barat
                                                <br>Melaayni PCR Swab test - Rp 275.000
                                            </b></p> 
                                        </div>
                                       
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Lokasi :</th>
                                                        <th class="table-light">Melayani :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">Jl. Raya Tanah Baru, Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat 16426</td>
                                                        <td class="table-light">PCR Swab Test</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive-sm">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Hasil Diterima </th>
                                                        <th class="table-light"> Nomor Telepon </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">24 Jam</td>
                                                        <td class="table-light">021-77218430</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p><b>Unit bisnis Laboratorium Klinik Kimia Farma dibuka sejak tahun 2003 dibawah PT. Kimia Farma (Persero) Tbk. 
                                        sebagai Healthcare company. PT Kimia Farma Diagnostika memiliki Visi Menjadi jaringan pelayanan laboratorium klinik 
                                        terbaik di Indonesia untuk mendukung kehidupan yang lebih sehat. Dengan Misi penyediaan layanan dan pengelolaan jaringan lab yang berkualitas, 
                                        Pengembangan bisnis jaringan layanan lab sesuai kebutuhan pasar, serta Sinergi dengan PT Kimia Farma Apotek.</b></p>
                                    </div>          
                                </div>    
                            </div>        
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade modul" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- Card -->
                                        <div style="width: 16rem; height: 22rem; padding-top: 12px;">
                                            <img src="<?php echo base_url('asets/images/tumbuh_sehat.jpg')?>" style="width : 320px; height : 250px;" >
                                            <p style="margin-top : 15px;"><b>Apotik Tumbuh Sehat
                                                <br/> Sukmajaya, Depok City, West Java 16412, Indonesia
                                            </b></p> 
                                        </div>
                                        <!-- end of card -->
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Lokasi :</th>
                                                        <th class="table-light">Keterangan Bisnis :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">Ruko Sukmajaya, Jl. Tole Iskandar No.12 A, Mekar Jaya, Sukmajaya, Depok City, West Java 16412, Indonesia</td>
                                                        <td class="table-light">Apotik Tumbuh Sehat terletak di Kota Depok, Jawa Barat. Perusahaan ini bekerja di industri berikut: Farmasi dan toko obat. </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive-sm">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Email</th>
                                                        <th class="table-light"> Nomor Telepon </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">apotik_tumbuh_sehat@yahoo.co.id</td>
                                                        <td class="table-light">(021) 7708101</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>             
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p><b>Saat ini RSUD Kota Depok berstatus sebagai rumah sakit kelas C dan mempunyai kapasitas tempat tidur berjumlah 140 buah serta
                                        memiliki 16 poliklinik spesialis yang terdiri dari penyakit dalam, jantung dan pembuluh darah , anak,psikiatri, kebidanan dan kandungan,
                                        bedah umum, orthopedi, urologi, saraf, kulit dan kelamin anestesi, mata, THT, paru, gigi,bedah mulut dan MCU. [3]
                                        Pada tahun 2012 tepatnya tanggal 1 Januari, RSUD Depok telah berubah status menjadi Badan Layanan Umum Daerah (BLUD). Hal ini sesuai dengan 
                                        amanat UU No. 44 tahun 2009 tentang rumah sakit, yang menyebutkan bahwa rumah sakit yang didirikan oleh pemerintah dan pemerintah daerah,
                                         pengelolaannya harus berbentuk Badan Layanan Umum (BLU) atau Badan Layanan Umum Daerah (BLUD).[4]</b></p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                    <form>
                                        <div class="form-group ">
                                            <h5>KOMENTAR</h5>
                                            <label for="nilai_rating" class="col-form-label">Rating</label> 
                                            <div class="col-12">
                                                <select id="nilai_rating" name="nilai_rating" class="custom-select">
                                                    <option value="1">1. jelek</option>
                                                    <option value="2">2. Kurang Bagus</option>
                                                    <option value="3">3. Biasa Aja</option>
                                                    <option value="4">4. Bagus</option>
                                                    <option value="5">5. Sangat Bagus</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div style="padding-bottom : 10px">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div> 
                                    </form>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                       
                                        <div style="width: 16rem; height: 22rem; padding-top: 12px;">
                                            <img src="<?php echo base_url('asets/images/UPTD Puskesmas Abadi Jaya.jpg')?>" style="width : 320px; height : 250px;" >
                                            
                                            <p style="margin-top : 15px;"><b>UPTD Puskesmas Abadi Jaya
                                                <br/>Depok II Timur, Kec. Sukmajaya Jawa Barat, Indonesia
                                            </b></p> 
                                        </div>
                                    
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Nama Lengkap :</th>
                                                        <th class="table-light">Hotline :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">HOTLINE PELAYANAN UMUM UPTD PUSKESMAS ABADIJAYA</td>
                                                        <td class="table-light">Jalan Kerinci Raya No 1 Kelurahan Abadijaya kecamatan Sukmajaya Kota Depok Jawa Barat </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive-sm">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Hotline</th>
                                                        <th class="table-light"> Nomor Telepon </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">+621389663255</td>
                                                        <td class="table-light">+621389663255</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>       
                                </div>
                                <div class="row">
                                    <div class="col-md-12 m-3">
                                       <p><b>Portal UPTD PUSKESMAS ABADIJAYA adalah suatu laoran puskesmas berbasis website yang tentunya dapat
                                        Mempermudah masyarakat dalam berbagai hal. Contohnya : Pendaftaran online , mengetahui Antrian Puskesmas
                                        dan mengecek jadwal layanan kedehatan Puskesmas
                                       </b></p>
                                    </div>
                                </div> 
                                <div class="col-12">
                                    <form>
                                        <div class="form-group ">
                                            <h5>KOMENTAR</h5>
                                            <label for="nilai_rating" class="col-form-label">Rating</label> 
                                            <div class="col-12">
                                                <select id="nilai_rating" name="nilai_rating" class="custom-select">
                                                    <option value="1">1. jelek</option>
                                                    <option value="2">2. Kurang Bagus</option>
                                                    <option value="3">3. Biasa Aja</option>
                                                    <option value="4">4. Bagus</option>
                                                    <option value="5">5. Sangat Bagus</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div> 
                                    </form>
                                    </div>            
                            </div>        
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade example" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        
                                        <div style="width: 16rem; height: 22rem; padding-top: 12px;">
                                            <img src="<?php echo base_url('asets/images/klinik-pinky-house-1.jpg')?>" style="width : 320px; height : 250px;" >
                                            
                                            <p style="margin-top : 15px;"><b>Klinik Gigi : klinik-pinky-house-1
                                                <br/> Pancoran Mas, Depok, Jawa Barat, Indonesia
                                            </b></p> 
                                        </div>
                                        
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Lokasi :</th>
                                                        <th class="table-light">Harga Konsultasi :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">Jl. Nusantara Raya No.189C - Pancoran Mas, Depok, Jawa Barat, Indonesia 16432</td>
                                                        <td class="table-light">Mulai dari IDR 50.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive-sm">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">drg. O. Rullyanti </th>
                                                        <th class="table-light"> Nomor Telepon </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">SENIN, KAMIS : 09:00-21:00, RABU : 09:00-17:00, MINGGU : 17:00-21:00</td>
                                                        <td class="table-light">+6282298972318</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>        
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p align="left"><b>Klinik Pinky House 1 merupakan sebuah Klinik Gigi yang berlokasi di Pancoran Mas, Depok, Jawa Barat, Indonesia. Saat ini, 
                                        dokter-dokter yang melakukan praktek di Klinik Pinky House 1 diantaranya adalah drg. O. Rullyanti, dan drg. Wulan Darmawan. 
                                        Adapun beberapa layanan kesehatan yang dapat Anda temukan di Klinik Pinky House 1 adalah Gigi.
                                        <br><br>Anda dapat mengetahui jadwal konsultasi dokter serta melakukan reservasi online di Klinik Pinky House 1 melalui kami</b></p>
                                        <p><b>Layanan yang diberikan dokter di fasilitas kesehatan ini terdiri atas:</b></p>
                                        <ul align="left">
                                            <li>Gigi Umum</li>
                                            <li>Konsultasi Gigi</li>
                                            <li>Perawatan Gigi</li>
                                            <li>Penambhan Gigi</li>
                                            <li>Pencabutan Gigi</li>
                                            <li>Pembersihan Karang Gigi</li>
                                            <li>Gigi Tiruan / Palsu</li>
                                            <li>Perawatan Saluran Akar</li>
                                            <li>Perawatan Syaraf Gigi</li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="col-12">
                                    <form>
                                        <div class="form-group ">
                                            <label for="nilai_rating" class="col-form-label">Rating</label> 
                                            <div class="col-12">
                                                <select id="nilai_rating" name="nilai_rating" class="custom-select">
                                                    <option value="1">1. jelek</option>
                                                    <option value="2">2. Kurang Bagus</option>
                                                    <option value="3">3. Biasa Aja</option>
                                                    <option value="4">4. Bagus</option>
                                                    <option value="5">5. Sangat Bagus</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div> 
                                    </form>
                                    </div>           
                            </div>        
                            </div>
                            </div>
                        </div>
                    </div> 

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div style="width: 16rem; height: 22rem; padding-top: 12px;">
                                            <img src="<?php echo base_url('asets/images/RSUD_Kota_Depok.jpg')?>" style="width : 320px; height : 250px;" >
                                            <p><b>Rumah Sakit : RSUD Kota Depok
                                                <br/>Rumah Sakit Tipe (C)
                                            </b></p> 
                                        </div>
                                      
                                    </div>
                                    <div class="col-6">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Lokasi :</th>
                                                        <th class="table-light">Koordinat :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">Jl. Raya Muchtar No. 99, Sawangan Lama, Sawangan, Depok, Jawa Barat, Indonesia</td>
                                                        <td class="table-light">6°24′13.71″S 106°45′29.31″E</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive-sm">
                                        <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-light">Nomor telepon :</th>
                                                        <th class="table-light">Pengelolaan :</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-light">(0251) 8602514</td>
                                                        <td class="table-light">Rumah sakit publik dikelola Dinas Kesehatan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="col-3">
                                    <form>
                                        <div class="form-group ">
                                            <label for="nilai_rating" class="col-form-label">Rating</label> 
                                            <div class="col-12">
                                                <select id="nilai_rating" name="nilai_rating" class="custom-select">
                                                    <option value="1">1. jelek</option>
                                                    <option value="2">2. Kurang Bagus</option>
                                                    <option value="3">3. Biasa Aja</option>
                                                    <option value="4">4. Bagus</option>
                                                    <option value="5">5. Sangat Bagus</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div> 
                                    </form>
                                    </div>                 -->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p><b>Saat ini RSUD Kota Depok berstatus sebagai rumah sakit kelas C dan mempunyai kapasitas tempat tidur berjumlah 140 buah serta
                                        memiliki 16 poliklinik spesialis yang terdiri dari penyakit dalam, jantung dan pembuluh darah , anak,psikiatri, kebidanan dan kandungan,
                                        bedah umum, orthopedi, urologi, saraf, kulit dan kelamin anestesi, mata, THT, paru, gigi,bedah mulut dan MCU. [3]
                                        Pada tahun 2012 tepatnya tanggal 1 Januari, RSUD Depok telah berubah status menjadi Badan Layanan Umum Daerah (BLUD). Hal ini sesuai dengan 
                                        amanat UU No. 44 tahun 2009 tentang rumah sakit, yang menyebutkan bahwa rumah sakit yang didirikan oleh pemerintah dan pemerintah daerah,
                                        pengelolaannya harus berbentuk Badan Layanan Umum (BLU) atau Badan Layanan Umum Daerah (BLUD).[4]</b></p>
                                        <section class="mf-section-2 collapsible-block" id="mf-section-2">
                                            <p>Setidaknya ada 34 dokter spesialis dan 25 dokter umum yang saat ini dimiliki oleh RSUD Kota Depok untuk melayani kebutuhan kesehatan pasien. Selain poliklinik spesialis dan rawat inap.
                                                <sup id="cite_ref-Pelayanan_RSUD_5-0" class="reference"><a href="#cite_note-Pelayanan_RSUD-5">[5]</a></sup></p>
                                                <p><b>Uutuk melayani masyarakat, RSUD Kota Depok mempunyai fasilitas rawat inap yang terdiri atas:</b>
                                            </p>
                                        <ul>
                                            <li>Ruang Perawatan Kelas VIP</li>
                                            <li>Ruang Perawatan Kelas I</li>
                                            <li>Ruang Perawatan Kelas II</li>
                                            <li>Ruang Perawatan kelas III</li>
                                            <li>ICU dan HCU Non Covid</li>
                                            <li>Ruang Isolasi Non Covid</li>
                                            <li>Ruang Isolasi Covid</li>
                                            <li>ICU dan NICU Covid</li>
                                            <li>Ruang Perinatologi</li>
                                            <li>Ruang NICU</li>
                                        </ul>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-12">
                                    <form>
                                        <div class="form-group ">
                                            <h5>KOMENTAR</h5>
                                            <label for="nilai_rating" class="col-form-label">Rating</label> 
                                            <div class="col-12">
                                                <select id="nilai_rating" name="nilai_rating" class="custom-select">
                                                    <option value="1">1. jelek</option>
                                                    <option value="2">2. Kurang Bagus</option>
                                                    <option value="3">3. Biasa Aja</option>
                                                    <option value="4">4. Bagus</option>
                                                    <option value="5">5. Sangat Bagus</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div style="padding-bottom : 10px">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send</button>
                                        </div> 
                                    </form>
                                    </div>
                                </div>      
                            </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->



    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Jangan ragu untuk menghubungi kami atau mengirimkan pesan formulir kontak</li>
                        <li><i class="fas fa-map-marker-alt"></i>Jl. Bambon Raya No. 7B Rt. 01/01 Beji Timur, Kec. Beji</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:0217757033">0217757033</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:uptdpuskemasbeji@gmail.com">uptdpuskemasbeji@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1383077486985!2d106.81947971427032!3d-6.376140564143356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec03eb2d781f%3A0xcb35cacf2565b957!2sUPTD%20Puskesmas%20Beji!5e0!3m2!1sid!2sid!4v1655969665007!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                   
                <?php echo form_open("komentar/save") ?>
                  <h3 align="center">Form Komentar</h3>
                    <div class="form-group row">
                        <label for="select" class="col-4 col-form-label">Rating</label> 
                        <div class="col-8">
                        <select id="select" name="select" class="custom-select">
                            <option value="jelek">1. Jelek</option>
                            <option value="biasa  aja">2. Biasa aja</option>
                            <option value="kurang bagus">3. Kurang Bagus</option>
                            <option value="bagus">4. Bagus</option>
                            <option value="bagus">5. sangat Bagus</option>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="isi" class="col-4 col-form-label">Pesan</label> 
                        <div class="col-8">
                        <textarea id="isi" name="isi" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
                    <!-- end of contact form -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Scripts -->
    <script src="<?php echo base_url('asets/js/jquery.min.js')?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url('asets/js/popper.min.js')?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url('asets/js/bootstrap.min.js')?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url('asets/js/jquery.easing.min.js')?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url('asets/js/swiper.min.js')?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url('asets/js/jquery.magnific-popup.js')?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url('asets/js/validator.min.js')?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url('asets/js/scripts.js')?>"></script> <!-- Custom scripts -->
    <script id="dsq-count-scr" src="//alwi-2.disqus.com/count.js" async></script>

</body>
</html>