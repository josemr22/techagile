<?php
include_once('controllers/funciones.php');

getServicesList();
getBeneficiosList();
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
                        <h1>Nuestros Servicios</h1>
                        <h4 style="color:black !important; margin-bottom: 2rem;">Tecnolog&iacute;a &aacute;gil en tus manos</h4>
                        <div class="path">
                            <a href="index.php">Home</a><span>/</span><a href="#0" class="active">Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <div class="main-content">

        <!-- ==================== Start Works ==================== -->

        <section class="work-carousel caroul sub-bg position-re">
            <div class="container-fluid mt-100">
                <div class="sec-head custom-font text-center">

                    <h3 class="wow" data-splitting>Servicios</h3>
                    <span class="tbg">Servicios</span>
                </div>
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper mb-4">
                                <?php while ($row = mysqli_fetch_assoc($GLOBALS['services'])) { ?>
                                    <div class="swiper-slide">
                                        <div class="content wow fadeInUp" data-wow-delay=".3s">
                                            <div class="item-img bg-img wow imago" data-background="<?php echo substr($row['img_sv'], 3); ?>">
                                            </div>
                                            <div class="cont bgbox">
                                                <h6>
                                                    <a>Nuestros servicios</a>
                                                </h6>
                                                <h4>
                                                    <a> <?php echo $row['name_sv']; ?></a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                                <i class="ion-ios-arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                                <i class="ion-ios-arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Works ==================== -->

        <!-- ==================== Start Beneficios ==================== -->

        <section class="blog-grid section-padding">
            <div class="container">
                <div class="sec-head custom-font text-center">
                    <h3 class="wow" data-splitting>Beneficios</h3>
                    <span class="tbg">Nuestros</span>
                </div>
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($GLOBALS['beneficios'])) { ?>
                        <div class="col-lg-4 mb-4">
                            <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".3s">

                                <div class="cont sub-bg">

                                    <h6>
                                        <a href="#0"><?php echo $row['name_bn']; ?></a>
                                    </h6>
                                    <div class="btn-more custom-font">
                                        <p class="simple-btn">Beneficios</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- ==================== End Beneficios ==================== -->

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