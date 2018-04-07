<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website Kambing dan Aqiqah Pertama di Malaysia - TheAqiqah</title>

    <meta property="og:url" content="https://theaqiqah.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Website Kambing dan Aqiqah Pertama di Malaysia - TheAqiqah" />
    {{--<meta property="og:description" content="TheLorry is Malaysia’s trusted and affordable movers. We are professionals in house moving, lorry rental('lori sewa'), office moving, and furniture transport.'" />--}}
    {{--<meta property="og:image" content="https://thelorry.com/images/backgrounds/home/hero-02.jpg" />--}}
    {{--<meta name="description" content="TheLorry is Malaysia’s trusted and affordable movers. We are professionals in house moving, lorry rental('lori sewa'), office moving, and furniture transport.">--}}
    {{--<meta property="fb:pages" content="1494431924107705" />--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <link rel="canonical" href="https://theaqiqah.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif !important;
        }
        h1, h2, h3, h4, h5, h6, p {
            font-family: 'Open Sans', sans-serif !important;
        }
        .btn {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
        }
        .btn.btn-instagram.btn-simple, .navbar .navbar-nav > li > a.btn.btn-instagram.btn-simple,
        .btn.btn-facebook.btn-simple, .navbar .navbar-nav > li > a.btn.btn-facebook.btn-simple {
            color: #999999;
            background-color: transparent;
            box-shadow: none;
        }
        .card {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
        }
        .title {
            font-size: 32px;
            color: #484848;
        }
        .description {
            font-size: 15px;
        }
        i:hover {
            opacity: 0.5;
        }
        @media (max-width: 768px) {
            .center-mobile {
                float: none !important;
                text-align: center;
            }
            .modal-dialog {
                margin: 0 !important;
            }
            .p-md-l-0 {
                padding: 0;
            }
            .p-md-l-r-0 {
                padding: 0;
            }
        }
        @media (min-width: 768px) {
            .vertical-center {
                display: flex;
                align-items: center;
            }
            .center-search {
                padding: 0;
            }
            .first-search {
                padding-right: 0;
            }
            .last-search {
                padding-left: 0;
            }
            .p-md-l-0 {
                padding-left: 0;
            }
            .p-md-l-r-0 {
                padding-left: 0;
                padding-right: 0;
            }
        }
        .navbar {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            margin: 0 !important;
       }
        .opaque-navbar {
            background: transparent;
        }
        .opaque {
            background-color: #ffffff !important;
            /*-webkit-box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) !important;*/
            /*-moz-box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) !important;*/
            /*box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25) !important;*/
        }
        .navbar-brand {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        .navbar img {
            height: 100%;
        }
        @media (min-width: 768px) {
            .navbar img {
                height: 190%;
            }
        }
        .header-content {
            color: #fff;
            margin: 0 auto;
            margin-top: 120px;
        }
        .header-content h1 {
            font-size: 40px;
            font-weight: bolder;
        }
        .nav-tabs>li {
            margin: 0;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            background-color: rgba(0, 0, 0, 0.7);
            transition: background-color .1s .2s;
        }
        .header-text-shadow {
            text-shadow: 0 4px 4px rgba(0, 0, 0, 0.25), 0 0 30px black, 0 0 30px black;
        }
        .search-bar {
            background-color: #333333;
            padding-top: 32px;
            padding-bottom: 32px;
        }
        a#return-to-top {
            color: #333333;
        }
        #return-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #ffffff;
            border: 1px solid #333333;
            padding: 8px;
            text-decoration: none;
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
            color: #ffffff;
        }
        .nav-tabs {
            background: transparent;
            padding: 0;
        }
        .nav-tabs li a {
            border-radius: 0;
        }
        .tab-pane {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 16px 24px 28px 24px;
        }
        .navbar-header .navbar-toggle {
            color: #4f999b;
        }
        .modal-dialog {
            margin-top: 16px !important;
        }
        .modal-content {
            border-radius: 0;
        }
        .form-group.is-focused .form-control {
            background-image: linear-gradient(#4f999b, #4f999b), linear-gradient(#D2D2D2, #D2D2D2);
        }
        [role=button], [role=button]:hover {
            cursor: default;
            color: #4f999b;
            background: transparent;
            border: none;
        }
        .picture {
            background-color: transparent;
            border: none;
            height: 95px;
            display: flex;
            align-items: flex-end;
        }
        .picture img{
            filter: grayscale(100%) invert(100%) contrast(10);
        }
        .picture img:hover {
            filter: none;
        }
        .navbar .navbar-toggle .icon-bar {
             color: #4f999b;
        }
        .slider-1 {
            background: rgba(51,51,51, 0.40);
            position: absolute;
            z-index: 2;
            color: white;
            top: 16%;
        }
        @media screen and (max-width: 414px) {
            .img-responsives {
                max-height: 203px !important;
            }
        }
        @media screen and (max-width: 1920px) {
            .img-responsives {
                max-height: 1080px !important;
            }
        }
        @media screen and (max-width: 2560px) {
            .img-responsives {
                max-height: 95vh !important;
            }
        }
        .img-responsives {
            position: relative;
            width: 100%;
            max-height: 95vh;
        }
        .no-padding {
            padding: 0 !important;
        }
        .dan-font {
            font-size: 4vw;
            font-weight: 100;
        }
        .instant-quote-bar {
            position: absolute;
            width: 100%;
            bottom: 0%;
            background-color: rgba(0,0,0,0.6);
        }
        @media (max-width: 768px) {
            .instant-quote-bar {
                position: static !important;
            }
            .tab-container {
                padding: 0;
                margin: 0;
            }
        }
        @media (max-width: 460px) {
            .responsive-quote {
                padding-bottom: 0;
            }
        }
        .responsive-quote {
            padding-bottom: 20px;
        }
        @media (max-width: 460px) {
            .responsive-quote-bar {
                border-radius: 0;
            }
        }
        .responsive-quote-bar {
            background-color: #e6e6e6;
            border-radius: 0;
        }
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #333333;
        }
        ::-moz-placeholder { /* Firefox 19+ */
            color: #333333;
        }
        :-ms-input-placeholder { /* IE 10+ */
            color: #333333;
        }
        :-moz-placeholder { /* Firefox 18- */
            color: #333333;
        }
        .ui-tooltip {
            width: 200px;
            text-align: center;
            box-shadow: none;
            padding: 0;
        }
        .ui-tooltip-content {
            position: relative;
            padding: 0.5em;
        }
        .ui-tooltip-content::after, .ui-tooltip-content::before {
            content: "";
            position: absolute;
            border-style: solid;
            display: block;
            left: 90px;
        }
    </style>
