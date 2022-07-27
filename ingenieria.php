<?php
include_once('controllers/funciones.php');

getServicesList();
getBeneficiosList();
getContentEnterprise();
?>
<?php
if (isset($_POST['names']) && isset($_POST['email'])  && isset($_POST['text'])  && isset($_POST['number'])  && isset($_POST['submit'])) {
    $nameMsg = $_POST['names'];
    $emailMsg = $_POST['email'];
    $textMsg = $_POST['text'];
    $numberMsg = $_POST['number'];

    sendMessage($nameMsg, $emailMsg, $textMsg, $numberMsg);
}
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
        <?php include_once('layouts/nav-ingenieria.php') ?>
        <!-- ==================== Start Slider ==================== -->

        <header id="home" class="pages-header bg-img valign parallaxie" data-background="img/slid/1.jpg"
            data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cont text-center">
                            <h1>Ingeniería</h1>
                            <h4 style="color:black !important; margin-bottom: 2rem;">Ingeniería en tus manos</h4>
                            <!-- <div class="path">
                            <a href="index.php">Home</a><span>/</span><a href="#0" class="active">Servicios</a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->

        <div class="main-content">

            <!-- ==================== Start Works ==================== -->



            <section class="min-area sub-bg" id="quienes-somos">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img">
                                <img class="thumparallax-down" src="img/ingenieria/quienes-somos.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 valign" id="misvis">
                            <div class="content">
                                <h4 class="wow custom-font" data-splitting>Ingeniería</h4>
                                <p>Somos una empresa que brinda servicios de ingeniería, construcción y mantenimiento
                                    enfocado en soluciones de negocio.</p>
                                <ul class="feat">
                                    <li class="wow fadeInUp" data-wow-delay=".2s">
                                        <h6><span>1</span> Nuestra Misión</h6>
                                        <p>Solucionar sus problemas mediante propuestas eficientes e innovadoras que
                                            buscan rentabilizar los negocios de nuestros clientes.
                                        </p>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">
                                        <h6><span>2</span> Nuestra Visión</h6>
                                        <p>Ser socio estratégico en soluciones integrales.</p>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">
                                        <h6><span>2</span> Nuestros Valores</h6>
                                        <p>Valores, Compromiso, Innovación, Ética, Resiliencia</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="work-carousel caroul sub-bg position-re" id="servicios>
                <div class=" container-fluid mt-100">
                <div class="sec-head custom-font text-center">

                    <h3 class="wow" data-splitting>Servicios</h3>
                    <span class="tbg">Servicios</span>
                </div>
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper mb-4">
                                <?php
                                 $services = [
                                    [
                                        'title' => 'Ingeniería Civil',
                                        'image' => 'img/ingenieria/1.jpg',
                                    ],
                                    [
                                        'title' => 'Ingeniería Sanitaria',
                                        'image' => 'img/ingenieria/2.jpg',
                                    ],
                                    [
                                        'title' => 'Ingeniería Mecánica',
                                        'image' => 'img/ingenieria/3.jpg',
                                    ],
                                    [
                                        'title' => 'Ingeniería Eléctrica',
                                        'image' => 'img/ingenieria/4.png',
                                    ],
                                    [
                                        'title' => 'Ingeniería Electrónica',
                                        'image' => 'img/ingenieria/5.png',
                                    ],
                                    [
                                        'title' => 'Servicios Generales',
                                        'image' => 'img/ingenieria/6.png',
                                    ],
                                 ];
                                ?>
                                <?php foreach ($services as $service) { ?>
                                <div class="swiper-slide">
                                    <div class="content wow fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="<?php echo $service['image'] ?>">
                                        </div>
                                        <div class="cont bgbox">
                                            <h6>
                                                <a>Nuestros servicios</a>
                                            </h6>
                                            <h4>
                                                <a> <?php echo $service['title']; ?></a>
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
                                <?php 
                                    $clients = [
                                        [
                                            'name'=> 'Universidad de Piura',
                                            'image'=> 'img/ingenieria/clientes/u-piura.png',
                                        ]
                                    ];
                                ?>
                                <?php foreach ($clients as $client) { ?>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="<?php echo $client['image'] ?>" alt="">
                                            <a href="#0" class="link" data-splitting><?php echo $client['name']; ?></a>
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

        <!-- ==================== End Works ==================== -->

        <!-- Testimonials -->

        <section class="block-sec" id="testimonios">
            <div class="background bg-img section-padding pb-0" data-overlay-dark="8" style="background-image: url(/page/img/slider/5.jpg);background-size: cover;
    background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="vid-area">
                                <!-- <div class="vid-icon">
                                        <a class="vid" href="https://youtube.com/channel/UCNgyj7IxMFHXpgK3_f_j4oQ"
                                            target="_blanck">
                                            <div class="vid-butn">
                                                <span class="icon">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div> -->

                                <div class="cont">
                                    <h3 class="wow" data-splitting>Así somos. No hay otra forma de decirlo.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="testim-box" style="background-color: #2BBDB9!important;">
                                <div class="head-box">
                                    <h6 class="wow fadeIn" data-wow-delay=".5s">Nuestros Clientes Felices</h6>
                                    <h4 class="wow fadeInLeft" data-wow-delay=".5s">¿Qué dicen los clientes?</h4>
                                </div>
                                <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                                    <?php 
                                            $testimonials = [
                                               [
                                                   'autor' => 'Ingeniero Luis Vega Chicchon',
                                                   'profile' => 'Coordinador de Infraestructura de la Universidad de Piura',
                                                   'date' => 'Marzo 2022',
                                                   'image' => 'img/ingenieria/clientes/u-piura.png',
                                                   'content' => '“Tech Agile Peru ha sido un aliado para la Universidad de Piura, trabajando con nosotros para embellecer los ambientes para nuestra comunidad universitaria, los recomiendo por el nivel de compromiso y servicio, siempre pensando en el cliente”',
                                               ],
                                            ];
                                        ?>
                                    <?php foreach ($testimonials as $testimonial) { ?>
                                    <div class="item">
                                        <p style="color: #000"><?php echo $testimonial['content'] ?></p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <!-- <img src="<?php echo $testimonial['image'] ?>" alt=""> -->
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name custom-font">
                                                        <?php echo $testimonial['autor'] ?></h6>
                                                    <span
                                                        class="author-details"><?php echo $testimonial['profile'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->

        <!-- ==================== Start call-to-action ==================== -->

        <section class="contact section-padding" id="contactanos>
            <div class=" container">
            <div class="row" style="padding-top: 100px;">
                <div class="col-lg-6">
                    <div class="form md-mb50">

                        <h4 class="extra-title mb-50">Ponerse en contacto.</h4>

                        <form action="contactanos.php" method="post">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="form-group">
                                    <input id="form_name" type="text" name="names" placeholder="Nombres"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <input id="form_number" type="number" name="number" placeholder="Número telefónico"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" placeholder="Email"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <textarea id="form_message" name="text" placeholder="Mensaje" rows="4"
                                        required="required"></textarea>
                                </div>

                                <button type="submit" class="btn-curve btn-color" name="submit"><span>Enviar
                                        Mensaje</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="extra-title mb-50">Info de Contacto.</h4>
                        <h3 class="custom-font wow" data-splitting>Hablemos.
                        </h3>
                        <div class="item mb-40">
                            <h5><a href="#0"> Email : info@teagile.com</a></h5>
                            <h5>Teléfono : (+51) 912 941 447</h5>
                        </div>

                        <div class="social mt-50">
                            <a href="https://www.facebook.com/Tech-Agile-Perú-109801391396207" class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=51912941447&text=Hola,%20vengo%20desde%20la%20web%20de%20Tech%20AgilE"
                                class="icon">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/75011020/admin/" class="icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
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