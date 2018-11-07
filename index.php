<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Gasket</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon_HXc.ico">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/css/slick/slick.css">
    <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--End off Preloader -->

    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default bootsnav navbar-fixed">
            <div class="navbar-top bg-grey fix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-6 col-md-6">
                            <div class="navbar-socail text-right sm-text-center">
                                <ul class="list-inline">
                                    <li class="no-padding-right" id="lang_en"><a onclick="setEN()"><i class="fa fa-language"></i></a></li>
                                    <li class="no-padding-right" id="lang_rs"><a onclick="setRS()"><i class="fa fa-language"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->


            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="navbar-brand div-wrapper">
                        <a class="" href="#home">
                            <img src="assets/images/logo.png" class="logo" alt="">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>
                    </div>

                </div>
                <!-- End Header Navigation -->

                <!-- navbar menu -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" id="n_naslovna">Naslovna</a></li>
                        <li><a href="#product" id="n_galerija">Galerija</a></li>
                        <li><a href="#business" id="n_onama">O nama</a></li>
                        <li><a href="#contact" id="n_kontakt">Kontakt</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>

        <!--Home Sections-->

        <section id="home" class="home bg-black fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home text-center">
                        <div class="col-md-12">
                            <div class="hello_slid">
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h1 class="text-gray" id="kvalitet">KVALITET</h1>
                                    </div>
                                </div><!-- End off slid item -->
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h1 class="text-gray" id="profesionalnost">PROFESIONALNOST</h1>
                                    </div>
                                </div><!-- End off slid item -->
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h1 class="text-gray" id="tradicija">TRADICIJA</h1>
                                    </div>
                                </div><!-- End off slid item -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End off row-->
            </div>
            <!--End off container -->
        </section>
        <!--End off Home Sections-->



        <!--product section-->
        <section id="product" class="product">
            <div class="container">
                <div class="main_product roomy-80">
                    <div class="head_title text-center fix">
                        <h2 class="text-uppercase" id="proizvodi">Proizvodi</h2>
                    </div>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class='carousel-inner' role='listbox'>

                            <?php 

                $directory = "assets/productImages";
                $all_images = glob($directory . "/*.jpg");
                $images2 = array();
                $images = array();
                foreach($all_images as $image)
                {
                    list($part1, $part2) = explode('_', $image);
                    array_push($images2, $part1);
                }
                $total = count($images2);
                for($i=0;$i<$total;$i=$i+2)
                {
                array_push($images, $images2[$i]);
                }
                $total = count($images);
                echo "<div class='carousel-inner' role='listbox'>";
                for($i=0;$i<$total;$i++)
                {
                    if($i == 0)
                    {
                        echo "
                        <div class='item active'>
                        <div class='container'>
                        <div class='row'>
                        ";
                    }

                    if($i % 4 == 0 && $i > 0)
                    {	
                        echo"
                        <div class='item'>
                        <div class='container'>
                        <div class='row'>";
                    }
                    echo " <div class='col-sm-3'>
                    <div class='port_item xs-m-top-30'>
                    <div class='port_img'>
                    <img src='$images[$i]";
                    echo "_small.jpg' alt='' />
                    <div class='port_overlay text-center'>
                    <a href='$images[$i]";
                    echo"_big.jpg' class='popup-img'>+</a>
                    </div>
                    </div>
                    </div>
                    </div>";

                    if((($i + 1) % 4 == 0 && $i > 0) || $i == $total - 1)
                    {	
                        echo"
                        </div>
                        </div>
                        </div>";
                    }
                }
                echo "
                </div>";
 
                   ?>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div><!-- End off row -->
            </div><!-- End off container -->
        </section><!-- End off Product section -->
        <!--Business Section-->
        <section id="business" class="business bg-grey roomy-70 fix">
            <div class="container">
                <div class="row">
                    <div class="main_business">
                        <div class="col-md-6">
                            <div class="business_slid">
                                <div class="slid_shap bg-grey"></div>
                                <div class="business_items text-center">
                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="assets/images/about-img1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="assets/images/about-img2.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="business_item">
                                        <div class="business_img">
                                            <img src="assets/images/about-img3.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="business_item">
                                <p id="onama"><b>Gasket</b> je porodična firma koja se bavi proizvodnjom ravnih zaptivki od svih
                                    nemetalnih zaptivnih materijala kao što su bezazbestni klingerit, guma, pluta,
                                    tehnička plastika (PE, PA, PTFE…), papir, itd. U svom proizvodnom pogonu
                                    raspolažemo sa CNC mašinama velikih razmera, laser mašinom kao i štanc presama sa
                                    obimnim brojem alata za izradu i najmanjih zaptivki. Proizvodnjom se bavimo još od
                                    2000. godine i najveći deo svojih proizvoda plasiramo u Republici Srbiji , dok naši
                                    dugogodišnji saradnici vrše izvoz van zemlje. Naše zaptivke se već dugi niz godina
                                    ugrađuju u većini energetskih postrojenja u Republici Srbiji. Pored Srpskog
                                    tržišta, naše zaptivke su se našle i na tržištima okolnih zemalja poput Republike
                                    Hrvatske, Crne Gore, Republike Makedonije, Bosne i Hercegovine i u daljim zemljama
                                    poput Ruske Federacije i Saudijske Arabije.
                                    Iz našeg širokog asortimana nudimo izradu prirubničkih zaptivki po sledećim
                                    standardima: EN1514-1, DIN 2690, BS EN 12560-1:2001 (ANSI B16.21).
                                    Osim prirubničkih, iz svog proizvodnog programa možemo ponuditi i zaptivke za
                                    holenderske spojeve kao i zaptivke za revizione otvore - manloh. Pored standardnih,
                                    nudimo i izradu nestandardnih zaptivki po crtežu ili uzorku bilo kog oblika i
                                    dimenzija. Na osnovu svog dugogodišnjeg iskustva u ovom poslu možemo ponuditi i
                                    konstruisanje specijalnih zaptivki za namene u svim granama industrije po potrebi
                                    kupaca. Možemo se pohvaliti da godišnje proizvedemo više od 150.000 zaptivki a da
                                    pritom ne dobijemo nijedan negativan komentar na naše proizvode na šta smo veoma
                                    ponosni jer je to glavni pokazatelj da svoj posao shvatamo veoma ozbiljno i
                                    profesionalno.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End off Business section -->


        <footer id="contact" class="footer action-lage bg-black p-top-80">
            <!--<div class="action-lage"></div>-->
            <div class="container">

                <div style="display: flex;">
                    <div class="footer-part">
                        <div class="item_icon"><i class="fa fa-location-arrow"></i><span class="text-white" style="padding-left: 0.3em;" id="lokacija">Lokacija:</span></div>
                        <div class="widget_ab_item_text">
                            <p>
                                18000, Niš
                            </p>
                        </div>
                    </div>
                    <div class="footer-part">
                        <div class="item_icon"><i class="fa fa-phone"></i><span class="text-white" style="padding-left: 0.3em;" id="telefon">Telefon:</span></div>
                        <div class="widget_ab_item_text">
                            <p><a href="tel:00381652291293">+381 65 229 12 93</a></p>
                        </div>
                    </div>
                    <div class="footer-part">
                        <div class="item_icon"><i class="fa fa-envelope-o"></i><span class="text-white" style="padding-left: 0.3em;">E-mail:</span></div>
                        <div class="widget_ab_item_text">
                            <p><a href="mailto:vladimir.gasket@hotmail.com">vladimir.gasket@hotmail.com</a></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                <div class="col-md-12">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                        © Made
                        by
                        <a href="mailto:vuksansvetozarevic@gmail.com">Vuteek</a>
                        2018. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer>

    </div>

    </div>

    <!-- JS includes -->
    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/language.js" type=""></script>
    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/css/slick/slick.js"></script>
    <script src="assets/css/slick/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>