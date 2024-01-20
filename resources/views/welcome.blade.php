@extends('plantillas.principal')
@section('titulo')
    Home
@endsection
@section('contenido')
    <section class="bg-white dark:bg-gray-900 mt-6">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Bienvenido a nuestro BLOG
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Aquí podrás encontrar información relevante sobre varias temas
                    relacionados con el mundo de la programación y el desarrollo web.
                </p>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($blogs as $item)
                    <article
                        class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span
                                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                <i class="fa-regular fa-newspaper mr-2"></i> Blog
                            </span>
                            <span class="text-sm"> {{-- FECHA DE PUBLICACION --}} </span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $item->titulo }}
                        </h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            {{ $item->contenido }}
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="{{ Storage::url($item->autor->imagen) }}"
                                    alt="" />
                                <span class="font-medium dark:text-white">
                                    {{ $item->autor->nombre }}
                                </span>
                            </div>
                            <a href="#"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                Más detalles <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
                <div class="mt-2">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>

    </section>
@endsection
