<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>The Aqiqah - Website Kambing Dan Aqiqah "On-Demand" Pertama Di Malaysia</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>

    <style>
        #return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            z-index: 99999999;
        }
        #return-to-top i {
            color: #fff;
            margin: 0;
            position: relative;
            left: 16px;
            top: 13px;
            font-size: 19px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        #return-to-top:hover {
            background: rgba(0, 0, 0, 0.9);
        }
        #return-to-top:hover i {
            color: #fff;
            top: 5px;
        }
        .btn-primary {
            background-color: #4f999b !important;
        }
        .nav-pills > li i {
            display: initial;
            padding: 8px;
        }
        @media (min-width: 580px) {
            .nav-pills>li {
                padding-right: 24px;
            }
        }
        .header-2 .page-header .card {
            margin-top: 24px;
            margin-bottom: 8px;
        }
        .picture img:hover {
            opacity: 0.5;
        }
        .modal-dialog {
            margin-top: 32px !important;
        }
    </style>
</head>

<body>

<!-- Navbar will come here -->

<!-- end navbar -->
<a href="javascript:void(0);" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<div class="wrapper">
    <div class="header-2">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/" style="padding: 0;"><img style="max-height: 100%;" src="{{asset('img\TheAqiqah_Logo_Reversed_HR-01.png')}}"></a>
                </div>

                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-center">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" onclick="goToByScroll('contact-us');">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="https://facebook.com/theaqiqah">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/theaqiqah">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="page-header header-filter" style="background-image: url({{asset('img/john-legrand-175771-unsplash.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h1 class="title"> Menempah Kambing Dengan Mudah</h1>
                        <h4>The Aqiqah memudahkan anda menempah dan membeli kambing untuk pelbagai tujuan.</h4>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row" style="background-color: rgba(0, 0, 0, 0.7);padding: 16px;">
                            <ul class="nav nav-pills nav-pills-rose" role="tablist">
                                <li class="active">
                                    <a href="#dashboard-1" role="tab" data-toggle="tab">
                                        <i class="material-icons hidden-xs">dashboard</i>
                                        Aqiqah
                                    </a>
                                </li>
                                <li>
                                    <a href="#schedule-1" role="tab" data-toggle="tab">
                                        <i class="material-icons hidden-xs">schedule</i>
                                        Livegrill
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <i class="material-icons hidden-xs">list</i>
                                        Livestock
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        <i class="material-icons hidden-xs">local_offer</i>
                                        Promo
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space card card-raised card-form-horizontal">
                                <div class="tab-pane card-content active" id="dashboard-1" style="padding-bottom: 0">
                                    <div class="row">
                                        <div class="col-md-4" style="margin-bottom: 16px;">
                                            <button class="btn btn-default btn-raised btn-round btn-block" data-toggle="modal" data-target="#myModal">
                                                <i class="material-icons">location_on</i>
                                                Pilih Kawasan
                                            </button>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 16px;">
                                            <button class="btn btn-default btn-raised btn-round btn-block" data-toggle="modal" data-target="#noticeModal">
                                                <i class="material-icons">list</i>
                                                Jenis Aqiqah
                                            </button>
                                        </div>
                                        <div class="col-md-4" style="margin-bottom: 16px;">
                                            <button class="btn btn-default btn-raised btn-round btn-block" data-toggle="modal" data-target="#beratModal">
                                                <i class="material-icons">library_books</i>
                                                Berat / Jenis Kambing
                                            </button>
                                        </div>
                                        <div class="col-md-6" style="margin-bottom: 16px;">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker" placeholder="Pilih Tarikh Penghantaran"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button class="btn btn-block btn-info">Tempah Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane card-content" id="schedule-1" style="padding-bottom: 0">
                                    <div class="row">
                                        <div class="col-md-3" style="margin-bottom: 16px;">
                                            <button class="btn btn-default btn-raised btn-round btn-block" data-toggle="modal" data-target="#myModal">
                                                <i class="material-icons">location_on</i>
                                                Pilih Kawasan
                                            </button>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 16px;">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker" placeholder="Berapa Ekor"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 16px;">
                                            <div class="form-group">
                                                <input type="text" class="form-control datepicker" placeholder="Pilih Tarikh Penghantaran"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button class="btn btn-info">Tempah Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blogs-1" id="blogs-1" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="title">Bagaimana theaqiqah Berfungsi</h2>

                    <br />
                    <div class="card card-plain card-blog" style="margin-bottom: 0;">
                        <div class="row"  style="display: flex;align-items: center;">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{asset('img/infographic_1.png')}}" style="box-shadow: none;"/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="card-title">
                                    <a>Dapatkan Harga Ideal Anda</a>
                                </h3>
                                <p class="card-description">
                                    Pilih Jenis Perkhidmatan, Saiz Kambing Dan Jenis Hidangan Untuk Mendapatkan Harga Yang Menepati Bajet Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card card-plain card-blog" style="margin-bottom: 0;">
                        <div class="row"  style="display: flex;align-items: center;">
                            <div class="col-md-7">
                                <h3 class="card-title">
                                    <a>Penyediaan Tempahan</a>
                                </h3>
                                <p class="card-description">
                                    Isi Nama Bayi, Tarikh, Masa Penghantaran Dan Pesanan Istimewa ( Jika Perlu ) Untuk Tujuan Penyediaan Penghantaran Dan Pelaksanaan Aqiqah.
                                </p>
                            </div>
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img img-raised" src="{{asset('img/infographic_2.png')}}" style="box-shadow: none;" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-plain card-blog" style="margin-bottom: 0;">
                        <div class="row"  style="display: flex;align-items: center;">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{asset('img/infographic_1.png')}}" style="box-shadow: none;"/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="card-title">
                                    <a>Bayar Secara Online</a>
                                </h3>
                                <p class="card-description">
                                    Bayar Secara Online Menggunakan Kad Kredit / Debit Atau Perbankan Internet FPX Tanpa Perlu Membuka Tab Baru.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
    <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
    <div class="main">
        <div class="container">
            <div class="features-1">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Kenapa theaqiqah</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Khidmat Mesra Pelanggan</h4>
                            <p>Di theaqiqah, Kami Akan Cuba Sedaya Upaya Untuk Memastikan Khidmat Pelanggan Kami Berada Ditahap Yang Paling Profesional Dan Berkualiti Kepada Semua Pelanggan Kami.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <h4 class="info-title">Harga Tetap</h4>
                            <p>Kami Di theaqiqah Akan Memastikan Harga Yang Tertera Adalah Harga Yang Sama Ketika Anda Mahu Membuat Bayaran. Harga Adalah Tetap Dan Muktamad Dan Tiada Caj Tersembunyi.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Jaminan Kami</h4>
                            <p>Tempahan Anda Akan Diterima Dan Dilaksanakan Tengan Sebaik Mungkin. Kambing Yang Akan Disembelih Juga Adalah Mengikut Syarat - Syarat Dan Adab - Adab Aqiqah.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">business</i>
                            </div>
                            <h4 class="info-title">Jaringan Pengusaha</h4>
                            <p>Dengan Lebih Dari 500 Penternak Dan Pengusaha Di Seluruh Malaysia, Kami Dapat Menghubungkan Pengusaha Dan Penternak Yang Sesuai Dan Berdekatan Dengan Keperluan Anda.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- here you can add your content -->

        </div>
    </div>
    <div class="testimonials-1" style="background-color: #eeeff3;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="title">Testimoni pelanggan</h2>
                    <h5 class="description">You need more information? Check what other persons are saying about theaqiqah. They are very happy with their purchase.</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="icon">
                            <i class="material-icons">format_quote</i>
                        </div>
                        <div class="card-content">
                            <h5 class="card-description">
                                Sangat mudah menggunakan theaqiqah. Order je terus dari rumah. Tempahan sampai tepat pada masa. Kambing panggang yang kami pesan pon sedap. Website TheAqiqah ni cantiklah...
                            </h5>
                        </div>

                        <div class="footer" style="padding-bottom: 32px;">
                            <h4 class="card-title">Muhammad Nasyriq Roslan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="icon">
                            <i class="material-icons">format_quote</i>
                        </div>
                        <div class="card-content">
                            <h5 class="card-description">
                                Menepati masa! Saya order pukul 2 petang, pukul 1 ejen panggang dah datang. Kambing golek pulak sampai licin tetamu makan.  Patutnya ambil 3 ekor. Mudah dan sedap!
                            </h5>
                        </div>

                        <div class="footer" style="padding-bottom: 32px;">
                            <h4 class="card-title">Zubir Shah Omar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="icon">
                            <i class="material-icons">format_quote</i>
                        </div>
                        <div class="card-content">
                            <h5 class="card-description">
                                Best lah theaqiqah ni, Dalam sibuk-sibuk jaga isteri yang Tengah pantang dengan baby, sambil belek-belek telefon pun boleh order. Bayar pun senang, tak payah nak online transfer, bayar terus kat website.
                            </h5>
                        </div>

                        <div class="footer" style="padding-bottom: 32px;">
                            <h4 class="card-title">Abdul Hafiz Al Fattah</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactus-1 section-image" style="background-image: url({{asset('img/city.jpg')}})" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-contact">
                        <form role="form" id="contact-form" method="post">
                            <div class="header header-raised header-primary text-center">
                                <h4 class="card-title">Contact Us</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">First name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Last name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Email address</label>
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes">
                                                I'm not a robot
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-line subscribe-line-image">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h3 class="title">Jadi rakan niage kami</h3>
                        <p class="description">
                            Tingkatkan penjualan kambing anda dan tingkatkan pendapat anda bersama kami.
                        </p>
                        <p class="description">
                            Sertai Theaqiqah, platform penjualan kambing terbesar di Malaysia, dan kembangkan perniagaan anda bersama-sama kami. Mari merevolusikan sektor penternakan dan perniagaan kambing bersama Theaqiqah.
                        </p>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Daftar sekarang</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-white">
        <div class="container">
            <a class="footer-brand" href="/">theaqiqah</a>

            <ul class="pull-center">
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" onclick="goToByScroll('contact-us');">
                        Contact Us
                    </a>
                </li>
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://instagram.com/theaqiqah" target="_blank" class="btn btn-just-icon btn-simple btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://facebook.com/theaqiqah" target="_blank" class="btn btn-just-icon btn-simple btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
            </ul>

        </div>
    </footer>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Pilih Kawasan</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control" id="address" placeholder="Enter your address" onFocus="geolocate()" type="text">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-simple">Hantar</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width: 800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h5 class="modal-title" id="myModalLabel">Jenis Aqiqah</h5>
            </div>
            <div class="modal-body">
                <div class="instruction">
                    <h5 class="text-center">Aqiqah Mentah</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="3"><strong>Aqiqah Mentah Carcass</strong></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><strong>Aqiqah Mentah Potong Bahagian</strong></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><strong>Aqiqah Mentah Potong Kecil</strong></a>
                        </div>
                    </div>
                </div>
                <div class="instruction">
                    <h5 class="text-center">Aqiqah Masak Selection</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#"><strong>Aqiqah Masak Kari</strong></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><strong>Aqiqah Masak Kurma</strong></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><strong>Aqiqah Masak Kuzi</strong></a>
                        </div>
                        <div class="col-md-3">
                           <a href="#"> <strong>Aqiqah Masak Sup</strong></a>
                        </div>
                    </div>
                </div>
                <div class="instruction">
                    <h5 class="text-center">Aqiqah Livegrill</h5>
                    <div class="row" style="margin: 0 auto;">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;">
                                <img src="{{asset('img/frozen-lamb_2048x.jpg')}}" alt="Thumbnail Image"  class="img-rounded img-responsive">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <p>- Sos Black Pepper</p>
                            <p>- Garlic bread</p>
                            <p>- Mushroom Soup</p>
                            <p>- Coleslaw</p>
                            <p>- Grill Set</p>
                            <p>- Buffet Table</p>
                            <p>- 2 Hero Grill Rangers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="beratModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width: 800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h5 class="modal-title" id="myModalLabel">Berat & Jenis Kambing</h5>
            </div>
            <div class="modal-body">
                <div class="instruction">
                    <h5><strong>Biri - Biri</strong></h5>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>10kg - 12 kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>11kg - 13kg Carcass</p>
                            <strong>Masak</strong>
                            <p>50pax - 60pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>13kg - 15kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>13kg - 15kg Carcass</p>
                            <strong>Masak</strong>
                            <p>70pax - 80pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>16kg - 18kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>16kg - 18kg Carcass</p>
                            <strong>Masak</strong>
                            <p>90pax - 100pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>19kg - 21kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>19kg - 21kg Carcass</p>
                            <strong>Masak</strong>
                            <p>100pax - 120pax</p>
                        </div>
                    </div>
                </div>
                <div class="instruction">
                    <h5><strong>Kambing Boer</strong></h5>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>10kg - 12 kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>11kg - 13kg Carcass</p>
                            <strong>Masak</strong>
                            <p>50pax - 60pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>13kg - 15kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>13kg - 15kg Carcass</p>
                            <strong>Masak</strong>
                            <p>70pax - 80pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>16kg - 18kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>16kg - 18kg Carcass</p>
                            <strong>Masak</strong>
                            <p>90pax - 100pax</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <button type="button" class="picture"  data-dismiss="modal" style="background-color: transparent;border: none;height: 95px;">
                                <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;">
                            </button>
                            <br>
                            <strong>Mentah</strong>
                            <p>19kg - 21kg Carcass</p>
                            <strong>Livegrill</strong>
                            <p>19kg - 21kg Carcass</p>
                            <strong>Masak</strong>
                            <p>100pax - 120pax</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material.min.js') }}"></script>

<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
<script src="{{ asset('js/moment.min.js') }}"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
<script src="{{ asset('js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="{{ asset('js/material-kit.js?v=1.2.1') }}" type="text/javascript"></script>

<script>
    function goToByScroll(id){
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top
        },'slow');
    }
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });

    materialKit.initFormExtendedDatetimepickers();
</script>
</html>
