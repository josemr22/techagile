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
            <div class="flex flex-wrap">
              <div class="px-4 md:px-10 mx-auto w-full ">

                <form method="post" action="../controllers/uploadGallery.php" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                  <div class="fallback">
                    <input type="file" name="file" multiple="">
                  </div>

                </form>
              </div>

            </div>
          </div>
        </div>
      </div>



      <div class="px-4 md:px-10 mx-auto w-full mt-16 mb-8">
        <div class="flex flex-wrap ">
          <h4 class="text-3xl text-center lg\:self-center font-normal leading-normal mt-0 mb-2 text-indigo-800">
            Listado de imágenes
          </h4>
        </div>
        <div class="flex flex-wrap">
          <?php while ($row = mysqli_fetch_assoc($GLOBALS['gallery'])) { ?>
            <div class="w-full xl:w-3/12 px-4 mt-4">
              <div class="flex flex-wrap justify-center">
                <div class="w-12/12 sm:w-12/12 px-4">
                  <img src="<?php echo $row['url_gy']; ?>" class=" shadow-lg rounded max-w-full h-auto align-middle border-none" />
                </div>
                <div>
                  <form method="post" action="../controllers/uploadGallery.php?id=<?php echo $row['id_gy']; ?>">
                    <button class="
                          bg-red-600 text-white active:bg-pink-500 text-xs font-bold uppercase px-3 py-3 rounded outline-none focus:outline-none
                          mr-1 mb-1 mt-4 ease-linear transition-all duration-150" type="submit" name="delete">
                      Eliminar imagen
                    </button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>


  </div>

  <script src="../js/dropzone-5.7.0/dropzone.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script type="text/javascript">
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