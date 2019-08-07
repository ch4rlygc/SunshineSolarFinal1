<?php
/**
 * Created by PhpStorm.
 * User: UsuarioDell
 * Date: 3/03/2019
 * Time: 17:23
 */

//variables for the get price Form

$productName =;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130645683-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130645683-2');
    </script>

    <link rel="icon" href="../img/icon/logo.ico" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>sunsnine solar</title>

    <!-- Icon css link -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="../vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="../vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="../vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="../vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendors/magnify-popup/magnific-popup.css" rel="stylesheet">


    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-3.2.1.min.js"></script>

    <!-- Products Load -->
    <script src="../js/products.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->
</head>
<body>
<!--<div id="content-load">
    <div id="load"><img src="../img/load.png" alt=""></div>
</div>-->
<script>
    /*window.onload = () =>{
        /*var contentLoad = document.getElementById('content-load');

        contentLoad.style.visibility = 'hidden';
        contentLoad.style.opacity = '0';
    }*/
</script>

<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="../img/logo1.png" class="brandImg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio </a></li>
                <li class="nav-item"><a class="nav-link" href="index.html#whoweare">Nosotros </a></li>
                <li class="nav-item"><a class="nav-link" href="more.html">Información</a></li>
                <li class="nav-item active"><a class="nav-link" href="products.html">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contacto</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language fa-lg" aria-hidden="true"></i> Language
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../eng/products.html">English</a>
                        <a class="dropdown-item" href="index.html">Español</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h2>Productos</h2>
            <p>Nuestros productos</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Portfolio Area =================-->



