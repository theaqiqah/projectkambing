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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form-elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
        .center-mobile {
            margin-top: 24px;
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
            .p-md-l-0 {
                padding-left: 0;
            }
            .p-md-l-r-0 {
                padding-left: 0;
                padding-right: 0;
            }
        }
        .navbar {
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
            margin: 0 !important;
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
        .mb-0 {
            margin-bottom: 0;
            padding: 24px;
        }
        .mb-0 a {
            color: #4f999b;
        }
        .card {
            margin-bottom: 8px !important;
        }
    </style>
</head>
<body>
<a href="javascript:void(0);" id="return-to-top">Back To Top</a>
<nav class="navbar navbar-fixed-top">
    <div class="container">
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
<section style="padding: 32px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                <form role="form" action="/" method="post" class="f1">

                    <h2 class="title">Form Aqiqah</h2>
                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                        </div>
                        <div class="f1-step active">
                            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                            <p>Butir-Butiran</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="fa fa-map-marker"></i></div>
                            <p>Alamat</p>
                        </div>
                        <div class="f1-step">
                            <div class="f1-step-icon"><i class="fa fa-shopping-cart"></i></div>
                            <p>Selesai!</p>
                        </div>
                    </div>

                    <fieldset>
                        <div class="form-group">
                            <label for="nama-bayi" style="font-size: 17px;font-weight: 800;color: #333333;">1. Nama Bayi</label>
                            <input type="text" name="nama-bayi" placeholder="eg. Mohd Ali" class="form-control" id="nama-bayi">
                        </div>
                        <div class="form-group">
                            <label for="tarikh-lahir" style="font-size: 17px;font-weight: 800;color: #333333;">2. Tarikh Lahir Bayi</label>
                            <input name="tarikh-lahir" class="form-control" id="tarikh-lahir" placeholder="Pilih Tarikh lahir bayi">
                        </div>
                        <div class="form-group">
                            <label for="jantina" style="font-size: 17px;font-weight: 800;color: #333333;">3. Jantina Bayi</label>
                            <br>
                            <label class="radio-inline"><input type="radio" name="jantina" checked value="lelaki">Lelaki</label>
                            <label class="radio-inline"><input type="radio" name="jantina" value="perempuan">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <label for="nama-ibu-bapa" style="font-size: 17px;font-weight: 800;color: #333333;">4. Nama Ibu/Bapa</label>
                            <input type="text" name="nama-ibu-bapa" placeholder="eg. Ahmad Ali" class="form-control" id="nama-ibu-bapa">
                        </div>
                        <div class="form-group">
                            <label for="telefon" style="font-size: 17px;font-weight: 800;color: #333333;">5. No. Telefon</label>
                            <input type="text" name="telefon" placeholder="eg. 0123456789" class="form-control" id="telefon">
                        </div>
                        <div class="form-group">
                            <label for="email" style="font-size: 17px;font-weight: 800;color: #333333;">6. Email</label>
                            <input type="text" name="email" placeholder="eg. ali@gmail.com" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="alamat" style="font-size: 17px;font-weight: 800;color: #333333;">7. Alamat</label>
                            <input type="text" name="alamat" placeholder="eg. No. 2, Block B, Taman Tun.." class="form-control" id="alamat">
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-next">Seterusnya</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label for="alamat-penghantaran" style="font-size: 17px;font-weight: 800;color: #333333;">1. Alamat Penghantaran</label>
                            <textarea name="alamat-penghantaran" placeholder="Alamat"
                                      class="form-control" id="alamat-penghantaran"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tarikh-penghantaran" style="font-size: 17px;font-weight: 800;color: #333333;">2. Tarikh Penghantaran</label>
                            <input name="tarikh-penghantaran" class=" form-control" id="tarikh-penghantaran" placeholder="Pilih Tarikh Penghantaran">
                        </div>
                        <div class="form-group">
                            <label for="masa-penghantaran" style="font-size: 17px;font-weight: 800;color: #333333;">3. Masa Penghantaran</label>
                            <select class="form-control" id="masa-penghantaran">
                                <option hidden>Pilih masa penghantaran</option>
                                <option value="8:00">8:00 AM</option>
                                <option value="9:00">9:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">1:00 PM</option>
                                <option value="14:00">2:00 PM</option>
                                <option value="15:00">3:00 PM</option>
                                <option value="16:00">4:00 PM</option>
                                <option value="17:00">5:00 PM</option>
                                <option value="18:00">6:00 PM</option>
                                <option value="19:00">7:00 PM</option>
                                <option value="20:00">8:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tarikh-penyembelihan" style="font-size: 17px;font-weight: 800;color: #333333;">4. Tarikh Penyembelihan (Optional)</label>
                            <input name="tarikh-penyembelihan" class=" form-control" id="tarikh-penyembelihan" placeholder="Pilih Tarikh Penyembelihan">
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Kembali</button>
                            <button type="button" class="btn btn-next" id="next">Seterusnya</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h2 class="title text-center">Order Summary</h2>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Kuantiti Kambing</label></div>
                            <div class="col-xs-6"><p>{{ $kuantiti }}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Kawasan Penghantaran</label></div>
                            <div class="col-xs-6"><p>{{ $kawasan }}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Tarikh Penghantaran</label></div>
                            <div class="col-xs-6"><p>{{ $tarikh }}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Jenis Aqiqah 1</label></div>
                            <div class="col-xs-6"><p>{{ $aqiqah1 }}</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Berat/Jenis Kambing 1</label></div>
                            <div class="col-xs-6"><p>{{ $berat1 }}</p></div>
                        </div>

                        @if($aqiqah2)
                            <div class="row">
                                <div class="col-xs-6" style="text-align: right;"><label>Jenis Aqiqah 2</label></div>
                                <div class="col-xs-6"><p>{{ $aqiqah2 }}</p></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="text-align: right;"><label>Berat/Jenis Kambing 2</label></div>
                                <div class="col-xs-6"><p>{{ $berat2 }}</p></div>
                            </div>
                        @endif

                        <div class="col-xs-12" style="margin-top: 24px">
                            <h4 class="text-center">Butiran Bayi</h4>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Nama Bayi</label></div>
                            <div class="col-xs-6"><p id="namaBayi">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Tarikh Lahir Bayi</label></div>
                            <div class="col-xs-6"><p id="tarikhLahir">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Jantina Bayi</label></div>
                            <div class="col-xs-6"><p id="jantinaBayi">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Nama Ibu/Bapa</label></div>
                            <div class="col-xs-6"><p id="namaIbuBapa">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>No. Telefon</label></div>
                            <div class="col-xs-6"><p id="noTelefon">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Alamat</label></div>
                            <div class="col-xs-6"><p id="alamatBayi">-</p></div>
                        </div>

                        <div class="col-xs-12" style="margin-top: 24px">
                            <h4 class="text-center">Butiran Penghantaran</h4>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Alamat Penghantaran</label></div>
                            <div class="col-xs-6"><p id="alamatPenghantaran">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Tarikh Penghantaran</label></div>
                            <div class="col-xs-6"><p id="tarikhPenghantaran">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Masa Penghantaran</label></div>
                            <div class="col-xs-6"><p id="masaPenghantaran">-</p></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="text-align: right;"><label>Tarikh Penyembelihan</label></div>
                            <div class="col-xs-6"><p id="tarikhPenyembelihan">-</p></div>
                        </div>

                        <div class="col-xs-12" style="margin-top: 24px">
                            <h4 class="text-center">Akad</h4>
                        </div>
                        <div class="col-xs-12">
                            <p>Saya bersetuju untuk mewakilkan kepada pihak theaqiqah.com/legit asia sdn bhd (1237440-H) untuk menguruskan pemilihan, pembelian dan penyembelihan kambing aqiqah untuk anak saya <span id="temp-nama-bayi"></span> bagi pihak saya.</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" style="text-align: right;">
                                <input type="checkbox" name="setuju" class="form-control" style="height: 16px;" required>
                                <h3>RM {{ $total }}</h3>
                            </div>
                        </div>
                        <div class="f1-buttons">
                            <button type="button" class="btn btn-previous">Kembali</button>
                            <button type="submit" class="btn btn-submit">Buat Pembayaran</button>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</section>
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

<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
<script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/retina-1.1.0.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( function() {
        $( "#tarikh-lahir" ).datepicker({
            maxDate: +0
        });
        $( "#tarikh-penghantaran" ).datepicker({
            minDate: +4
        });
        $( "#tarikh-penyembelihan" ).datepicker();
    } );
    function goToByScroll(id){
        $('html,body').animate({
            scrollTop: $("#"+id).offset().top
        },'slow');
    }

    $(document).ready(function(){
        var namaBayi = $('#nama-bayi');
        var tempNama = $('#temp-nama-bayi');
        var tarikhLahir = $('#tarikh-lahir');
        var namaIbuBapa = $('#nama-ibu-bapa');
        var noTelefon = $('#telefon');
        var alamatBayi = $('#alamat');
        var alamatPenghantaran = $('#alamat-penghantaran');
        var tarikhPenghantaran = $('#tarikh-penghantaran');
        var tarikhPenyambelihan = $('#tarikh-penyembelihan');

        namaBayi.change(function () {
            $('#namaBayi').text($(this).val());
            tempNama.text($(this).val());
        });

        tarikhLahir.change(function () {
           $('#tarikhLahir').text($(this).val());
        });

        namaIbuBapa.change(function () {
            $('#namaIbuBapa').text($(this).val());
        });

        noTelefon.change(function () {
            $('#noTelefon').text($(this).val());
        });

        alamatBayi.change(function () {
            $('#alamatBayi').text($(this).val());
        });

        alamatPenghantaran.change(function () {
            $('#jantinaBayi').text($('input[type=radio][name=jantina]:checked').parent('label').text());
            $('#alamatPenghantaran').text($(this).val());
        });

        tarikhPenghantaran.change(function () {
            $('#tarikhPenghantaran').text($(this).val());
        });

        tarikhPenyambelihan.change(function () {
            $('#tarikhPenyembelihan').text($(this).val());
        });

        $('#next').click(function () {
            $('#masaPenghantaran').text($('#masa-penghantaran').find(":selected").text());
        });

        // ===== Scroll to Top ====
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
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
    });
</script>
</body>
</html>