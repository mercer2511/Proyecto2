@extends('layouts.vistageneral')

@section('contenido')





<div style="width: 75%" class="place-self-center mt-44 flex justify-center relative overflow-x-auto shadow-md sm:rounded-lg place-self-center w-full">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    DNI
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>
                
            </tr>
        </thead>
        <tbody>
            @forelse ($docentes as $docente)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $docente->id_usuario }}
                </th>
                <td class="px-6 py-4">
                    {{ $docente->nombre_usuario }}
                </td>
                <td class="px-6 py-4">
                    {{ $docente->apellido_usuario }}
                </td>
                <td class="px-6 py-4">
                    {{ $docente->correo }}
                </td>
                <td class="px-6 py-4">
                    {{ $docente->estado_usuario }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('asignacionGradoCurso', $docente->id_usuario ) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Asignar</a>

                </td>
            </tr>
            @empty
             <tr colspan="6">
                <td class="px-6 py-4">
                    No hay docentes registrados
                </td>
            </tr> 

            @endforelse
        </tbody>
    </table>
</div>





@endsection