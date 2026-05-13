@extends('_layouts.main')

@section('body')
<div class="relative flex flex-col md:flex-row h-screen overflow-hidden">

    {{-- Salón de Eventos --}}
    <a href="/salon-de-eventos" class="relative w-full h-1/2 md:w-1/2 md:h-full overflow-hidden group block">
        <div class="absolute inset-0 bg-cover bg-center scale-100 group-hover:scale-105 transition-transform duration-700 ease-in-out"
             style="background-image: url('/assets/images/salon.jpg')"></div>
        <div class="absolute inset-0 bg-black/50 group-hover:bg-black/35 transition-colors duration-500"></div>
        <div class="relative flex flex-col items-center justify-center h-full gap-3">
            <span class="w-12 h-px bg-white/60"></span>
            <h2 class="text-white text-2xl font-light tracking-[0.3em] uppercase">Salón de Eventos</h2>
            <span class="w-12 h-px bg-white/60"></span>
        </div>
    </a>

    {{-- Banquetes --}}
    <a href="/banquetes" class="relative w-full h-1/2 md:w-1/2 md:h-full overflow-hidden group block">
        <div class="absolute inset-0 bg-cover bg-center scale-100 group-hover:scale-105 transition-transform duration-700 ease-in-out"
             style="background-image: url('/assets/images/banquetes.jpg')"></div>
        <div class="absolute inset-0 bg-black/50 group-hover:bg-black/35 transition-colors duration-500"></div>
        <div class="relative flex flex-col items-center justify-center h-full gap-3">
            <span class="w-12 h-px bg-white/60"></span>
            <h2 class="text-white text-2xl font-light tracking-[0.3em] uppercase">Banquetes</h2>
            <span class="w-12 h-px bg-white/60"></span>
        </div>
    </a>

    {{-- Centered logo --}}
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
        <div class="bg-white rounded-full p-8 shadow-[0_0_60px_rgba(0,0,0,0.5)]">
            <img src="/assets/images/logo-toscana.svg" alt="Toscana" class="w-40">
        </div>
    </div>

</div>
@endsection