<section class="portfolio_area">
    <div class="container">
        <div class="portfolio_filter">
            <ul>
                <li class="active" data-filter="*"><a href="#">Todo</a></li>
                <li data-filter=".panels"><a href="#">Paneles solares</a></li>
                <li data-filter=".batteries"><a href="#">Baterías</a></li>
                <li data-filter=".inv"><a href="#">Inversores</a></li>
                <li data-filter=".cont"><a href="#">Controladores</a></li>
                <li data-filter=".lights"><a href="#">Luces LED</a></li>
                <li data-filter=".lamps"><a href="#">Lámparas LED</a></li>
            </ul>
        </div>
    </div>
    <div class="ms_portfolio_inner">
        <!-- Panels -->
        <div class="row">
            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel0/panel0.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel solar de 280W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel0">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="firstPanelTitle">Panel solar de 280W |Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel0/panel0.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>35.0V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>280W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares internacionales de Cálidad</p>
                                    <?php
                                      $productName = "Panel solar de 280W";
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ******************************************************************************************************************************* -->


            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel1/panel1.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel solar de 260W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel1">Ver detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="SecondPanelTitle">Panel solar de 260W | |Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel1/panel1.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>29.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>260W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ******************************************************************************************************************************* -->



            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel2/panel2.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel Solar de 150W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel2">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="thirdPanelTitle">Panel Solar de 150W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel2/panel2.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>150W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ******************************************************************************************************************************* -->

            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel3/panel3.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel Solar de 80W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel3">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="fourthPanelTitle">Panel Solar de 80W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel3/panel3.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>80W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ************************************************************************************************* -->

    <div class="ms_portfolio_inner">
        <!-- Panels -->
        <div class="row">
            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel4/panel4.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel Solar de 70W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel4">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="fifthPanelTitle">Panel Solar de 70W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel4/panel4.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>70W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ******************************************************************************************************************************* -->


            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel5/panel5.1.jpg" alt="" class="">
                <div class="center_c">

                    <h3>Panel Solar de 60W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel5">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="5PanelTitle">Panel Solar de 60W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel5/panel5.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>60W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ******************************************************************************************************************************* -->



            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel6/panel6.1.jpg" alt="">
                <div class="center_c">
                    <h3>Panel Solar de 40W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel6">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="seventh">Panel Solar de 40W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel6/panel6.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>40W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ******************************************************************************************************************************* -->

            <div class="col-md-3 col-sm-12 ms_p_item brand arc panels">
                <img src="../img/products/panel7/panel7.1.jpg" alt="">
                <div class="center_c">

                    <h3>Panel Solar de 20W</h3>
                    <!--<p>Description of panel</p>--><br>
                    <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#panel7">Ver Detalles</button>
                    <br><br>
                </div>
            </div>
            <div class="modal fade" id="panel7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eighth">Panel Solar de 20W | Tecnología Alemana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img class="d-block w-100" src="../img/products/panel7/panel7.1.jpg" alt="First slide">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Voltaje: <strong>17.5V</strong></p>
                                    <p>Poder Máximo (pmax): <strong>20W</strong></p>
                                    <p>Material: <strong>Silicio</strong></p>
                                    <p>AM = <strong>1.5</strong></p>
                                    <p>Estándares Internacionales de Cálidad.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/logo2.png" class="cardLogo" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ************************************************************************************************** -->
    <div class="ms_portfolio_inner">
        <!-- Batteries -->

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc batteries">
            <img src="../img/products/battery1/battery1.1.jpg" alt="">
            <div class="center_c">

                <h3>Batería de 150 AH</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#battery1">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="battery1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstBatteryTitle">Batería de gel de ciclo profundo | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="firstBattery" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery1/battery1.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery1/battery1.2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery1/battery1.3.jpg" alt="Third slide" style="padding: 0 0 0.5em;">
                                </div>
                                <a class="carousel-control-prev" href="#firstBattery" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#firstBattery" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>AH: <strong>150</strong></p>
                                <p>Voltios: <strong>12V</strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Tamaño Compacto</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc batteries">
            <img src="../img/products/battery2/battery2.1.1.jpg" alt="">
            <div class="center_c">

                <h3>Batería de 150 AH</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#battery2">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="battery2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="secondBatteryTitle">Batería de gel de ciclo profundo | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="secondBattery" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery2/battery2.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery2/battery2.2.jpg" alt="Second slide" style="height: auto !important; margin: 3.7em auto 6em auto;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery2/battery2.3.jpg" alt="Third slide" style="padding: 0 0 0.5em;">
                                </div>
                                <a class="carousel-control-prev" href="#secondBattery" role="button" data-slide="prev">|
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#secondBattery" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>AH: <strong>150</strong></p>
                                <p>Voltios: <strong>12V</strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc batteries">
            <img src="../img/products/battery3/battery3.1.1.jpg" alt="">
            <div class="center_c">

                <h3>Batería de 50 AH</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#battery3">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="battery3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="thirdBatteryTitle">Batería de gel de ciclo profundo | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="thirdBattery" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery3/battery3.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery3/battery3.2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/battery3/battery3.3.jpg" alt="Third slide" style="padding: 0 0 0.5em;">
                                </div>
                                <a class="carousel-control-prev" href="#thirdBattery" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#thirdBattery" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>AH: <strong>50</strong></p>
                                <p>Voltios: <strong>12V</strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Tamaño Compacto</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

    </div>





    <!-- ************************************************************************************************** -->
    <!-- Controladores e inversores -->

    <div class="ms_portfolio_inner">

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc cont">
            <img src="../img/products/cont1/cont1.1.jpg" alt="">
            <div class="center_c">

                <h3>Controlador MPPT 30 AMP</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#controller1">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="controller1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstControllerTitle">Controlador MPPT-30A| Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="firstController" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/cont1/cont1.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/cont1/cont1.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#firstController" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#firstController" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Voltios: <strong>12, 24, 36 & 48</strong></p>
                                <p>Max Poder:
                                    <strong>390W(12V)</strong> /
                                    <strong>780W(24v)</strong> /
                                    <strong>1170W(36v)</strong> /
                                    <strong>1560W(48V)</strong>
                                </p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Tamaño Compacto</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc inv">
            <img src="../img/products/inv1/inv1.1.jpg" alt="">
            <div class="center_c">

                <h3>Inversor de Onda Pura</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#inversor2">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="inversor2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstInversorTitle">Inversor de Onda Pura | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="firstInversor" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/inv1/inv1.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/inv1/inv1.2.jpg" alt="Second slide">
                                </div>
                                <!-- <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/inv2/inv2.3.png" alt="Third slide">
                                </div>-->
                                <a class="carousel-control-prev" href="#firstInversor" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#firstInversor" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Voltios: <strong>12, 12/24 & 24/48</strong></p>
                                <p>Onda Pura<strong></strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Tamaño Compacto</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->


        <!-- ********************************************************************************************** -->

    </div>



    <!-- ************************************************************************************************** -->


    <!-- ************************************************************************************************** -->
    <!-- LAMPARAS -->

    <div class="ms_portfolio_inner">

        <!-- ******************************************************************  **************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc lamps">
            <img src="../img/products/slamp1/slamp1.1.jpg" alt="">
            <div class="center_c">

                <h3>Lámpara LED Exterior 40W</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#sLamp1">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="sLamp1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstLampTitle">Lámpara LED Exterior 40W | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="firstSLamp" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 " src="../img/products/slamp1/slamp1.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 " src="../img/products/slamp1/slamp1.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#firstSLamp" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#firstSLamp" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Voltios: <strong>12 AC</strong></p>
                                <p>40 W<strong></strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc lamps">
            <img src="../img/products/slamp1/slamp1.1.jpg" alt="">
            <div class="center_c">

                <h3>Lámpara LED Exterior 30W</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#sLamp2">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="sLamp2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="secondLampTitle">Lámpara LED Exterior 30W | Tecnología Alemana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="secondSLamp" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../img/products/slamp2/slamp2.1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../img/products/slamp2/slamp2.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#secondSLamp" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#secondSLamp" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Voltios: <strong>12 AC</strong></p>
                                <p>30 W<strong></strong></p>
                                <p>Estándares Internacionales de Cálidad.</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->


        <!-- ********************************************************************************************** -->

    </div>



    <!-- ************************************************************************************************** -->


    <div class="ms_portfolio_inner">
        <!-- Lights -->

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc lights">
            <img src="../img/products/lamp1/lamp1.1.1.jpg" alt="">
            <div class="center_c">

                <h3>Luz LED ahorradora T8</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#light1">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="light1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstLightTitle">Luz LED ahorradora T8</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="firstLight" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp1/lamp1.3.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp1/lamp1.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#firstLight" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#firstLight" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>T8 <strong>LED</strong></p>
                                <p>60cm</p>
                                <p>Voltios: <strong>12V</strong></p>
                                <p>Alta eficiencia</p>
                                <p>Ahorradora</p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Producto de baja emisión de carbono y protección del medio ambiente</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc lights">
            <img src="../img/products/lamp2/lamp2.1.1.jpg" alt="">
            <div class="center_c">

                <h3>Lámpara LED de alta potencia DC</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#light2">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="light2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="secondLightTitle">Lámpara LED de alta potencia DC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="secondLight" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp2/lamp2.1.jpg" alt="First slide" style="height: 18em; margin-bottom: 5.2em;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp2/lamp2.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#secondLight" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#secondLight" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>DC12V</strong></p>
                                <p>30cm</p>
                                <p>Color: <strong>Blanca</strong></p>
                                <p>Alta Eficiencia</p>
                                <p>Ahorradora</p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Producto de baja emisión de carbono y protección del medio ambiente</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

        <div class="col-md-4 col-sm-12 ms_p_item brand arc lights">
            <img src="../img/products/lamp3/lamp3.1.1.jpg" alt="">
            <div class="center_c">

                <h3>Lámpara LED de alta potencia DC</h3>
                <!--<p>Description of panel</p>--><br>
                <button type="button" class="btn btn-success details" data-toggle="modal" data-target="#light3">Ver Detalles</button>
                <br><br>
            </div>
        </div>
        <div class="modal fade" id="light3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="thirdLightTitle">Lámpara LED de alta potencia DC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="thirdLight" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp3/lamp3.1.jpg" alt="First slide" style="height: 18em; margin-bottom: 5.2em;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 bigImage2" src="../img/products/lamp3/lamp3.2.jpg" alt="Second slide">
                                </div>
                                <a class="carousel-control-prev" href="#thirdLight" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                                <a class="carousel-control-next" href="#thirdLight" role="button" data-slide="next">
                                    <i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>DC12V</strong></p>
                                <p>15cm</p>
                                <p>Color: <strong>Blanca</strong></p>
                                <p>Alta Eficiencia</p>
                                <p>Ahorradora</p>
                                <p>Estándares Internacionales de Cálidad.</p>
                                <p>Producto de baja emisión de carbono y protección del medio ambiente</p>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkPrice">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ********************************************************************************************** -->

    </div>
