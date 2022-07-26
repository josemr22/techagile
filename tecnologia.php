<?php
include_once('controllers/funciones.php');

getContentSlider1();
getContentSlider2();
getContentSlider3();
getImagesGallery();
getClientsList();
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

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo substr($GLOBALS['img1'], 3); ?>" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting> <?php echo $GLOBALS['title1'] ?> </h1>
                                        <p><?php echo $GLOBALS['desc1'] ?></p>
                                        <a href="servicios.php" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo substr($GLOBALS['img2'], 3); ?>" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting><?php echo $GLOBALS['title2'] ?></h1>
                                        <p><?php echo $GLOBALS['desc2'] ?></p>
                                        <a href="servicios.php" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php echo substr($GLOBALS['img3'], 3); ?>" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting> <?php echo $GLOBALS['title3'] ?></h1>
                                        <p><?php echo $GLOBALS['desc3'] ?></p>
                                        <a href="servicios.php" class="btn-curve btn-lit mt-30">
                                            <span>Ver más</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm custom-font"></div>

            <div class="social-icon">
                <a href="https://www.facebook.com/Tech-Agile-Perú-109801391396207"><i class="fab fa-facebook-f"></i></a>
                <a href="https://api.whatsapp.com/send?phone=51912941447&text=Hola,%20vengo%20desde%20la%20web%20de%20Tech%20Agile"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/company/75011020/admin/"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    <div class="main-content">


        <!-- ==================== Start Servicios ==================== -->

        <section class="services section-padding sub-bg">
            <div class="container">
                <div class="sec-head custom-font tr-head">
                    <h6>Nuestra mejor selección</h6>
                    <h3>Servicios.</h3>
                    <span class="tbg">Servicios</span>
                </div>
                <div class="row">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="step-item xtop ycolor">
                            <span class="icon pe-7s-phone"></span>
                            <h6>Desarrollo de Aplicaciones Móviles </h6>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                        <div class="step-item xtop xcolor">
                            <span class="icon pe-7s-link"></span>
                            <h6>Integración <br> de <br> Sistemas </h6>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".9s">
                        <div class="step-item xtop" style="background:#3fc1c6;">
                            <span class="icon pe-7s-display1"></span>
                            <h6>Desarrollo de Software a Medida </h6>
                            <p color="white"></p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".12s">
                        <div class="step-item xtop xcolor zcolor">
                            <span class="icon pe-7s-cart"></span>
                            <h6>Desarrollo de Tiendas Virtuales </h6>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="smore custom-font">
                    <a href="#0">Entérate más aquí</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </section>

        <!-- ==================== End Servicios ==================== -->


        <!-- ==================== Start about ==================== -->

        <div class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img-mons">
                            <div class="row">
                                <div class="col-md-5 cmd-padding valign">
                                    <div class="img1 wow imago" data-wow-delay=".5s">
                                        <img src="img/slider/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 cmd-padding">
                                    <div class="img2 wow imago" data-wow-delay=".3s">
                                        <img src="img/slider/3.jpg" alt="">
                                    </div>
                                    <div class="img3 wow imago" data-wow-delay=".8s">
                                        <img src="img/slider/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="content">
                            <div class="sub-title">
                                <h6>Sobre Nosotros</h6>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <h3 class="main-title wow" data-splitting>Somos la organización <br> que te brindará lo que buscabas.</h3>
                            <p class="wow txt" data-splitting>Somos una empresa que brinda los servicios de asesoría, consultoría y desarrollo de software enfocada en soluciones de negocio mediante el empleo de la tecnología de la información.</p>
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
        </div>

        <!-- ==================== End about ==================== -->


        <!-- ==================== Start Galería ==================== -->

        <section class="work-carousel section-padding pt-0 metro position-re" style="display:none;">
            <div class="container ontop">
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php while ($row = mysqli_fetch_assoc($GLOBALS['gallery'])) { ?>
                                    <div class="swiper-slide">
                                        <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                            <div class="item-img bg-img wow imago" data-background="<?php echo substr($row['url_gy'], 3); ?>">
                                            </div>
                                            <div class="cont">
                                                <!-- <h4><a href="servicios.php">Desarrollo de Aplicaciones Móviles</a></h4> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                                <span class="simple-btn right">prev</span>
                            </div>
                            <div class=" swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                                <span class="simple-btn">next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="half-bg top"></div>
        </section>

        <!-- ==================== End Galería ==================== -->


        <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding" id="clientes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign">
                        <div class="sec-head custom-font mb-0">
                            <h6>Clientes</h6>
                            <h3>Nuestros <br> Clientes.</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord">
                                <?php while ($row = mysqli_fetch_assoc($GLOBALS['clients'])) { ?>
                                    <div class="col-md-3 col-6 brands">
                                        <div class="item wow fadeIn" data-wow-delay=".3s">
                                            <div class="img">
                                                <img src="<?php echo substr($row['img_cl'], 3); ?>" alt="">
                                                <a href="#0" class="link" data-splitting><?php echo $row['link_cl']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End clients Brands ==================== -->


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