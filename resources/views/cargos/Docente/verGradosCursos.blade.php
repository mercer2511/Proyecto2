@extends('layouts.vistageneral')

@section('contenido')

    

<div class="relative overflow-x-auto place-self-center w-3/4 mt-44 flex justify-center">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    NOMBRE
                </th>
                <th scope="col" class="px-6 py-3">
                    GRADO
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    CURSO
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    PERIODO ACADEMICO
                </th>
                
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Calificar Estudiantes
                </th>
            </tr>
        </thead>
        <tbody class="">
            
            
                @forelse ($asignaciones as $asignacion)
                <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $docente->nombre_usuario }}
                </th>
                <td class="px-6 py-4">
                    {{ $asignacion->id_grado }}
                </td>
                <td class="px-6 py-4">
                    @forelse ($cursos as $curso)
                    @if ($asignacion->id_curso == $curso->id_curso)
                        {{ $curso->nombre_curso }}
                    @endif
                    @empty
                        <p>no existe</p>
                    @endforelse
                </td>

                <td class="px-6 py-4">
                    @forelse ($periodos_2 as $periodo)
                        @if ($asignacion->id_periodo_academico === $periodo->id_periodo_academico)
                            {{ $periodo->nombre_periodo_academico }}
                        @endif
                    @empty
                        <p>no existe</p>
                    @endforelse
                </td>

                @empty
            </tr>    
                @endforelse
            
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
               <td>
                

<!-- Modal toggle -->
<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Agregar nueva asignaci&#243;n
  </button>
  
  <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 bottom-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Asignarle curso y grado al docente {{ $docente->nombre_usuario }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{ route('instarGradoCurso') }}" method="POST">
                @csrf
                @method('POST')
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <input type="hidden" value="{{ $docente->id_usuario }}" name="id_usuario">
            
                        <label for="id_grado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grado</label>
                        <select id="id_grado" name="id_grado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">-- Grado --</option>
                            @forelse ($grados as $grado)
                                <option value="{{ $grado->id_grado }}">{{ $grado->nombre_grado }} Grado</option>
                            @empty
                                <option value="">No hay grados disponibles</option>
                            @endforelse
                        </select>
                    </div>
            
                    <div class="col-span-2 sm:col-span-1">
                        <label for="id_curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Curso</label>
                        <select id="id_curso" name="id_curso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">-- Cursos --</option>
                            @forelse ($cursos as $curso)
                                <option value="{{ $curso->id_curso }}">{{ $curso->nombre_curso }}</option>
                            @empty
                                <option value="">No hay cursos disponibles</option>
                            @endforelse
                        </select>
                    </div>
            
                    <div class="col-span-2 sm:col-span-1">
                        @if ($periodos)
                        <label for="periodo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Periodo</label>
                        <input type="text" value="{{ $periodos->nombre_periodo_academico }}" name="periodo_2" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" disabled>
                        <input type="hidden" value="{{ $periodos->id_periodo_academico }}" name="periodo">
                        @else
                            <p>No hay periodos disponibles</p>
                        @endif
                    </div>
                </div>
                <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</div>
  
                </td>
            </tr>
        </tfoot>
    </table>
    

    


</div>


@endsection