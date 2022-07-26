<?php

include_once('../controllers/funciones.php');
session_start();
getContentEnterprise();

if (isset($_POST['nosotros']) && isset($_POST['mision']) && isset($_POST['vision']) && isset($_POST['valores'])) {


    $nosotros = $_POST['nosotros'];
    $mision = $_POST['mision'];
    $vision = $_POST['vision'];
    $valores = $_POST['valores'];

    editContentEnterprise($nosotros, $mision, $vision, $valores);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../img/favicon.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="../assets/styles/tailwind.css" />
    <link rel="stylesheet" href="../js/dropzone-5.7.0/dropzone.css" />
    <title>Dashboard | Tech Agile</title>
</head>

<body class="text-blueGray-700 antialiased">

    <div id="root">
        <!-- NAVEGADOR VERTICAL -->
        <?php include_once('navs/nav-ver.php') ?>
        <div class="relative md:ml-64 bg-blueGray-50">
            <!-- NAVEGADOR HORIZONTAL -->
            <?php include_once('navs/nav-hor.php') ?>
            <!-- Header -->
            <div class="relative bg-purple-500 md:pt-32 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                </div>
            </div>



            <div class="px-4 md:px-10 mx-auto w-full -mt-40 mb-8">
                <div class="  relative  flex flex-col  min-w-0  break-words  w-full  mb-6  shadow-lg  rounded-lg  bg-blueGray-100  border-0  ">
                    <form action="empresa.php" method="post">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-blueGray-700 text-xl font-bold"> ¿Quiénes Somos? </h6> <button class=" bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150  " type="submit"> Guardar Cambios </button>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                            <h6 class=" text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase  "> Nosotros </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 " htmlFor="grid-password"> Sobre la empresa
                                        </label>
                                        <input type="text" name="nosotros" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['about']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300" />
                            <h6 class=" text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase" id="mision"> Misión </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 " htmlFor="grid-password"> Misión de la empresa
                                        </label>
                                        <input type="text" name="mision" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['mision']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300" />
                            <h6 class=" text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase" id="vision"> Visión </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 " htmlFor="grid-password"> Visión de la empresa
                                        </label>
                                        <input type="text" name="vision" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['vision']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-6 border-b-1 border-blueGray-300" />
                            <h6 class=" text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase" id="#vision"> Valores </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 " htmlFor="grid-password"> Valores de la empresa
                                        </label>
                                        <input type="text" name="valores" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['valores']; ?>" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script type="text/javascript">
            /* Make dynamic date appear */
            (function() {
                if (document.getElementById("get-current-year")) {
                    document.getElementById("get-current-year").innerHTML = new Date().getFullYear();
                }
            })();
            /* Sidebar - Side navigation menu on mobile/responsive mode */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("bg-white");
                document.getElementById(collapseID).classList.toggle("m-2");
                document.getElementById(collapseID).classList.toggle("py-3");
                document.getElementById(collapseID).classList.toggle("px-6");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                }
                Popper.createPopper(element, document.getElementById(dropdownID), {
                    placement: "bottom-start",
                });
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }
        </script>
</body>

</html>
?>