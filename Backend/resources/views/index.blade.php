@extends('layouts.main')

@section('title', 'Login SIGIS')
@section('main-class', 'flex-col')

@section('content')

    
    <div class="min-h-screen flex items-center justify-center bg-sena-grisClaro font-sans">
        
        <div class="bg-white shadow-lg rounded-2xl flex w-fit overflow-hidden">
            
            <!-- Columna del logo -->
            <div class="bg-white flex items-center justify-center p-6 relative" >
                <a href="{{route('dashboard')}}" class="rounded-full bg-sena-verde p-1 absolute top-5 left-5 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M232,112a64.07,64.07,0,0,1-64,64H51.31l34.35,34.34a8,8,0,0,1-11.32,11.32l-48-48a8,8,0,0,1,0-11.32l48-48a8,8,0,0,1,11.32,11.32L51.31,160H168a48,48,0,0,0,0-96H80a8,8,0,0,1,0-16h88A64.07,64.07,0,0,1,232,112Z"></path></svg>
                </a>
            <img src="{{ asset('assets/logo-sena.jpeg') }}" alt="Logo SENA" class="w-32 hidden md:flex">
            </div>

            <!-- Columna del formulario -->
            <div class=" p-8 flex flex-col justify-center">
                @include('components.error')
            <h2 class="text-2xl font-bold text-sena-verde mb-6">Iniciar sesión</h2>

            <form method="POST" action="">
                @csrf

                <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input 
                type="text" 
                name="email" 
                class="w-full mt-1 mb-4 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sena-verde focus:outline-none"
                placeholder="usuario@correo.com" 
                
                >

                <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input 
                type="password" 
                name="password" 
                class="w-full mt-1 mb-6 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sena-verde focus:outline-none"
                placeholder="••••••••" 
                
                >

                <button 
                type="submit" 
                class="w-full bg-sena-verde text-white font-semibold py-2 rounded-lg hover:bg-sena-verdeOscuro transition-colors">
                Ingresar
                </button>
            </form>

            <a href="{{ route('password.request') }}" class="mt-4 mx-auto w-fit text-sm text-sena-verde hover:underline">
                ¿Olvidaste tu contraseña?
            </a>
            </div>

        </div>
    </div>

@endsection


@section('scripts')
    @include('partials/navbar-action')
@endsection