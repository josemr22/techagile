<?php
include_once('controllers/funciones.php');

getContentEnterprise();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php include_once('layouts/head.php') ?>

<body>

    <div id="preloader">
    </div>

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <?php include_once('layouts/nav.php') ?>
    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="img/slid/1.jpg" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Sobre Nosotros</h1>
                        <div class="path">
                            <a href="index.php">Home</a><span>/</span><a href="#0" class="active">Sobre Nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <div class="main-content">
        <!-- ==================== Start Intro ==================== -->

        <section class="intro-section section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="htit sm-mb30">
                            <h4>Quiénes somos?</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1 col-md-8">
                        <div class="text">
                            <p class="wow txt" data-splitting><?php echo $GLOBALS['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==================== Start about ==================== -->

            <div class="about" style="padding-bottom: 100px;">
                <div class="container">
                    <div class="col-lg-12 ">
                        <div class="content">

                            <div class="ftbox mt-30">
                                <ul>
                                    <li class="wow fadeIn" data-wow-delay=".3s">
                                        <span class="icon pe-7s-phone"></span>
                                        <h6 class="custom-font"> Desarrollo de Aplicaciones Móviles </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>

                                    <li class="space wow fadeIn" data-wow-delay=".5s">
                                        <span class="icon pe-7s-link"></span>
                                        <h6 class="custom-font">Integración de Sistemas </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn" data-wow-delay=".8s">
                                        <span class="icon pe-7s-display1"></span>
                                        <h6 class="custom-font">Desarrollo de Software a Medida </h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="space wow fadeIn" data-wow-delay=".5s">
                                        <span class="icon pe-7s-cart"></span>
                                        <h6 class="custom-font">Desarrollo de Tiendas Virtuales</h6>
                                        <div class="dots">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==================== End about ==================== -->
        </section>

        <!-- ==================== Start Minimal-Area ==================== -->

        <section class="min-area sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img">
                            <img class="thumparallax-down" src="servicio.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 valign" id="misvis">
                        <div class="content">
                            <h4 class="wow custom-font" data-splitting>Tech Agile</h4>
                            <p><?php echo $GLOBALS['about']; ?></p>
                            <ul class="feat">
                                <li class="wow fadeInUp" data-wow-delay=".2s">
                                    <h6><span>1</span> Nuestra Misión</h6>
                                    <p><?php echo $GLOBALS['mision']; ?></p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    <h6><span>2</span> Nuestra Visión</h6>
                                    <p><?php echo $GLOBALS['vision']; ?></p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".4s">
                                    <h6><span>2</span> Nuestros Valores</h6>
                                    <p><?php echo $GLOBALS['valores']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Minimal-Area ==================== -->

        <!-- ==================== Start call-to-action ==================== -->

        <section class="call-action section-padding bg-img" data-background="img/pattern.png">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Hablemos</h6>
                            <h2 class="wow custom-font" data-splitting>sobre su <b>próximo proyecto</b>.</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="contactanos.php" class="btn-curve btn-blc wow fadeInUp" data-wow-delay=".5s"><span>Contáctanos</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->



        <?php include_once('layouts/footer.php') ?>
    </div>
    <?php include_once('layouts/scripts.php') ?>
</body>

</html>