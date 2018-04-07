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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>

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
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
            border: 1px solid #eeeeee;
            margin-bottom: 8px !important;
        }
        .card .card-body {
            background-color: #eeeeee;
            padding: 24px;
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
<header style="margin-top: 80px;">
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h2 class="title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </div>
</header>
<section style="padding: 32px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-sm-12 col-xs-12">
                <div id="accordion" role="tablist">
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    TheAqiqah ini syarikat berdaftar ke?
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Ya. Kami adalah syarikat berdaftar di bawah Suruhanjaya Syarikat Malaysia (SSM) dengan nama LEGIT ASIA SDN BHD. Nombor pendaftaran kami ialah 1237440-H.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    TheAqiqah ini apa sebernarnya?
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Kami adalah satu platform untuk menghubungkan penternak kambing dengan pelanggan. Kami bekerja rapat dengan penternak bagi memastikan servis yang diberi menepati piawaian yang ditentukan.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Servis apakah yang ditawarkan oleh TheAqiqah?
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Kami menawarkan perkhidmatan aqiqah berpakej yang termasuk tenaga kerja untuk menyembelih, memasak dan memanggang kambing. Servis tambahan seperti "add on" set nasi dan kambing frozen panggang juga ada ditawarkan atas permintaan
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingFive">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Saya tak pasti pakej aqiqah yang mana perlu saya pilih.
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                Sila hubungi +6013 266 2889 untuk bantuan pemilihan pakej yang bersesuaian dengan kadar majlis anda.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingSix">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Bagaimana boleh saya membuat pembayaran?
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                Anda boleh bayar pekerja apabila peralatan atau makanan sampai ke destinasi atau melalui pembayaran secara online.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingSeven">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Saya mempunyai syarikat yang memerlukan katering kambing dengan kerap. Saya perlukan harga yang lebih rendah.
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                Boleh. Sila hubungi kami di talian +6013 266 2889 untuk berbincang dengan lanjut.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingEight">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Saya mempunyai ladang ternakan kambing dan berminat untuk menyertai TheAqiqah.
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                Kami mengalu-alukan penternak untuk menyertai jaringan TheAqiqah. Sila hubungi theaqiqah.com@gmail.com atau +60 13 266 2889 untuk berbincang dengan lebih lanjut.
                            </div>
                        </div>
                    </div>
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingNine">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Bagaimana untuk membatalkan tempahan yang telah dibuat?
                                    <i class="fa fa-plus" style="float: right;" aria-hidden="true"></i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body">
                                Sila berikan nombor tempahan anda dan hubungi kami di +6013 2662889.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="background-color: #eeeff3;padding: 32px 0" id="contact-us">
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

    $(document).ready(function(){

        // ===== Scroll to Top ====
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 700) {        // If page is scrolled more than 50px
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