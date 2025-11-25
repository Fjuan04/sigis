<aside class="w-52 bg-sena-verdeClaro flex flex-col h-screen pt-20 font-sans fixed bg-sena-verde left-0 top-0">
  

  <button class="btn-toggle-sidebar rounded-full w-10 flex items-center justify-center p-5 h-10 bg-[linear-gradient(to_right,theme(colors.sena.verde)_50%,theme(colors.sena.verdeOscuro)_50%)] absolute right-0 translate-x-[50%]"></button>

  <nav class="flex flex-col text-sm text-white">
      
      <a href="" class="text-left px-4 py-4 text-xl hover:bg-sena-verdeOscuro hover:text-white  transition">Inventario</a>
      <a href="" class="text-left px-4 py-4 text-xl hover:bg-sena-verdeOscuro hover:text-white  transition">Generar Solicitud</a>
      <a href="" class="text-left px-4 py-4 text-xl hover:bg-sena-verdeOscuro hover:text-white  transition">Historial de Prestamos</a>

  </nav>


  <div class="mt-auto bg-sena-verdeClaro text-center py-2 border-t border-white">
    <p class="text-md text-white">@yield('sidebar-footer', '© SENA')</p>
  </div>
</aside>