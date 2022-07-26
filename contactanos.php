<?php
include_once('controllers/funciones.php');

getBeneficiosList();
getContentEnterprise();
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
    <?php include_once('layouts/nav.php') ?>
    <!-- ==================== Start Slider ==================== -->

    <header class="works-header fixed-slider hfixd valign" style="background-color:#2bbdb9;min-height:50vh !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="parlx">
                            <h2 class="custom-font" style="color:white !important">QUIERES EMPEZAR EL CAMBIO, CONTÁCTANOS</h2>
                            <!--<p style="color:black !important">Consúltenos cualquier pregunta, estaremos atentos para solventar todas sus dudas.</p>-->
                        </div>

                        <div class="bactxt custom-font valign">
                            <span class="full-width">Contacto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <div class="main-content">

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="extra-title mb-50">Ponerse en contacto.</h4>

                            <form action="contactanos.php" method="post">

                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                        <input id="form_name" type="text" name="names" placeholder="Nombres" required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_number" type="number" name="number" placeholder="Número telefónico" required="required">
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="text" placeholder="Mensaje" rows="4" required="required"></textarea>
                                    </div>

                                    <button type="submit" class="btn-curve btn-color" name="submit"><span>Enviar Mensaje</span></button>
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
                            <a href="https://api.whatsapp.com/send?phone=51912941447&text=Hola,%20vengo%20desde%20la%20web%20de%20Tech%20AgilE" class="icon">
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

        <!-- ==================== End Contact ==================== -->

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


        <!-- ==================== Start Map ==================== -->

        <!-- <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31695.21331265009!2d-79.8665500979129!3d-6.78182102086502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cef232963dfff%3A0xa703e3454a7814bb!2sChiclayo!5e0!3m2!1ses!2spe!4v1626282519531!5m2!1ses!2spe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> -->

        <!-- ==================== End Map ==================== -->

        <?php include_once('layouts/footer.php') ?>
    </div>
    <?php include_once('layouts/scripts.php') ?>
</body>

</html>