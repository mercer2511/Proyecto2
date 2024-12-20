@extends('layouts.vistageneral')

@section('contenido')

<div>
    <h1 class="text-center py-5">panel de la secretaria</h1>

    <div class="grid justify-items-center ">
        <a class="m-1 p-3 rounded-md bg-[#e70505] btn btn-secondary " href="{{ route('AdministradorListar') }}"> Nuevos registros </a>   
    </div>
</div>

@endsection