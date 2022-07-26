<?php

include_once('../controllers/funciones.php');
session_start();
getClientsList();


if ($_FILES && isset($_POST['nameCliente']) && isset($_POST['linkCliente']) && isset($_POST['submit'])) {

    $nameCliente = $_POST['nameCliente'];
    $linkCliente = $_POST['linkCliente'];
    $archivo = $_FILES;

    uploadImageClient($nameCliente, $linkCliente, $archivo);
}

if (isset($_GET['id']) && isset($_POST['delete'])) {

    $id = $_GET['id'];

    deleteCliente($id);
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
                <div class="w-full lg:w-8/12 px-4">
                    <form action="clientes.php" method="post" enctype="multipart/form-data">
                        <div class=" relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0  ">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-blueGray-700 text-xl font-bold">
                                        Registrar cliente
                                    </h6>
                                    <button class=" bg-pink-500 text-white ctive:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded hadow hover:shadow-md outline-none ocus:outline-none mr-1 ease-linear transition-all duration-150 " type="submit" name="submit">
                                        Crear
                                    </button>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                                <h6 class=" text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase ">
                                    Completa la info
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2  " htmlfor="grid-password">
                                                Nombre o url
                                            </label>
                                            <input type="text" class=" border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  " value="" name="nameCliente">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2  " htmlfor="grid-password"> link </label>
                                            <input type="text" class=" border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  " value="" name="linkCliente">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-12/12 px-4" style="display: flex; flex-wrap: nowrap; justify-content: center; align-items: center; align-content: center;">
                                        <div class="relative w-6/12 pl-4 flex-initial">
                                            <label class="w-64 flex flex-col items-center px-4 py-4 bg-purple-500 text-white rounded-full shadow-lg tracking-wide uppercase  cursor-pointer hover:bg-purple-500 hover:text-white">
                                                <i class="fas fa-arrow-circle-up"><span>&nbsp; imagen</span></i>
                                                <input name="archivo" type="file" class="hidden">
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">


                            </div>
                        </div>
                    </form>

                </div>

            </div>

            <div class="px-4 md:px-10 mx-auto w-full mt-16 mb-8">
                <div class="w-full mb-12 px-4">
                    <div class="   relative   flex flex-col   min-w-0   break-words   w-full   mb-6   shadow-lg   rounded   bg-white ">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-lg text-blueGray-700">
                                        Lista de Clientes
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <!-- Projects table -->
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th class=" px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100 text-center">
                                            Nombre del Cliente
                                        </th>
                                        <th class=" px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100 text-center">
                                            Link de la web
                                        </th>



                                        <th class=" px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100  text-center "> Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($GLOBALS['clients'])) { ?>
                                        <tr>
                                            <th class=" border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center text-center" style="display: flex;align-content: center;justify-content: center;align-items: center;">
                                                <img src="<?php echo $row['img_cl']; ?>" class="h-12 w-12 bg-white rounded-full border" alt="...">
                                                <span class="ml-3 font-bold text-blueGray-600">
                                                    <?php echo $row['name_cl']; ?>
                                                </span>
                                            </th>
                                            <td class=" border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                                <?php echo $row['link_cl']; ?>
                                            </td>
                                            <td class=" border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center ">
                                                <form method="post" action="clientes.php?id=<?php echo $row['id_cl']; ?>">
                                                    <button class=" bg-red-600 text-white active:bg-pink-500 text-xs font-bold uppercase px-3 py-3 rounded outline-none focus:outline-none  ease-linear transition-all duration-150" type="submit" name="delete">
                                                        Eliminar cliente
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
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