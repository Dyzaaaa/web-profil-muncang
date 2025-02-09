@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div id="gallery" class="relative w-full md:w-3/4 lg:w-1/2 h-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden rounded-lg md:h-300">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/peta fasilitas.pdf" class="block max-w-full h-auto object-cover" alt="Peta Fasilitas">
                <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Fasilitas</div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/peta titik fasil.jpg" class="block max-w-full h-auto object-cover" alt="Peta Titik Fasilitas">
                <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Titik Fasilitas</div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/peta admin.png" class="block max-w-full h-auto object-cover" alt="Peta Admin">
                <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Admin</div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/peta layout.png" class="block max-w-full h-auto object-cover" alt="Peta Layout">
                <div class="absolute bottom-0 left-0 w-full bg-gray-800 bg-opacity-50 text-white text-center p-2">Peta Layout</div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>

@endsection
