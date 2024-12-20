@extends('layouts.vistageneral')

@section('contenido')

<!-- se utilizo un arrays con los roles que se registrara -->
@php
    $roles = ['Administrador', 'Docente', 'Auxiliar'];
@endphp


<div class="flex flex-wrap justify-center" style="padding-top: 10%">
    <!-- Se recorre el array de roles para mostrar las cartas de registro -->
    @foreach ($roles as $role)
    <div class="place-self-center w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-5">
        <div class="flex justify-end px-4 pt-4">
            <br>
            <!-- Dropdown menu -->
           
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="{{ $role }} image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white pt-1">{{ $role }}</h5>
            
            <a href="{{ route('registrarUsuarios', ['cargo' => $role]) }}" class="boton_Agregar mt-2">REGISTRAR {{ strtoupper($role) }}</a>
            <a href="#" class="boton_ver mt-3">  ASIGNACIÓN DE {{ strtoupper($role) }}S</a>
        </div>
    </div>
@endforeach
</div>
</div>

<div class="flex flex-wrap justify-center" style="padding-top: 10%">
    <!-- Se recorre el array de roles para mostrar las cartas de registro -->
    <div class="place-self-center w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-5">
        <div class="flex justify-end px-4 pt-4">
            <br>
            <!-- Dropdown menu -->
           
        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="{{ $role }} image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white pt-1">{{ $role }}</h5>
            
            <a href="{{ route('registrarUsuarios') }}" class="boton_Agregar mt-2">REGISTRAR {{ strtoupper($role) }}</a>
            <a href="#" class="boton_ver mt-3">  REGISTROS DE ESTUDIANTES</a>
        </div>
    </div>
</div>
</div>

@endsection