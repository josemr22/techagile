<?php

include_once('../controllers/funciones.php');
session_start();
getContentSlider1();
getContentSlider2();
getContentSlider3();
getImagesGallery();

if (isset($_GET['id']) && isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['submit'])) {

  $id = $_GET['id'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];

  editContentSlider($id, $title, $desc);
}

if ($_FILES && isset($_GET['id']) && isset($_POST['submit'])) {

  $id = $_GET['id'];
  $archivo = $_FILES;

  editImageSlider($id, $archivo);
}

if (isset($_POST['destroySession'])) {
  destroyLogin();
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
          <div>
            <!-- Card stats -->
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 xl:w-4/12 px-4">
                <div class="
                      relative
                      flex flex-col
                      min-w-0
                      break-words
                      bg-white
                      rounded
                      mb-6
                      xl:mb-0
                      shadow-lg
                    ">
                  <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id1'] ?>" enctype="multipart/form-data">
                    <div class="flex-auto p-8" style="background-image: url(<?php echo $GLOBALS['img1']; ?>);background-repeat: no-repeat;background-size: cover;    background-position: center;">
                      <div class="flex flex-wrap">
                        <div class="
                            relative
                            w-full
                            pr-4
                            max-w-full
                            flex-grow flex-1
                          ">
                          <h5 class="
                              text-black-400
                              uppercase
                              font-bold
                              text-xs
                            ">

                          </h5>

                        </div>

                        <div class="relative w-auto pl-4 flex-initial">
                          <label class="w-64 flex flex-col items-center px-4 py-4 bg-purple-500 text-white rounded-full shadow-lg tracking-wide uppercase  cursor-pointer hover:bg-purple-500 hover:text-white">
                            <i class="fas fa-sync-alt"></i>
                            <input name="archivo" type='file' class="hidden" />
                          </label>
                        </div>


                      </div>
                      <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-3
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                        Guardar cambios
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="w-full lg:w-6/12 xl:w-4/12 px-4">
                <div class="
                      relative
                      flex flex-col
                      min-w-0
                      break-words
                      bg-white
                      rounded
                      mb-6
                      xl:mb-0
                      shadow-lg
                    ">
                  <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id2'] ?>" enctype="multipart/form-data">
                    <div class="flex-auto p-8" style="background-image: url(<?php echo $GLOBALS['img2']; ?>);background-repeat: no-repeat;background-size: cover;    background-position: center;">
                      <div class="flex flex-wrap">
                        <div class="
                            relative
                            w-full
                            pr-4
                            max-w-full
                            flex-grow flex-1
                          ">
                          <h5 class="
                              text-black-400
                              uppercase
                              font-bold
                              text-xs
                            ">

                          </h5>

                        </div>

                        <div class="relative w-auto pl-4 flex-initial">
                          <label class="w-64 flex flex-col items-center px-4 py-4 bg-purple-500 text-white rounded-full shadow-lg tracking-wide uppercase  cursor-pointer hover:bg-purple-500 hover:text-white">
                            <i class="fas fa-sync-alt"></i>
                            <input name="archivo" type='file' class="hidden" />
                          </label>
                        </div>


                      </div>
                      <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-3
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                        Guardar cambios
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="w-full lg:w-6/12 xl:w-4/12 px-4">
                <div class="
                      relative
                      flex flex-col
                      min-w-0
                      break-words
                      bg-white
                      rounded
                      mb-6
                      xl:mb-0
                      shadow-lg
                    ">
                  <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id3'] ?>" enctype="multipart/form-data">
                    <div class="flex-auto p-8" style="background-image: url(<?php echo $GLOBALS['img3']; ?>);background-repeat: no-repeat;background-size: cover;    background-position: center;">
                      <div class="flex flex-wrap">
                        <div class="
                            relative
                            w-full
                            pr-4
                            max-w-full
                            flex-grow flex-1
                          ">
                          <h5 class="
                              text-black-400
                              uppercase
                              font-bold
                              text-xs
                            ">

                          </h5>

                        </div>

                        <div class="relative w-auto pl-4 flex-initial">
                          <label class="w-64 flex flex-col items-center px-4 py-4 bg-purple-500 text-white rounded-full shadow-lg tracking-wide uppercase  cursor-pointer hover:bg-purple-500 hover:text-white">
                            <i class="fas fa-sync-alt"></i>
                            <input name="archivo" type='file' class="hidden" />
                          </label>
                        </div>


                      </div>
                      <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-3
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                        Guardar cambios
                      </button>
                    </div>
                  </form>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <div class="px-4 md:px-10 mx-auto w-full -m-24">

        <div class="flex flex-wrap mt-4">
          <!-- Slider 1 -->
          <div class="w-full xl:w-4/12 px-4">
            <div class="
                  relative
                  flex flex-col
                  min-w-0
                  break-words
                  bg-white
                  w-full
                  mb-6
                  shadow-lg
                  rounded
                ">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      <?php echo "Slider " . $GLOBALS['id1']; ?>
                    </h3>
                  </div>
                </div>
              </div>
              <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id1'] ?>">
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <!-- Título del slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Título del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Regular Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="title" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['title1']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                  <!-- Descripción del Slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Descripción del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Large Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="desc" placeholder="Large Input" class="px-3 py-4 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['desc1']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- Botón para guardar -->
                <div class="flex flex-wrap items-center">

                  <div class="
                        relative
                        w-full
                        py-2
                        px-4
                        max-w-full
                        flex-grow flex-1
                        text-right
                      ">
                    <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-1
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                      Guardar cambios
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Slider 2 -->

          <div class="w-full xl:w-4/12 px-4">
            <div class="
                  relative
                  flex flex-col
                  min-w-0
                  break-words
                  bg-white
                  w-full
                  mb-6
                  shadow-lg
                  rounded
                ">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      <?php echo "Slider " . $GLOBALS['id2']; ?>
                    </h3>
                  </div>
                </div>
              </div>
              <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id2'] ?>">
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <!-- Título del slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Título del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Regular Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="title" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['title2']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                  <!-- Descripción del Slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Descripción del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Large Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="desc" placeholder="Large Input" class="px-3 py-4 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['desc2']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- Botón para guardar -->
                <div class="flex flex-wrap items-center">

                  <div class="
                        relative
                        w-full
                        py-2
                        px-4
                        max-w-full
                        flex-grow flex-1
                        text-right
                      ">
                    <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-1
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                      Guardar cambios
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- Slider 3 -->

          <div class="w-full xl:w-4/12 px-4">
            <div class="
                  relative
                  flex flex-col
                  min-w-0
                  break-words
                  bg-white
                  w-full
                  mb-6
                  shadow-lg
                  rounded
                ">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      <?php echo "Slider " . $GLOBALS['id3']; ?>
                    </h3>
                  </div>
                </div>
              </div>
              <form method="post" action="dashboard.php?id=<?php echo $GLOBALS['id3'] ?>">
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <!-- Título del slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Título del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Regular Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="title" placeholder="Regular Input" class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['title3']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                  <!-- Descripción del Slider -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead class="thead-light">
                      <tr>
                        <th class="
                            px-6
                            bg-blueGray-50
                            text-blueGray-500
                            align-middle
                            border border-solid border-blueGray-100
                            py-3
                            text-xs
                            uppercase
                            border-l-0 border-r-0
                            whitespace-nowrap
                            font-semibold
                            text-left
                          ">
                          Descripción del Slider
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="
                            border-t-0
                            px-6
                            align-middle
                            border-l-0 border-r-0
                            text-xs
                            whitespace-nowrap
                            p-4
                            text-left
                          ">
                          <!-- Large Input -->
                          <div class="mb-3 pt-0">
                            <input type="text" name="desc" placeholder="Large Input" class="px-3 py-4 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-blueGray-300 outline-none focus:outline-none focus:shadow-outline w-full" value="<?php echo $GLOBALS['desc3']; ?>" />
                          </div>
                        </th>

                      </tr>

                    </tbody>
                  </table>
                </div>
                <!-- Botón para guardar -->
                <div class="flex flex-wrap items-center">

                  <div class="
                        relative
                        w-full
                        py-2
                        px-4
                        max-w-full
                        flex-grow flex-1
                        text-right
                      ">
                    <button class="
                          bg-purple-500
                          text-white
                          active:bg-indigo-600
                          text-xs
                          font-bold
                          uppercase
                          px-3
                          py-1
                          rounded
                          outline-none
                          focus:outline-none
                          mr-1
                          mb-1
                          ease-linear
                          transition-all
                          duration-150
                        " type="submit" name="submit">
                      Guardar cambios
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>



      </div>

    </div>


  </div>

  <script src="../js/dropzone-5.7.0/dropzone.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

  <script>
    Dropzone.options.myAwesomeDropzone = {
      dictDefaultMessage: "Arrastre o seleccione sus imágenes",
      success: function(reload) {
        location.reload();
      }
    };


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