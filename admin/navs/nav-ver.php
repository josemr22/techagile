<?php
// session_start();
$email = $_SESSION['email'];
$user = $_SESSION['user'];
$rol = $_SESSION['rol'];
// echo json_encode(session_start());
// exit();
if (!isset($rol)) {
  header("location: login.php");
}
?>
<nav class="
          md:left-0
          md:block
          md:fixed
          md:top-0
          md:bottom-0
          md:overflow-y-auto
          md:flex-row
          md:flex-nowrap
          md:overflow-hidden
          shadow-xl
          bg-white
          flex flex-wrap
          items-center
          justify-between
          relative
          md:w-64
          z-10
          py-4
          px-6
        ">
    <div class="
            md:flex-col md:items-stretch md:min-h-full md:flex-nowrap
            px-0
            flex flex-wrap
            items-center
            justify-between
            w-full
            mx-auto
          ">
        <button class="
              cursor-pointer
              text-black
              opacity-50
              md:hidden
              px-3
              py-1
              text-xl
              leading-none
              bg-transparent
              rounded
              border border-solid border-transparent
            " type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="
              md:block
              text-left
              md:pb-2
              text-blueGray-600
              mr-0
              inline-block
              whitespace-nowrap
              text-sm
              uppercase
              font-bold
              p-4
              px-0
            " href="../index.php">
            Tech Agile
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">

            <li class="inline-block relative">
                <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span class="
                      w-12
                      h-12
                      text-sm text-white
                      bg-blueGray-200
                      inline-flex
                      items-center
                      justify-center
                      rounded-full
                    "><img alt="..." class="
                        w-full
                        rounded-full
                        align-middle
                        border-none
                        shadow-lg
                      " src="https://ui-avatars.com/api/?name=Renatto+Farid&color=FFFFFF&background=EC4899&bold=true" /></span>
                    </div>
                </a>
                <div class="
                  hidden
                  bg-white
                  text-base
                  z-50
                  float-left
                  py-2
                  list-none
                  text-left
                  rounded
                  shadow-lg
                  min-w-48
                " id="user-responsive-dropdown">
                    <a href="../index.php" class="
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    color: #563e6d;
                  ">Ir a la web</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                   <form action="dashboard.php" method="post">
                    <button type="submit" name="destroySession" class="
                              text-sm
                              py-2
                              px-4
                              font-normal
                              block
                              w-full
                              whitespace-nowrap
                              bg-transparent
                              color: #563e6d;
                            ">Cerrar sesion</button>
                  </form>
                </div>
            </li>
        </ul>
        <div id="hmenu" class="
              md:flex
              md:flex-col
              md:items-stretch
              md:opacity-100
              md:relative
              md:mt-4
              md:shadow-none
              shadow
              absolute
              top-0
              left-0
              right-0
              z-40
              overflow-y-auto overflow-x-hidden
              h-auto
              items-center
              flex-1
              rounded
              hidden
            " id="example-collapse-sidebar">
            <div class="
                md:min-w-full md:hidden
                block
                pb-4
                mb-4
                border-b border-solid border-blueGray-200
              ">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="
                      md:block
                      text-left
                      md:pb-2
                      text-blueGray-600
                      mr-0
                      inline-block
                      whitespace-nowrap
                      text-sm
                      uppercase
                      font-bold
                      p-4
                      px-0
                    " href="../index.php">
                            Tech Agile
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="
                      cursor-pointer
                      text-black
                      opacity-50
                      md:hidden
                      px-3
                      py-1
                      text-xl
                      leading-none
                      bg-transparent
                      rounded
                      border border-solid border-transparent
                    " onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <h6 class="
                md:min-w-full
                text-blueGray-500 text-xs
                uppercase
                font-bold
                block
                pt-1
                pb-4
                no-underline
              ">
                Inicio
            </h6>
            <!-- Navigation -->

            <ul class="hmenu md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="dashboard.php" class="color: #563e6d;
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                    
                    hover:text-emerald-600
                  ">
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        Sliders
                    </a>
                </li>

                <li class="items-center">
                    <a href="galeria.php" class="color: #563e6d;
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                    
                    hover:text-blueGray-500
                  ">
                        <i class="fas fa-images mr-2 text-sm opacity-75"></i>
                        Galería
                    </a>
                </li>

                <li class="items-center">
                    <a href="clientes.php" class="color: #563e6d;
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                    
                    hover:text-blueGray-500
                  ">
                        <i class="fas fa-user-friends mr-2 text-sm opacity-75"></i>
                        Clientes
                    </a>
                </li>

            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="
                md:min-w-full
                text-blueGray-500 text-xs
                uppercase
                font-bold
                block
                pt-1
                pb-4
                no-underline
              ">
                ¿Quiénes somos?
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center">
                    <a href="empresa.php" class="
                    color: #563e6d;
                    hover:text-blueGray-500
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                  ">
                        <i class="fas fa-fingerprint opacity-75 mr-2 text-sm"></i>
                        Nosotros
                    </a>
                </li>

                <li class="items-center">
                    <a href="empresa.php#mision" class="
                    color: #563e6d;
                    hover:text-blueGray-500
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                  ">
                        <i class="fas fa-clipboard opacity-75 mr-2 text-sm"></i>
                        Misión
                    </a>
                </li>

                <li class="items-center">
                    <a href="empresa.php#vision" class="
                    color: #563e6d;
                    hover:text-blueGray-500
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                  ">
                        <i class="far fa-clipboard opacity-75 mr-2 text-sm"></i>
                        Visión
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6 class="
                md:min-w-full
                text-blueGray-500 text-xs
                uppercase
                font-bold
                block
                pt-1
                pb-4
                no-underline
              ">
                Generales
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                <li class="items-center">
                    <a href="servicios.php" class="
                    color: #563e6d;
                    hover:text-blueGray-500
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                  ">
                        <i class="fas fa-bookmark opacity-75 mr-2 text-sm"></i>
                        Servicios
                    </a>
                </li>

                <li class="items-center">
                    <a href="mensajeria.php" class="
                    color: #563e6d;
                    hover:text-blueGray-500
                    text-xs
                    uppercase
                    py-3
                    font-bold
                    block
                  ">
                        <i class="fas fa-envelope opacity-75 mr-2 text-sm"></i>
                        Mensajería
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>