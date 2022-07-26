<nav class="
            absolute
            top-0
            left-0
            w-full
            z-10
            bg-transparent
            md:flex-row md:flex-nowrap md:justify-start
            flex
            items-center
            p-4
          ">
  <div class="
              w-full
              mx-autp
              items-center
              flex
              justify-between
              md:flex-nowrap
              flex-wrap
              md:px-10
              px-4
            ">
    <a class="
                text-white text-sm
                uppercase
                hidden
                lg:inline-block
                font-semibold
              " href="#">Dashboard Administrativo</a>

    <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
      <a class="text-blueGray-500 block" href="#" onclick="openDropdown(event,'user-dropdown')">
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
                " id="user-dropdown">
        <a href="../" class="
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    text-blueGray-700
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
                    text-blueGray-700
                  ">Cerrar sesion</button>
        </form>
      </div>
    </ul>
  </div>
</nav>