</section>

<!-- Cotizar modal -->
<div class="modal fade" id="checkPrice" tabindex="-1" role="dialog" aria-labelledby="checkPriceTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkPriceTitle">Cotizar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="contact_us_form row" action="" method="post" id="contactForm" novalidate="novalidate">
                    <div class="form-group col-sm-3">
                        <input type="text" class="form-control" id="id_product" name="id_product" placeholder="Producto">
                    </div>
                    <div class="form-group col-sm-3">
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Cantidad" min="1" value="1" required>
                    </div>

                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="tel" class="form-control" id="number" name="number" placeholder="Teléfono">
                    </div>

                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Empresa">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Pís, departamento o ciudad" required>
                    </div>

                    <div class="form-group col-lg-12">
                        <button type="submit" value="submit" class="btn submit_btn form-control" >Quote</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Cotizar modal -->

<!--================End Portfolio Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_copyright">
        <div class="container">
            <div class="float-sm-left">
                <h5>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sunshine Solar, S.A. All rights reserved | Made with  <a href="https://colorlib.com" target="_blank">Colorlib</a> and powered by <a href="https://bitcoude.com/" target="_blank">Bit Coude</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
            <div class="float-sm-right">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<!-- Extra plugin css -->
<script src="../vendors/counterup/jquery.waypoints.min.js"></script>
<script src="../vendors/counterup/jquery.counterup.min.js"></script>
<script src="../vendors/counterup/apear.js"></script>
<script src="../vendors/counterup/countto.js"></script>
<script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="../vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../vendors/circle-bar/circle-progress.min.js"></script>
<script src="../vendors/circle-bar/plugins.js"></script>
<script src="../vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="../vendors/isotope/isotope.pkgd.min.js"></script>

<script src="../js/circle-active.js"></script>
<script src="../js/theme.js"></script>

</body>
</html>
