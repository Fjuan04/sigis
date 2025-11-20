<nav class="bg-sena-verde shadow-md  font-sans fixed top-0 w-full z-50 h-[70px]">
  <div class="max-w-[90%]  items-center mx-auto px-2 h-full " >
    <div class="flex h-full justify-between  items-center">

      <div class="flex items-center space-x-3">
        <a href="{{route('dashboard')}}" class="flex items-center space-x-2">
          <img class="size-12" src="{{asset('assets/logo-sena.jpeg')}}" alt="">
        </a>
        <h2 class="text-left text-white text-3xl">
          @yield('nav-title', 'SIGIS')
        </h2>
      </div>

      <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <div id="menu" class="hidden md:flex items-center space-x-4 text-white">
        @yield('nav-links')
      </div>
    </div>

    <div id="mobile-menu" class="bg-white flex flex-col hidden  space-y-2 mt-2 md:hidden">
      @yield('nav-links')
    </div>
  </div>
</nav>