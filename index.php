<!DOCTYPE html>
<html lang="en"><!-- Basic -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Site Metas -->
        <title>Display TT RSI YATOFA</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Pogo Slider CSS -->
        <link rel="stylesheet" href="css/pogo-slider.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">    
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        
        <link href="css/icon.css" rel="stylesheet">

        <!--[if lt IE 9]>-->
          <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
          <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->

        <!--<![endif]-->
        <script src="js/angular.min.js"></script>
    </head>
    <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

        <!-- LOADER -->
        <div id="preloader">
            <div class="loader">
                <img src="images/preloader.gif" alt="" />
            </div>
        </div>
        <!--end loader--> 
        <!-- END LOADER -->

        <!-- Start top bar -->
        <div class="main-top">
            <div class="row rounded-circle">

            </div>

        </div>
        <!-- End top bar -->

        <!-- Start header -->
        <header class="top-header">
            <nav class="navbar header-nav navbar-expand-md">

                <a class="navbar-brand" href="index.html"><img src="images/yatofa-logo.png" alt="image" style="width: 250px; height: 75px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href=""><img src="images/bpjskes1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>
                        <li><a class="nav-link" href=""><img src="images/bpjsket1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>
                        <li><a class="nav-link" href=""><img src="images/jasaraharja1.jpg" alt="image" style="width: 250px; height: 75px;"></a></li>                            
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End header -->
        <!--<hr>-->
        <!-- Start About us -->
        <div id="about" class="about-box" style="padding-top: 2px">
            <div class="about-a1" >
                <!--<div class="container">-->
                <div class="row">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row align-items-center about-main-info">
                                <div class="col-lg-12 col-md-12 col-sm-12 " ng-app="myApp" ng-controller="customersCtrl">
                                    </br><!-- comment -->
                                    <!--<i class="material-icons" style="font-size:36px">3d_rotation</i>-->
                                    
                                    <table class="table table-striped table-dark table-bordered"  >
                                        <thead style="font-size: 55px">
                                            <tr align="center">
                                                <th scope="col">NAMA KAMAR</th>
                                                <th scope="col">JUMLAH BED</th>
                                                <th scope="col">BED TERISI</th>
                                                <th scope="col">BED KOSONG</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 50px">
                                            <tr ng-repeat="x in names">
                                                <td scope="row"><i class="material-icons" style="font-size:48px;color:aqua">account_balance</i>&nbsp; {{ x.nm_bangsal}}</td>
                                                <td align="center"><i class="material-icons" style="font-size:48px;color:red">event_seat</i>&nbsp; <b>{{ x.jmlbed}}</b></td>
                                                <td align="center"><i class="material-icons" style="font-size:48px;color:yellow">hotel</i>&nbsp;<b>{{ x.jmlbedisi}}</b></td>
                                                <td align="center"><i class="material-icons" style="font-size:48px;color:greenyellow">accessible</i>&nbsp;<b>{{ x.jmlbedkosong}}</b></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <script>
                                        var app = angular.module('myApp', []);
                                        app.controller('customersCtrl', function ($scope, $http) {
                                            setInterval(function () {
                                                $http.get("getdisplay.php")
                                                        .then(function (response) {
                                                            $scope.names = response.data.records;
                                                        });
                                            }, 1000)

                                        });
                                    </script>
                                    </br><!-- comment -->

                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <!--<h2 style="font-size: 70px">INSTALASI FARMASI RSI YATOFA <br>MELAYANI ANDA ADALAH KEMULIAAN KAMI</h2>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>-->
                        <marquee bgcolor="skyblue" style="font-family: impact; font-size:50px; color:#cc0000;" >
                            DISPLAY TEMPAT TIDUR RS ISLAM YATOFA MELAYANI ANDA ADALAH KEMULIAAN KAMI
                        </marquee>
                    </div>
                </div>
            </div>

            <!--</div>-->
        </div>
    </div>
    <!-- End About us -->



        <!--<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>-->

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>	
    <script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>
