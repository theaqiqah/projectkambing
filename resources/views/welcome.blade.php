<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://theaqiqah.com/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>TheAqiqah - Website Kambing Dan Aqiqah "On-Demand" Pertama Di Malaysia – theaqiqah.com</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
        #locationField, #controls {
            position: relative;
            width: 480px;
        }
        #autocomplete {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 99%;
        }
        .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
        }
        #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
        }
        #address td {
            font-size: 10pt;
        }
        .field {
            width: 99%;
        }
        .slimField {
            width: 80px;
        }
        .wideField {
            width: 200px;
        }
        #locationField {
            height: 20px;
            margin-bottom: 2px;
        }
        .pac-container {
            z-index: 1051 !important;
        }
    </style>
    <style>
        .navbar-light {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
        }
        .jumbotron {
            background-image: url('img/john-legrand-175771-unsplash.jpg');
            -webkit-background-size: cover;
            background-size: cover;
            margin-top: 60px;
            height: 738px;
            max-height: 100vh;
        }
        p {
            color: #484848;
        }
        @media (min-width: 768px) {
            figure {
                padding: 32px 32px 32px 0;
            }
        }
        .navbar-80 {
            height: 70px;
            border-bottom: 0;
            -webkit-transition: height .5s ease 0s;
            transition: height .5s ease 0s;
        }
        .navbar-80 img {
            height: 40px;
            -webkit-transition: height .5s ease 0s;
            transition: height .5s ease 0s;
        }
        .navbar-80.navbar-60 {
            height: 60px;
            -webkit-transition: height .5s ease 0s;
            transition: height .5s ease 0s;
        }
        .navbar-80.navbar-60 img {
            height: 30px;
            -webkit-transition: height .5s ease 0s;
            transition: height .5s ease 0s;
        }
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
        }
        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
        }
        .carousel.slide {
            padding: 0 8px;
        }
        .carousel-indicators .active {
            background-color: #000;
        }
        .carousel-indicators {
            margin-bottom: -32px;
        }
        .card-custom:hover {
            cursor: pointer;
            box-shadow: 0 0 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        .btn-white {
            background: #ffffff;
            color: #333333;
        }
        .btn-white:hover{
            background: #ffffff;
            color: #333333;
            box-shadow: 0 0 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        .footer-left {
            text-align: left;
        }
        .item-right {
            float: right;
        }
        .item-left {
            float: left;
        }
        @media (max-width: 768px) {
            .footer-left, .footer-left p {
                text-align: center !important;
            }
            .item-right, .item-left {
                float: none;
            }
        }
        @media (min-width: 768px) {
            footer {
                background: linear-gradient(to right, #ffffff, #ffffff, #ffffff, #4f999b, #4f999b);
            }
            .carousel.slide {
                padding: 0 80px;
            }
            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
                margin-right: 40px;
            }
            .carousel-control-next-icon {
                margin-left: 40px;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='#000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
            }
        }
        #return-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.7);
            width: 50px;
            height: 50px;
            display: block;
            text-decoration: none;
            -webkit-border-radius: 35px;
            -moz-border-radius: 35px;
            border-radius: 35px;
            display: none;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
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
            -ms-transition: all 0.3s ease;
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
        .btn, .nav-pills .nav-link.active, .nav-pills .show>.nav-link, .form-control {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #3e3e3e !important;
            background-color: #eeeff3;
        }
        .nav-link {
            color: #ffffff !important;
        }
        .tab-content {
            background-color: #eeeff3;
            padding: 32px 16px;
        }
        @media (min-width: 768px) {
            .dialog-aqiqah-fixed {
                padding-top: 260px;
            }
        }
    </style>
</head>
<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <nav class="navbar navbar-expand-sm navbar-light fixed-top navbar-80">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/index.png " alt="theaqiqah.com">
            </a>
            <ul class="nav navbar-nav pull-sm-right d-none d-sm-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" onclick="goToByScroll('contact-us');" style="color: #4f999b !important;"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us (013-266 2889)</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 style="font-size: 44px;color: #ffffff;font-weight: 700;">Menempah Kambing Dengan Mudah</h1>
            <p class="lead" style="color: #ffffff;">TheAqiqah memudahkan anda menempah dan membeli kambing untuk pelbagai tujuan.</p>
            <div class="row dialog-aqiqah-fixed">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a style="font-size: 28px;color: #484848;font-weight: 700;" class="nav-link active" id="aqiqah-tab" data-toggle="tab" href="#aqiqah" role="tab" aria-controls="aqiqah" aria-selected="true">Aqiqah</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 28px;color: #484848;font-weight: 700;" class="nav-link" id="livegrill-tab" data-toggle="tab" href="#livegrill" role="tab" aria-controls="livegrill" aria-selected="false">Livegrill</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 28px;color: #484848;font-weight: 700;" class="nav-link" href="/">Livestock</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 28px;color: #484848;font-weight: 700;" class="nav-link" href="/">Promo</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="aqiqah" role="tabpanel" aria-labelledby="aqiqah-tab">
                            <div class="row" style="margin-bottom: 16px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <button type="button" data-toggle="modal" data-target="#kawasanModal" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #ccc;width: 100%;">Pilih Kawasan</button>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input id="aqiqah-date" class="form-control" style="text-align: center;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;" placeholder="Tarikh Penghantaran">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <select class="form-control" style="text-align: center;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;">
                                        <option hidden>Jenis Aqiqah</option>
                                        <option >Aqiqah Mentah</option>
                                        <option >Aqiqah Livegrill</option>
                                        <option >Aqiqah Masak</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <select class="form-control" style="text-align: center;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;">
                                        <option hidden>Berat/Jenis Kambing</option>
                                        <option >25KG - 30KG / 7KG - 9KG Carcass</option>
                                        <option >30KG - 35KG / 10KG - 12KG Carcass</option>
                                        <option >35KG - 40KG / 13KG - 15KG Carcass</option>
                                        <option >40KG - 45KG / 16KG - 19KG Carcass</option>
                                        <option >45KG - 50KG / 20KG - 23KG Carcass</option>
                                        <option >50KG - 60KG / 24KG - 28KG Carcass</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="livegrill" role="tabpanel" aria-labelledby="livegrill-tab">
                            <div class="row" style="margin-bottom: 16px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <button type="button" data-toggle="modal" data-target="#kawasanModal" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #ccc;width: 100%;">Pilih Kawasan</button>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input id="livegrill-date" class="form-control" style="text-align: center;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;" placeholder="Tarikh Penghantaran">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="form-control" style="text-align: center;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;" placeholder="Berapa Ekor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kawasanModal" tabindex="-1" role="dialog" aria-labelledby="kawasanModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="kawasanModalLabel" style="color: #484848;font-weight: 700;">Pilih Kawasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input class="form-control" id="address" placeholder="Enter your address" onFocus="geolocate()" type="text">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Hantar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <section style="padding: 48px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left" style="margin-bottom: 56px;">
                    <h1 style="font-size: 44px;color: #484848;font-weight: 700;">Bagaimana TheAqiqah Berfungsi?</h1>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-xl-1 col-lg-1 col-md-1 text-right d-none d-sm-none d-md-block" style="padding-right: 0;">
                        <h1 style="font-size: 118px;color: #4f999b;">1</h1>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <h1 style="font-size: 28px;color: #484848;font-weight: 700;">Dapatkan Harga Ideal Anda</h1>
                        <p style="font-size: 19px;color: #484848;font-weight: 300;">Pilih Jenis Perkhidmatan, Saiz Kambing Dan Jenis Hidangan Untuk Mendapatkan Harga Yang Menepati Bajet Anda.</p>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <figure>
                            <img class="img-fluid" src="img/infographic_1.png">
                        </figure>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <figure>
                            <img class="img-fluid" src="img/infographic_2.png">
                        </figure>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 text-right d-none d-sm-none d-md-block" style="padding-right: 0;">
                        <h1 style="font-size: 118px;color: #4f999b;">2</h1>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <h1 style="font-size: 28px;color: #484848;font-weight: 700;">Penyediaan Tempahan</h1>
                        <p style="font-size: 19px;color: #484848;font-weight: 300;">Isi Nama Bayi, Tarikh, Masa Penghantaran Dan Pesanan Istimewa ( Jika Perlu ) Untuk Tujuan Penyediaan Penghantaran Dan Pelaksanaan Aqiqah.</p>
                    </div>
                </div>
                <div class="row" style="align-items: center;">
                    <div class="col-xl-1 col-lg-1 col-md-1 text-right d-none d-sm-none d-md-block" style="padding-right: 0;">
                        <h1 style="font-size: 118px;color: #4f999b;">3</h1>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <h1 style="font-size: 28px;color: #484848;font-weight: 700;">Bayar Secara Online</h1>
                        <p style="font-size: 19px;color: #484848;font-weight: 300;">Bayar Secara Online Menggunakan Kad Kredit / Debit Atau Perbankan Internet FPX Tanpa Perlu Membuka Tab Baru.</p>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <figure>
                            <img class="img-fluid" src="img/infographic_3.png">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section style="padding: 48px 0;">
        <div class="container">
            <div class="row  justify-content-md-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left" style="margin-bottom: 56px;">
                    <h1 style="font-size: 44px;color: #484848;font-weight: 700;">Kenapa TheAqiqah?</h1>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row" style="align-items: center;">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <img class="img-fluid" src="img/telemarketer_480x480.png">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <h1 style="font-size: 28px;color: #484848;font-weight: 600;">Khidmat Mesra Pelanggan</h1>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 16px;">
                            <p style="font-size: 19px;color: #484848;font-weight: 300;">Di TheAqiqah, Kami Akan Cuba Sedaya Upaya Untuk Memastikan Khidmat Pelanggan Kami Berada Ditahap Yang Paling Profesional Dan Berkualiti Kepada Semua Pelanggan Kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row" style="align-items: center;">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <img class="img-fluid" src="img/coin_480x480.png">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <h1 style="font-size: 28px;color: #484848;font-weight: 600;">Harga Tetap</h1>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 16px;">
                            <p style="font-size: 19px;color: #484848;font-weight: 300;">Kami Di TheAqiqah Akan Memastikan Harga Yang Tertera Adalah Harga Yang Sama Ketika Anda Mahu Membuat Bayaran. Harga Adalah Tetap Dan Muktamad Dan Tiada Caj Tersembunyi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row" style="align-items: center;">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <img class="img-fluid" src="img/premium_480x480.png">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <h1 style="font-size: 28px;color: #484848;font-weight: 600;">Jaminan Kami</h1>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 16px;">
                            <p style="font-size: 19px;color: #484848;font-weight: 300;">Tempahan Anda Akan Diterima Dan Dilaksanakan Tengan Sebaik Mungkin. Kambing Yang Akan Disembelih Juga Adalah Mengikut Syarat - Syarat Dan Adab - Adab Aqiqah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style="margin-top: 40px;">
                    <div class="row" style="align-items: center;">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <img class="img-fluid" src="img/link_480x480.png">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <h1 style="font-size: 28px;color: #484848;font-weight: 600;">Jaringan Pengusaha</h1>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 16px;">
                            <p style="font-size: 19px;color: #484848;font-weight: 300;">Dengan Lebih Dari 500 Penternak Dan Pengusaha Di Seluruh Malaysia, Kami Dapat Menghubungkan Pengusaha Dan Penternak Yang Sesuai Dan Berdekatan Dengan Keperluan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 48px 0;background-color: #eeeff3;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-left" style="margin-bottom: 56px;">
                    <h1 style="font-size: 44px;color: #484848;font-weight: 700;"><i class="fa fa-quote-left" aria-hidden="true" style="color: #4f999b;"></i>
                         Testimoni Pelanggan</h1>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p style="font-size: 19px;color: #484848;font-weight: 300;"><i>Sangat mudah menggunakan TheAqiqah.com. Order je terus dari rumah. Tempahan sampai tepat pada masa. Kambing panggang yang kami pesan pon sedap. Website TheAqiqah ni cantiklah...</i></p>
                                <div class="text-right">
                                    <cite>Muhammad Nasyriq Roslan</cite>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p style="font-size: 19px;color: #484848;font-weight: 300;"><i>Best lah TheAqiqah.com ni, Dalam sibuk-sibuk jaga isteri yang Tengah pantang dengan baby, sambil belek-belek telefon pun boleh order. Bayar pun senang, tak payah nak online transfer, bayar terus kat website.</i></p>
                                <div class="text-right">
                                    <cite>Abdul Hafiz Al Fattah</cite>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p style="font-size: 19px;color: #484848;font-weight: 300;"><i>Menepati masa! Saya order pukul 2 petang, pukul 1 ejen panggang dah datang. Kambing golek pulak sampai licin tetamu makan.  Patutnya ambil 3 ekor. Mudah dan sedap!</i></p>
                                <div class="text-right">
                                    <cite class="text-right">Zubir Shah Omar</cite>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                {{--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">--}}
                    {{--<div class="card-custom">--}}
                        {{--<div class="card-content" style="width: 100%;">--}}
                            {{--<h1>Tanda Syukur Yang Tak Terhingga</h1>--}}
                            {{--<p>Pilihan aqiqah istimewa. Pilih jenis perkhidmatan, saiz kambing, dan jenis hidangan.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-custom">--}}
                        {{--<div class="card-content" style="width: 100%;">--}}
                            {{--<h1>Hangatkan Suasana majlis anda dengan Kambing Panggang "Live Grill"</h1>--}}
                            {{--<p>Sesuai untuk kenduri, rumah terbuka, majlis  perkahwinan dan majlis korporat.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-custom">--}}
                        {{--<div class="card-content" style="width: 100%;">--}}
                            {{--<h1>Kambing Mentah</h1>--}}
                            {{--<p>Pelbagai jenis pilihan dan saiz kambing untuk ditempah. Anda boleh memilih untuk membeli kambing hidup atau siap lapah.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <section style="padding: 48px 0;background-image: url('img/kambing-farm.jpg');background-position: center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                    <h1 style="font-size: 44px;color: #ffffff;font-weight: 700;">Jadi Rakan Niaga Kami</h1>
                    <p class="lead text-center" style="color: #ffffff;font-size: 24px;">Tingkatkan penjualan kambing anda dan tingkatkan pendapat anda bersama kami.</p>
                    <p class="text-center" style="color: #ffffff;font-size: 18px;">Sertai Theaqiqah, platform penjualan kambing terbesar di Malaysia, dan kembangkan perniagaan anda bersama-sama kami. Mari merevolusikan sektor penternakan dan perniagaan kambing bersama Theaqiqah.</p>

                    <a href="" class="btn btn-white">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 48px 0;background-color: #eeeff3;" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email *">
                                <small class="form-text text-muted">Please input a valid email</small>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Phone *">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="message" hidden>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message *" style="resize: none;"></textarea>
                            </div>
                            <button class="btn btn-white" style="float: right;">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <h1 style="font-size: 32px;color: #4f999b;">Need Fast Answer?</h1>
                    <p>Thank you for visiting theaqiqah.com! Please complete the form so we can provide quick and efficient service. If this matter is urgent, please contact us by phone.</p>
                    <h6 style="font-weight: 700;color: #4f999b;">Phone: 013-266 2889</h6>
                    <h6 style="font-weight: 700;color: #4f999b;">Monday - Sunday: 9AM - 6PM</h6>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-left" style="padding: 48px 24px;background-color: #ffffff;">
                    <img src="img/index.png " alt="theaqiqah.com" height="40">
                    <p style="font-size: 14px;font-weight: 100;">© 2018, Legit Asia Sdn Bhd ( 1237440-H )</p>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 footer-left" style="padding: 48px 24px;background-color: #4f999b;">
                    <a href="/" style="color: #ffffff;display: inline-block;text-decoration: none;font-size: 16px;line-height: 1.1;margin: 24px 8px;">Home</a>
                    <a href="#" style="color: #ffffff;display: inline-block;text-decoration: none;font-size: 16px;line-height: 1.1;margin: 24px 8px;">FAQ</a>
                    <a href="#" style="color: #ffffff;display: inline-block;text-decoration: none;font-size: 16px;line-height: 1.1;margin: 24px 8px;">Blog</a>
                    <a href="#" style="color: #ffffff;display: inline-block;text-decoration: none;font-size: 16px;font-weight: 500;line-height: 1.1;margin: 24px 8px;">Jadi Rakan Niaga</a>

                    <div class="item-right">
                        <a href="https://instagram.com/theaqiqah" target="__blank" style="color: #ffffff;display: inline-block;margin: 24px 8px;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        <a href="https://facebook.com/theaqiqah" target="__blank" style="color: #ffffff;display: inline-block;margin: 24px 8px;"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNTg-lwYA-T2Plm3N2TgwVZAvhIUq-VAk&libraries=places&callback=initAutocomplete"
            async defer></script>
    <script src="https://use.fontawesome.com/4f07fbdd65.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(window).scroll(function() {
            if($(this).scrollTop() > 50) {
                $('.navbar-80').addClass('navbar-60');
            } else {
                $('.navbar-80').removeClass('navbar-60');
            }
        });
        function goToByScroll(id){
            $('html,body').animate({
                scrollTop: $("#"+id).offset().top
            },'slow');
        }
        // ===== Scroll to Top ====
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

        var placeSearch, address;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            address = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('address')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            address.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = address.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    address.setBounds(circle.getBounds());
                });
            }
        }
        $('#aqiqah-date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#livegrill-date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>