@extends('layouts.main')

@section('title','Dashboard SIGIS')



@section('header')
    @extends('partials.navbar')

    @guest 
        @section('main-class', 'flex flex-col items-center')

        @section('nav-links')
            <a href="{{route('login')}}" class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ddd" viewBox="0 0 256 256"><path d="M141.66,133.66l-40,40a8,8,0,0,1-11.32-11.32L116.69,136H24a8,8,0,0,1,0-16h92.69L90.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,141.66,133.66ZM200,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h64a8,8,0,0,0,8-8V40A8,8,0,0,0,200,32Z"></path></svg>Iniciar Sesión</a>
        @endsection

    @endguest
@endsection




@auth
    @section('nav-links')
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ddd" viewBox="0 0 256 256">
                    <path d="M141.66,133.66l-40,40a8,8,0,0,1-11.32-11.32L116.69,136H24a8,8,0,0,1,0-16h92.69L90.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,141.66,133.66ZM200,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h64a8,8,0,0,0,8-8V40A8,8,0,0,0,200,32Z"></path>
                </svg>
                Cerrar Sesión
            </button>
        </form>
    @endsection

    @section('main-class', 'flex flex-col items-center pl-60')
    
    @if(Auth::check() && Auth::user()->role_id == 1)
        @include('partials.sidebar-admin')
    @else 
        @include('partials.sidebar')
    @endif
@endauth
    
@section('content')
   
    
    <div class="overflow-x-auto rounded-lg shadow md:w-[90%] mt-[60px] ">
        
            <div class="join m-auto h-[41px] my-5 w-[90%] flex  flex-col md:flex-row items-center gap-2 md:gap-0 ">
                    <div class="md:w-full">
                        <input class="input join-item border border-gray-300 w-full" placeholder="Portatil Lenovo" />
                    </div>
                
                    <button class="btn join-item bg-sena-verde h-full px-10 text-white">Buscar</button>

                    <button class="btn bg-[#a7a7a7] flex h-full items-center join-item px-4 w-[100px] text-white text-sm">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg>
                        Pdf</button>
                    <button class="btn bg-[#A7A7A7] flex h-full items-center join-item px-4 w-[100px] text-white text-sm">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z"></path></svg>
                        Excel</button>
            </div>


      <table class="min-w-full text-left text-sm bg-white border border-gray-200">
        <thead class="bg-gray-100 text-gray-800 font-semibold">
          <tr class="">
            <th class="px-4 py-2 border-b text-lg ">Item</th>
            <th class="px-4 py-2 border-b text-lg hidden md:table-cell">Tipo</th>
            <th class="px-4 py-2 border-b text-lg  hidden lg:table-cell">Descripción</thz>
            <th class="px-4 py-2 border-b text-lg hidden lg:table-cell">Serial</thz>
            <th class="px-4 py-2 border-b text-lg ">Cantidad</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          
            @forelse($items as $item)
                <tr class="odd:bg-[#f6f6f6] even:bg-gray-100">
                    <td class="px-4 py-2">{{$item->item}}</td>
                    <td class="px-4 py-2 hidden md:table-cell">{{$item->type->type}}</td>
                    <td class="px-4 py-2 hidden lg:table-cell">{{$item->description}}</td>
                    <td class="px-4 py-2 hidden lg:table-cell ">{{$item->serial}}</td>
                    <td class="px-4 py-2 ">{{$item->stock}}</td>
                </tr>

            @empty
                <h2>No hay items registrados</h2>
            @endforelse
        
          
        </tbody>
      </table>
    </div>


    
@endsection



@section('scripts')
    @include('partials.navbar-action')
@endsection