</head>
<body>
    <a href="javascript:void(0);" id="return-to-top">Back To Top</a>
    <nav class="navbar navbar-fixed-top opaque-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/NewAqiqahLogo2.png') }}" alt="theaqiqah.com">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/" style="font-size: 14px;font-weight: 600;color: #4f999b;">Home</a></li>
                    <li><a href="faq" style="font-size: 14px;font-weight: 600;color: #4f999b;">FAQ</a></li>
                    <li><a href="javascript:void(0);" onclick="goToByScroll('contact-us');" style="font-size: 14px;font-weight: 600;color: #4f999b;">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header style="position: relative;">
            <div>
                <img class="img-responsives" src="{{ asset('img/stock-photo-handsome-farmer-taking-care-of-cute-goat-baby-at-the-barn-628078835.jpg') }}" alt="TheAqiqah Main Photo">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no-padding slider-1 bebas">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h1 class="dan-font">Menempah Kambing Kini Mudah Dengan theaqiqah</h1>
                    </div>
                </div>
            </div>
            <div class="instant-quote-bar">
                <div class="header-search">
                    <div class="col-md-12">
                        <div class="container tab-container">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Aqiqah</a></li>
                                <li><a data-toggle="tab" href="#menu1">Livegrill</a></li>
                                <li><a href="{{ action('BookingController@showBookLivestock') }}">Livestock</a></li>
                                <li><a href="/">Promo</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="radio radio-inline">
                                                <label><input type="radio" name="aqiqahoption" checked value="1kambing">1 Kambing</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label><input type="radio" name="aqiqahoption" value="2kambing">2 Kambing</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="aqiqah_one">
                                        <div class="row">
                                            <div class="col-md-3 first-search">
                                                <input type="hidden" name="jenis_aqiqah" id="jenis_aqiqah1">
                                                <button type="button" id="select_aqiqah" data-toggle="modal" data-target="#jenisAqiqah" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #333333;width: 100%;">Jenis Aqiqah</button>
                                            </div>
                                            <div class="col-md-3 center-search" id="aqiqah_two" hidden>
                                                <input type="hidden" name="jenis_aqiqah2" id="jenis_aqiqah2">
                                                <button type="button" id="select_aqiqah2" data-toggle="modal" data-target="#jenisAqiqah2" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #333333;width: 100%;">Jenis Aqiqah 2</button>
                                            </div>
                                            <div class="col-md-3 center-search">
                                                <input type="hidden" name="berat_kambing_aqiqah" id="berat_kambing_aqiqah1">
                                                <button type="button" id="select_berat_kambing" data-toggle="modal" data-target="#beratKambing" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #333333;width: 100%;">Berat / Jenis Kambing</button>
                                            </div>
                                            <div class="col-md-3 last-search" id="aqiqah_brt_two" hidden>
                                                <input type="hidden" name="berat_kambing_aqiqah2" id="berat_kambing_aqiqah2">
                                                <button type="button" id="select_berat_kambing2" data-toggle="modal" data-target="#beratKambing2" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #333333;width: 100%;">Berat / Jenis Kambing 2</button>
                                            </div>
                                            <div class="col-md-2 center-search">
                                                <select name="kawasan" id="kawasan_aqiqah" style="padding-left: 40px;margin: 10px 0;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;height: 45px;">
                                                    <option hidden>Pilih Kawasan</option>
                                                    <option value="Gombak">Gombak</option>
                                                    <option value="Hulu Langat">Hulu Langat</option>
                                                    <option value="Hulu Selangor">Hulu Selangor</option>
                                                    <option value="Klang">Klang</option>
                                                    <option value="Kuala Langat">Kuala Langat</option>
                                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                                    <option value="Kuala Selangor">Kuala Selangor</option>
                                                    <option value="Petaling">Petaling</option>
                                                    <option value="Putrajaya">Putrajaya</option>
                                                    <option value="Sabak Bernam">Sabak Bernam</option>
                                                    <option value="Sepang">Sepang</option>
                                                    <option value="Shah Alam">Shah Alam</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2 center-search">
                                                <input  name="tarikh_penghantaran_aqiqah" id="tarikh_penghantaran_aqiqah" placeholder="Tarikh Penghantaran" style="text-align: center;margin: 10px 0;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;min-width:100%;height: 45px;">
                                            </div>
                                            <div class="col-md-2" id="aqiqahselect1">
                                                <button type="button" id="aqiqahSemakHarga" class="btn btn-block btn-info">Semak Harga</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-4 first-search">
                                            <input type="hidden" name="jumlah_ekor" id="jumlah_ekor">
                                            <button type="button" id="select_ekor" data-toggle="modal" data-target="#ekorModal" class="btn" style="background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;color: #333333;width: 100%;">Berapa Ekor</button>
                                        </div>
                                        <div class="col-md-3 center-search">
                                            <input name="tarikh_penghantaran" id="tarikh_penghantaran" placeholder="Tarikh Penghantaran" style="text-align: center;margin: 10px 0;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;height: 45px;">
                                        </div>
                                        <div class="col-md-3 center-search">
                                            <select name="kawasan" id="kawasan" style="padding-left: 40px;margin: 10px 0;background-color: #ffffff;border: 1px solid #ccc;-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;width: 100%;height: 45px;">
                                                <option hidden>Pilih Kawasan</option>
                                                <option value="Gombak">Gombak</option>
                                                <option value="Hulu Langat">Hulu Langat</option>
                                                <option value="Hulu Selangor">Hulu Selangor</option>
                                                <option value="Klang">Klang</option>
                                                <option value="Kuala Langat">Kuala Langat</option>
                                                <option value="Kuala Lumpur">Kuala Lumpur</option>
                                                <option value="Kuala Selangor">Kuala Selangor</option>
                                                <option value="Petaling">Petaling</option>
                                                <option value="Putrajaya">Putrajaya</option>
                                                <option value="Sabak Bernam">Sabak Bernam</option>
                                                <option value="Sepang">Sepang</option>
                                                <option value="Shah Alam">Shah Alam</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" id="livegrillSemakHarga" class="btn btn-block btn-info">Semak Harga</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </header>
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="title">Bagaimana theaqiqah berfungsi</h2>
                </div>

            </div>
            <div class="row vertical-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <figure>
                        <img class="img-responsive" src="{{ asset('img/infographic_1.png') }}">
                    </figure>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2" style="padding-right: 0;">
                    <h1 style="font-size: 118px;color: #4f999b;">1</h1>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-10">
                    <h4 class="info-title">Dapatkan Harga Ideal Anda</h4>
                    <p>Pilih Jenis Perkhidmatan, Saiz Kambing Dan Jenis Hidangan Untuk Mendapatkan Harga Yang Menepati Bajet Anda.</p>
                </div>
            </div>
            <div class="row vertical-center">
                <div class="col-md-4 col-sm-4 col-xs-12 col-md-push-8 col-sm-push-8">
                    <figure>
                        <img class="img-responsive" src="{{ asset('img/infographic_2.png') }}">
                    </figure>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2 col-md-pull-4 col-sm-pull-4" style="padding-right: 0;">
                    <h1 style="font-size: 118px;color: #4f999b;">2</h1>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-10 col-md-pull-4 col-sm-pull-4">
                    <h4 class="info-title">Penyediaan Tempahan</h4>
                    <p>Isi Nama Bayi, Tarikh, Masa Penghantaran Dan Pesanan Istimewa ( Jika Perlu ) Untuk Tujuan Penyediaan Penghantaran Dan Pelaksanaan Aqiqah.</p>
                </div>
            </div>
            <div class="row vertical-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <figure>
                        <img class="img-responsive" src="{{ asset('img/infographic_3.png') }}">
                    </figure>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-2" style="padding-right: 0;">
                    <h1 style="font-size: 118px;color: #4f999b;">3</h1>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-10">
                    <h4 class="info-title">Bayar Secara Online</h4>
                    <p>Bayar Secara Online Menggunakan Kad Kredit / Debit Atau Perbankan Internet FPX Tanpa Perlu Membuka Tab Baru.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3 class="title">Kenapa theaqiqah</h3>
                </div>
                <div class="col-md-6 text-center">
                    <div class="icon fa-5x">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <h4 class="info-title">Khidmat Mesra Pelanggan</h4>
                    <p>Di theaqiqah, Kami Akan Cuba Sedaya Upaya Untuk Memastikan Khidmat Pelanggan Kami Berada Ditahap Yang Paling Profesional Dan Berkualiti Kepada Semua Pelanggan Kami.</p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="icon fa-5x">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <h4 class="info-title">Harga Tetap</h4>
                    <p>Kami Di theaqiqah Akan Memastikan Harga Yang Tertera Adalah Harga Yang Sama Ketika Anda Mahu Membuat Bayaran. Harga Adalah Tetap Dan Muktamad Dan Tiada Caj Tersembunyi.</p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="icon fa-5x">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <h4 class="info-title">Jaminan Kami</h4>
                    <p>Tempahan Anda Akan Diterima Dan Dilaksanakan Tengan Sebaik Mungkin. Kambing Yang Akan Disembelih Juga Adalah Mengikut Syarat - Syarat Dan Adab - Adab Aqiqah.</p>
                </div>
                <div class="col-md-6 text-center">
                    <div class="icon fa-5x">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h4 class="info-title">Jaringan Pengusaha</h4>
                    <p>Dengan Lebih Dari 500 Penternak Dan Pengusaha Di Seluruh Malaysia, Kami Dapat Menghubungkan Pengusaha Dan Penternak Yang Sesuai Dan Berdekatan Dengan Keperluan Anda.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #eeeff3;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3 class="title">Testimoni pelanggan</h3>
                    <h5 class="description">You need more information? Check what other persons are saying about theaqiqah. They are very happy with their purchase.</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-testimonial">
                        <div class="icon">
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
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
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
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
                            <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
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
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h3 class="title">Jadi rakan niaga kami</h3>
                        <p class="description">
                            Tingkatkan penjualan kambing anda dan tingkatkan pendapat anda bersama kami.
                        </p>
                        <p class="description">
                            Sertai theaqiqah, platform penjualan kambing terbesar di Malaysia, dan kembangkan perniagaan anda bersama-sama kami. Mari merevolusikan sektor penternakan dan perniagaan kambing bersama theaqiqah.
                        </p>
                    </div>
                    <button type="button" class="btn btn-block">Daftar sekarang</button>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #eeeff3;" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <h3 class="title">Hubungi kami</h3>
                    </div>
                    <div class="card card-contact">
                        <form role="form" id="contact-form" method="post">
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

                                <button type="submit" class="btn btn-block">Send Message</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-white">
        <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="footer-brand center-mobile pull-left" href="/">theaqiqah</a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="pull-center">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="faq">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick="goToByScroll('contact-us');">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="social-buttons center-mobile pull-right">
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
        </div>
    </footer>
    <div class="modal fade" id="jenisAqiqah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Jenis Aqiqah</h5>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/AqiqahLive_Grill.png') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8 center-mobile">
                                <h5>Aqiqah Mentah</h5>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Carcass')" class="btn btn-block"><strong>Carcass</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Potong Bahagian')" class="btn btn-block"><strong>Potong Bahagian</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Potong Kecil')" class="btn btn-block"><strong>Potong Kecil</strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/Aqiqah-Masak.jpg') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8 center-mobile">
                                <h5>Aqiqah Masak</h5>

                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Masak Kari')" class="btn btn-block"><strong>Masak Kari</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Masak Kurma')" class="btn btn-block"><strong>Masak Kurma</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Masak Kuzi')" class="btn btn-block"><strong>Masak Kuzi</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah('Masak Sup')" class="btn btn-block"><strong>Masak Sup</strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/Aqiqah-Live-Grill.jpg') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8">
                                <h5>Aqiqah Livegrill</h5>
                                <ul>
                                    <li>Sos Black Pepper</li>
                                    <li>Garlic bread</li>
                                    <li>Mushroom Soup</li>
                                    <li>Coleslaw</li>
                                    <li>Grill Set</li>
                                    <li>Buffet Table</li>
                                    <li>2 Hero Grill Rangers</li>
                                </ul>
                                <a href="javascript:void(0);" onclick="setJenisAqiqah('Livegrill')" class="btn btn-block"><strong>Livegrill</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="beratKambing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Pilih Berat dan Jenis Kambing</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h4 class="text-center" style="color: #4f999b;">Biri - Biri</h4>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Biri - Biri: 10kg - 12 kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>10kg - 12 kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>11kg - 13kg Carcass</p>
                                <strong>Masak</strong>
                                <p>50pax - 60pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Biri - Biri: 13kg - 15kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Masak</strong>
                                <p>70pax - 80pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Biri - Biri: 16kg - 18kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Masak</strong>
                                <p>90pax - 100pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Biri - Biri: 19kg - 21kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Masak</strong>
                                <p>100pax - 120pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="text-center" style="color: #4f999b;">Kambing Boer</h4>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Kambing Boer: 10kg - 12 kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>10kg - 12 kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>11kg - 13kg Carcass</p>
                                <strong>Masak</strong>
                                <p>50pax - 60pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Kambing Boer: 13kg - 15kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;margin: 0 auto;">
                                </a>
                                <a title=" <strong>Mentah</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Masak</strong>
                                <p>70pax - 80pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Kambing Boer: 16kg - 18kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                </a>
                                <a title=" <strong>Mentah</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Masak</strong>
                                <p>90pax - 100pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing('Kambing Boer: 19kg - 21kg Carcass')" type="button" class="picture"  data-dismiss="modal" >
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Masak</strong>
                                <p>100pax - 120pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jenisAqiqah2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Jenis Aqiqah</h5>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/AqiqahLive_Grill.png') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8 center-mobile">
                                <h5>Aqiqah Mentah</h5>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Carcass')" class="btn btn-block"><strong>Carcass</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Potong Bahagian')" class="btn btn-block"><strong>Potong Bahagian</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Potong Kecil')" class="btn btn-block"><strong>Potong Kecil</strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/Aqiqah-Masak.jpg') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8 center-mobile">
                                <h5>Aqiqah Masak</h5>

                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Masak Kari')" class="btn btn-block"><strong>Masak Kari</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Masak Kurma')" class="btn btn-block"><strong>Masak Kurma</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Masak Kuzi')" class="btn btn-block"><strong>Masak Kuzi</strong></a>
                                </div>
                                <div class="col-md-6 p-md-l-r-0">
                                    <a href="javascript:void(0);" onclick="setJenisAqiqah2('Masak Sup')" class="btn btn-block"><strong>Masak Sup</strong></a>
                                </div>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-4">
                                <figure>
                                    <img class="img-responsive" src="{{ asset('img/Aqiqah-Live-Grill.jpg') }}"/>
                                </figure>
                            </div>
                            <div class="col-md-8">
                                <h5>Aqiqah Livegrill</h5>
                                <ul>
                                    <li>Sos Black Pepper</li>
                                    <li>Garlic bread</li>
                                    <li>Mushroom Soup</li>
                                    <li>Coleslaw</li>
                                    <li>Grill Set</li>
                                    <li>Buffet Table</li>
                                    <li>2 Hero Grill Rangers</li>
                                </ul>
                                <a href="javascript:void(0);" onclick="setJenisAqiqah2('Livegrill')" class="btn btn-block"><strong>Livegrill</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="beratKambing2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Pilih Berat dan Jenis Kambing</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <h4 class="text-center" style="color: #4f999b;">Biri - Biri</h4>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Biri - Biri: 10kg - 12 kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>10kg - 12 kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>11kg - 13kg Carcass</p>
                                <strong>Masak</strong>
                                <p>50pax - 60pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Biri - Biri: 13kg - 15kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Masak</strong>
                                <p>70pax - 80pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Biri - Biri: 16kg - 18kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Masak</strong>
                                <p>90pax - 100pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Biri - Biri: 19kg - 21kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/goat.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Masak</strong>
                                <p>100pax - 120pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="text-center" style="color: #4f999b;">Kambing Boer</h4>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Kambing Boer: 10kg - 12 kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 50px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>10kg - 12 kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>11kg - 13kg Carcass</p>
                                <strong>Masak</strong>
                                <p>50pax - 60pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Kambing Boer: 13kg - 15kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 65px;margin: 0 auto;">
                                </a>
                                <a title=" <strong>Mentah</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>13kg - 15kg Carcass</p>
                                <strong>Masak</strong>
                                <p>70pax - 80pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Kambing Boer: 16kg - 18kg Carcass')" type="button" class="picture"  data-dismiss="modal">
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                </a>
                                <a title=" <strong>Mentah</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>16kg - 18kg Carcass</p>
                                <strong>Masak</strong>
                                <p>90pax - 100pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="instruction">
                            <div class="col-md-3 text-center information-pic">
                                <a href="javascript:void(0);" onclick="setBeratKambing2('Kambing Boer: 19kg - 21kg Carcass')" type="button" class="picture"  data-dismiss="modal" >
                                    <img src="{{asset('img/sheep.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 95px;margin: 0 auto;">
                                </a>
                                <a title="<strong>Mentah</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Livegrill</strong>
                                <p>19kg - 21kg Carcass</p>
                                <strong>Masak</strong>
                                <p>100pax - 120pax</p>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="modal fade" id="kawasanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>--}}
                    {{--<h5 class="modal-title text-center" id="myModalLabel">Pilih Kawasan Penghantaran</h5>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="instruction">--}}
                            {{--<div class="col-md-6 col-md-push-3">--}}
                                {{--<select class="form-control" name="temp_kawasan" id="temp_kawasan">--}}
                                    {{--<option hidden>Pilih Kawasan</option>--}}
                                    {{--<option value="Gombak">Gombak</option>--}}
                                    {{--<option value="Hulu Langat">Hulu Langat</option>--}}
                                    {{--<option value="Hulu Selangor">Hulu Selangor</option>--}}
                                    {{--<option value="Klang">Klang</option>--}}
                                    {{--<option value="Kuala Langat">Kuala Langat</option>--}}
                                    {{--<option value="Kuala Lumpur">Kuala Lumpur</option>--}}
                                    {{--<option value="Kuala Selangor">Kuala Selangor</option>--}}
                                    {{--<option value="Petaling">Petaling</option>--}}
                                    {{--<option value="Putrajaya">Putrajaya</option>--}}
                                    {{--<option value="Sabak Bernam">Sabak Bernam</option>--}}
                                    {{--<option value="Sepang">Sepang</option>--}}
                                    {{--<option value="Shah Alam">Shah Alam</option>--}}
                                {{--</select>--}}
                                {{--<a class="btn btn-block" href="javascript:void(0);" onclick="setKawasan()">Tetap Kawasan</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal fade" id="tarikhModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>--}}
                    {{--<h5 class="modal-title text-center" id="myModalLabel">Pilih Tarikh Penghantaran</h5>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="instruction">--}}
                            {{--<div class="col-md-6 col-md-push-3">--}}
                                {{--<input type="date" class="form-control" name="temp_tarikh" id="temp_tarikh">--}}
                                {{--<small class="tarikh-error" style="color: #ff0010" hidden>*Please book 3 days ahead</small>--}}
                                {{--<a class="btn btn-block" href="javascript:void(0);" onclick="setTarikh()">Tetap Tarikh</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="modal fade" id="ekorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Pilih Bilangan Kambing</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-md-push-3 text-center">
                            <h3>Livegrill Frozen Australian /New Zealand lamb </h3>
                            <h5><strong>13-15kg Carcass For 70-80pax</strong></h5>
                            <p><strong>With Side dish</strong></p>
                            <p style="margin: 0;">Black Pepper sauce </p>
                            <p style="margin: 0;">Garlic bread</p>
                            <p style="margin: 0;">Mushroom Soup</p>
                            <p style="margin-top: 0;">Coleslaw</p>
                            <p><strong>Including</strong></p>
                            <p style="margin: 0;">2 Hero Grill Rangers</p>
                            <p style="margin: 0;">Canopy</p>
                            <p style="margin: 0;">Table Buffet</p>
                            <p style="margin-top: 0;">Plate & Spoon </p>
                            <p><strong>'Our grills make u feel better'</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="instruction">
                            <div class="instruction">
                                <div class="col-xs-3 text-center information-pic">
                                    <a href="javascript:void(0);" onclick="setJumlahEkor(1)" type="button" class="picture" data-dismiss="modal">
                                        <img src="{{asset('img/1-kambing.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                    </a>
                                    <h6>1 Ekor</h6>
                                </div>
                                <div class="col-xs-3 text-center information-pic">
                                    <a href="javascript:void(0);" onclick="setJumlahEkor(2)" type="button" class="picture" data-dismiss="modal">
                                        <img src="{{asset('img/2-kambing.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                    </a>
                                    <h6>2 Ekor</h6>
                                </div>
                                <div class="col-xs-3 text-center information-pic">
                                    <a href="javascript:void(0);" onclick="setJumlahEkor(3)" type="button" class="picture" data-dismiss="modal">
                                        <img src="{{asset('img/3-kambing.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                    </a>
                                    <h6>3 Ekor</h6>
                                </div>
                                <div class="col-xs-3 text-center information-pic">
                                    <a href="javascript:void(0);" onclick="setJumlahEkor(4)" type="button" class="picture" data-dismiss="modal">
                                        <img src="{{asset('img/4-kambing.png')}}" alt="Thumbnail Image"  class="img-rounded img-responsive" style="max-height: 80px;margin: 0 auto;">
                                    </a>
                                    <h6>4 Ekor</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="semakHarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h5 class="modal-title text-center" id="myModalLabel">Order Details</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <table class="table" id="aqiqahTable">
                            <thead>
                            <tr>
                                <th>
                                    Jenis Aqiqah
                                </th>
                                <th>
                                    Jenis / Berat Kambing
                                </th>
                            </tr>
                            </thead>
                            <tbody id="tableData">
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-8 no-padding">
                                <label id="labelKuantiti">Kuantiti Kambing: </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <p id="lblKuantiti"></p>
                            </div>
                            <div class="col-xs-8 no-padding">
                                <label>Kawasan Penghantaran: </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <p id="lblKawasan"></p>
                            </div>
                            <div class="col-xs-8 no-padding">
                                <label>Tarikh Penghantaran: </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <p id="lblTarikh"></p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <h3 style="margin-top: 0;">Total</h3>
                            <h2 style="margin: 0;" id="priceTotal"></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-push-3" style="margin-top: 32px;">
                            <form action="{{ action('BookingController@showBookAqiqah') }}" id="aqiqahSubmitForm">
                                <input type="submit" class="btn btn-block btn-default" id="aqiqahTempah" value="Tempah Sekarang">
                            </form>
                            <form action="{{ action('BookingController@showBookLivegrill') }}" id="livegrillSubmitForm">
                                <input type="submit" class="btn btn-block btn-default" id="livegrillTempah" value="Tempah Sekarang">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $( function() {
            $(document).tooltip({
                content: function () {
                    return $(this).prop('title');
                }
            });
            $( "#tarikh_penghantaran_aqiqah" ).datepicker({
                minDate: +4
            });
            $( "#tarikh_penghantaran" ).datepicker({
                minDate: +4
            });
        } );

        function goToByScroll(id){
            $('html,body').animate({
                scrollTop: $("#"+id).offset().top
            },'slow');
        }

        function setJenisAqiqah(jenis) {
            $('#jenis_aqiqah1').val(jenis);
            $('#select_aqiqah').text(jenis);
            $('#jenisAqiqah').modal('toggle');
        }

        function setBeratKambing(berat) {
            $('#berat_kambing_aqiqah1').val(berat);
            $('#select_berat_kambing').text(berat);
            $('#beratKambing').modal('toggle');
        }

        function setJenisAqiqah2(jenis) {
            $('#jenis_aqiqah2').val(jenis);
            $('#select_aqiqah2').text(jenis);
            $('#jenisAqiqah2').modal('toggle');
        }

        function setBeratKambing2(berat) {
            $('#berat_kambing_aqiqah2').val(berat);
            $('#select_berat_kambing2').text(berat);
            $('#beratKambing2').modal('toggle');
        }
        //
        // function setKawasan() {
        //     var kawasan = $('#temp_kawasan').find(":selected").text();
        //     $('#kawasan').val(kawasan);
        //     $('#select_kawasan').text(kawasan);
        //     $('#select_kawasan_2').text(kawasan);
        //     $('#kawasanModal').modal('toggle');
        // }

        // function setTarikh() {
        //     var tarikh = $('#temp_tarikh').val();
        //     var err = $('.tarikh-error');
        //     var expireDateArr = tarikh.split("-");
        //     var selectedDate = new Date(parseInt(expireDateArr[0]), parseInt(expireDateArr[1]) - 1, parseInt(expireDateArr[2]));
        //     var todayDate = new Date();
        //     todayDate.setDate(todayDate.getDate()+ 3);
        //     todayDate.setHours(0);
        //     todayDate.setMinutes(0);
        //     todayDate.setSeconds(0);
        //
        //     if (Date.parse(todayDate) > Date.parse(selectedDate)) {
        //         err.prop('hidden', false);
        //     } else {
        //         $('#tarikh_penghantaran').val(tarikh);
        //         $('#select_tarikh').text(tarikh);
        //         $('#select_tarikh_2').text(tarikh);
        //         err.prop('hidden', true);
        //         $('#tarikhModal').modal('toggle');
        //     }
        // }

        function setJumlahEkor(jumlah) {
            $('#jumlah_ekor').val(jumlah);
            $('#select_ekor').text(jumlah);
            $('#ekorModal').modal('toggle');
        }

        $(document).ready(function(){
            var aqSemakHarga = $('#aqiqahSemakHarga');
            var lgSemakHarga = $('#livegrillSemakHarga');
            var semakHargaPopup = $('#semakHarga');
            var ktitiKambing = $('#lblKuantiti');
            var kawasanPng = $('#lblKawasan');
            var tarikgPng = $('#lblTarikh');
            var btnBookAqiqah = $('#aqiqahTempah');
            var btnBookLivegrill = $('#livegrillTempah');

            $('input[type=radio][name=aqiqahoption]').change(function() {
                var aqiqahoption = $(this).val();
                var aq2 = $('#aqiqah_two');
                var aqbrt2 = $('#aqiqah_brt_two');

                if (aqiqahoption === '1kambing') {
                    aq2.prop('hidden', true);
                    aqbrt2.prop('hidden', true);
                } else if (aqiqahoption === '2kambing') {
                    aq2.prop('hidden', false);
                    aqbrt2.prop('hidden', false);
                }
            });

            aqSemakHarga.click(function () {
                var realKtiti = $('input[type=radio][name=aqiqahoption]:checked').parent('label').text();
                var realKawasan = $('#kawasan_aqiqah').find(":selected").text();
                var realTarikh = $('#tarikh_penghantaran_aqiqah').val();
                var firstAqq = $('#jenis_aqiqah1').val();
                var secondAqq = $('#jenis_aqiqah2').val();
                var firstBerat = $('#berat_kambing_aqiqah1').val();
                var secondBerat = $('#berat_kambing_aqiqah2').val();
                var aqqTable = $('#aqiqahTable');
                var tData = $('#tableData');
                var priceTotal = $('#priceTotal');
                var aqqTempah = $('#aqiqahTempah');
                var livegrillTempah = $('#livegrillTempah');
                var aqiqahSubmitForm = $('#aqiqahSubmitForm');
                var livegrillSubmitForm = $('#livegrillSubmitForm');

                aqqTempah.show();
                livegrillTempah.hide();

                if (!firstAqq) {
                    alert('Please select at least one aqiqah');
                    return;
                }

                ktitiKambing.text(realKtiti);
                kawasanPng.text(realKawasan);
                tarikgPng.text(realTarikh);

                tData.html("");

                if (firstAqq) {
                    aqqTable.prop('hidden', false);
                    var row = '<tr><td>' + firstAqq + '</td><td>' + firstBerat + '</td></tr>';
                    tData.append(row);

                    $('<input>', {
                        type: 'hidden',
                        id: 'aqiqah1',
                        name: 'aqiqah1',
                        value: firstAqq
                    }).appendTo(aqiqahSubmitForm);

                    $('<input>', {
                        type: 'hidden',
                        id: 'berat1',
                        name: 'berat1',
                        value: firstBerat
                    }).appendTo(aqiqahSubmitForm);
                }
                if (secondAqq && realKtiti == "2 Kambing") {
                    aqqTable.prop('hidden', false);
                    var row2 = '<tr><td>' + secondAqq + '</td><td>' + secondBerat + '</td></tr>';
                    tData.append(row2);

                    $('<input>', {
                        type: 'hidden',
                        id: 'aqiqah2',
                        name: 'aqiqah2',
                        value: secondAqq
                    }).appendTo(aqiqahSubmitForm);

                    $('<input>', {
                        type: 'hidden',
                        id: 'berat2',
                        name: 'berat2',
                        value: secondBerat
                    }).appendTo(aqiqahSubmitForm)
                }

                var total = 100.00 + 230.00;

                priceTotal.text('MYR ' + total);

                $('<input>', {
                    type: 'hidden',
                    id: 'kuantiti',
                    name: 'kuantiti',
                    value: realKtiti
                }).appendTo(aqiqahSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'kawasan',
                    name: 'kawasan',
                    value: realKawasan
                }).appendTo(aqiqahSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'tarikh',
                    name: 'tarikh',
                    value: realTarikh
                }).appendTo(aqiqahSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'total',
                    name: 'total',
                    value: total
                }).appendTo(aqiqahSubmitForm);

                semakHargaPopup.modal('toggle');
            });

            lgSemakHarga.click(function () {
                var realKtiti = $('#jumlah_ekor').val();
                var realKawasan = $('#kawasan').find(":selected").text();
                var realTarikh = $('#tarikh_penghantaran').val();
                $('#labelKuantiti').text('Kuantiti Livegrill')
                $('#aqiqahTable').hide();
                var priceTotal = $('#priceTotal');
                var aqqTempah = $('#aqiqahTempah');
                var livegrillTempah = $('#livegrillTempah');

                aqqTempah.hide();
                livegrillTempah.show();

                if (!realKtiti) {
                    alert('Please select quantiti livegrill');
                    return;
                }

                ktitiKambing.text(realKtiti);
                kawasanPng.text(realKawasan);
                tarikgPng.text(realTarikh);

                var total = 100.00 + 230.00;

                $('<input>', {
                    type: 'hidden',
                    id: 'kuantiti',
                    name: 'kuantiti',
                    value: realKtiti
                }).appendTo(livegrillSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'kawasan',
                    name: 'kawasan',
                    value: realKawasan
                }).appendTo(livegrillSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'tarikh',
                    name: 'tarikh',
                    value: realTarikh
                }).appendTo(livegrillSubmitForm);

                $('<input>', {
                    type: 'hidden',
                    id: 'total',
                    name: 'total',
                    value: total
                }).appendTo(livegrillSubmitForm);

                priceTotal.text('MYR ' + total);
                semakHargaPopup.modal('toggle');
            });

            $('.card-description').text(function(index, currentText) {
                return currentText.substr(0, 180) + '...';
            });

            // ===== Scroll to Top ====
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 700) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow

                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }

                if ($(this).scrollTop() >= 200) {
                    $('.opaque-navbar').addClass('opaque');
                } else {
                    $('.opaque-navbar').removeClass('opaque');
                }
            });

            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });
        });
    </script>
</body>
</html>