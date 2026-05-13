---
ogImage: /assets/images/salon-og.jpg
---
@extends('_layouts.main')

@section('body')

{{-- NAV --}}
<header x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between gap-6">
        <a href="/" class="shrink-0">
            <img src="/assets/images/logo-toscana.svg" alt="Toscana" class="h-14">
        </a>
        <nav class="hidden md:flex items-center gap-7 text-sm font-medium" style="color:#603913">
            <a href="#inicio"       class="hover:opacity-50 transition-opacity">Inicio</a>
            <a href="#mega-paquete" class="hover:opacity-50 transition-opacity">Mega Paquete</a>
            <a href="#banquetes"    class="hover:opacity-50 transition-opacity">Banquetes</a>
            <a href="#galeria"      class="hover:opacity-50 transition-opacity">Galería</a>
            <a href="#alberca"      class="hover:opacity-50 transition-opacity">Alberca</a>
            <a href="#contacto"     class="hover:opacity-50 transition-opacity">Contacto</a>
        </nav>
        <div class="hidden md:flex flex-col items-end text-xs shrink-0" style="color:#603913">
            <a href="tel:3319444460" class="flex items-center gap-1 font-semibold tracking-wider hover:opacity-50 transition-opacity">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                331 944 4460
            </a>
            <a href="tel:3326531106" class="flex items-center gap-1 font-semibold tracking-wider hover:opacity-50 transition-opacity">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                332 653 1106
            </a>
        </div>
        <button @click="open = !open" class="md:hidden p-2 rounded-lg" style="color:#603913" aria-label="Menú">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open"  class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
    <div x-show="open" x-transition @click.outside="open = false"
         class="md:hidden bg-white border-t px-6 py-4 flex flex-col gap-4" style="border-color:#e7b98b; color:#3c2415">
        <a href="#inicio"       @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Inicio</a>
        <a href="#mega-paquete" @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Mega Paquete</a>
        <a href="#banquetes"    @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Banquetes</a>
        <a href="#galeria"      @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Galería</a>
        <a href="#alberca"      @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Alberca</a>
        <a href="#contacto"     @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Contacto</a>
        <div class="border-t pt-3 flex flex-col gap-2" style="border-color:#e7b98b">
            <a href="tel:3319444460" class="flex items-center gap-2 text-sm font-semibold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                331 944 4460
            </a>
            <a href="tel:3326531106" class="flex items-center gap-2 text-sm font-semibold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                332 653 1106
            </a>
        </div>
    </div>
</header>

<main class="pt-20">

    {{-- HERO --}}
    <section id="inicio" class="relative h-72 md:h-96 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('/assets/images/salon.jpg')"></div>
        <div class="absolute inset-0" style="background:rgba(60,36,21,0.45)"></div>
        <div class="relative flex flex-col items-center justify-center h-full text-center px-4">
            <p class="text-sm tracking-[0.3em] uppercase mb-2" style="color:#fdcd9f">La Toscana</p>
            <h1 class="text-4xl md:text-6xl font-light tracking-widest uppercase text-white">Salón de Eventos</h1>
            <p class="mt-4 text-sm tracking-wider text-white/70">XV Años · Bautizos · Comuniones · Aniversarios · Eventos Especiales</p>
        </div>
    </section>

    {{-- PRECIOS BANNER --}}
    <div class="text-center py-3 px-4 border-b" style="border-color:#e7b98b">
        <p class="text-xl md:text-2xl tracking-widest uppercase" style="color:#754c29">Precios del 2026</p>
    </div>

    {{-- MEGA PAQUETE — cream --}}
    <section id="mega-paquete" class="py-16 px-6" style="background:#fdf0e0">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-start">

            <div class="flex flex-col gap-6">
                <div>
                    <h2 class="text-5xl font-bold italic leading-tight" style="color:#754c29">Mega<br>Paquete</h2>
                    <p class="text-2xl font-semibold mt-2" style="color:#3c2415">¡Todo sin límite!</p>
                </div>
                <div class="card-lift rounded-xl p-6 bg-white cursor-default" style="border:1px solid #e7b98b">
                    <p class="leading-relaxed" style="color:#603913">
                        <span class="font-semibold" style="color:#754c29">3 cartones de ampolleta Corona</span> en la renta del paquete mega
                    </p>
                </div>
                <div class="card-lift rounded-xl p-6 bg-white cursor-default" style="border:1px solid #e7b98b">
                    <p class="font-semibold uppercase tracking-wider text-sm mb-3" style="color:#a97c50">Servicios para</p>
                    <ul class="space-y-1 text-lg" style="color:#3c2415">
                        <li>XV Años</li><li>Bautizos</li><li>Comuniones Infantiles</li>
                        <li>Aniversarios</li><li>Eventos Especiales</li><li>y más...</li>
                    </ul>
                </div>
            </div>

            <div class="card-lift rounded-xl p-6 bg-white cursor-default" style="border:1px solid #e7b98b">
                <p class="font-semibold uppercase tracking-wider text-sm mb-4" style="color:#a97c50">Incluye</p>
                <ul class="space-y-2" style="color:#3c2415">
                    @foreach ([
                        'Mobiliario para 100 personas','Mantelería a escoger',
                        'Banquetes mexicanos a escoger','Café de olla','Nieve raspada',
                        'Vajilla de barro','Cristalería (policarbonato y plástico)',
                        'Agua fresca 2 sabores','Refresco','Área infantil (Brincolín y futbolito)',
                        'Botana seca','Meseros','Hielo','Decoración con globos en mesa principal',
                    ] as $item)
                    <li class="flex items-start gap-2">
                        <span style="color:#fcba63" class="mt-1">✓</span><span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- BANQUETE PRICING — white --}}
    <section id="banquetes" class="py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <p class="tracking-[0.3em] uppercase text-sm mb-2" style="color:#a97c50">Banquetes</p>
            <h2 class="text-3xl font-light tracking-widest uppercase mb-10" style="color:#3c2415">Opciones de Menú</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach ([
                    ['Taquiza','$20,800'],
                    ['Antojitos Mexicanos','$21,900'],
                    ['Birria y Carne en su Jugo','$23,500'],
                ] as [$label, $price])
                <div class="card-lift rounded-2xl overflow-hidden" style="border:1px solid #e7b98b">
                    <div class="py-3 px-4" style="background:#a97c50">
                        <p class="font-semibold tracking-wider uppercase text-sm text-white">{{ $label }}</p>
                    </div>
                    <div class="py-8 bg-white">
                        <p class="text-4xl font-bold" style="color:#603913">{{ $price }}</p>
                        <p class="text-xs mt-1" style="color:#a97c50">por paquete</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- GALLERY — cream --}}
    <section id="galeria" class="py-16 px-6" style="background:#fdf0e0">
        <div class="max-w-5xl mx-auto">
            <p class="text-center tracking-[0.3em] uppercase text-sm mb-2" style="color:#a97c50">Momentos</p>
            <h2 class="text-center text-3xl font-light tracking-widest uppercase mb-10" style="color:#3c2415">Galería</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ([
                    ['Infantiles',  '/assets/images/infantiles.jpg'],
                    ['Banquetes',   '/assets/images/taquizas.jpg'],
                    ['Deco Globos', '/assets/images/globos.jpg'],
                    ['Bodas',       '/assets/images/bodas.jpg'],
                ] as [$label, $img])
                <div class="group relative rounded-xl overflow-hidden aspect-square cursor-pointer" style="background:#e7b98b">
                    @if($img)
                        <img src="{{ $img }}" alt="{{ $label }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center transition-opacity duration-300 group-hover:opacity-0">
                            <span class="text-xs tracking-wider text-center px-2" style="color:rgba(60,36,21,0.35)">Foto próximamente</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 transition-opacity duration-300 opacity-0 group-hover:opacity-100" style="background:rgba(60,36,21,0.15)"></div>
                    <div class="absolute bottom-0 inset-x-0 py-2 px-3 translate-y-0 group-hover:-translate-y-1 transition-transform duration-300" style="background:rgba(96,57,19,0.55)">
                        <p class="text-xs font-semibold uppercase tracking-widest text-center text-white">{{ $label }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- POOL — white --}}
    <section id="alberca" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-center">

            <div class="card-lift rounded-2xl overflow-hidden aspect-[3/4]">
                <img src="/assets/images/alberca.jpg" alt="Alberca La Toscana" class="w-full h-full object-cover">
            </div>

            <div class="flex flex-col gap-6">
                <div>
                    <p class="tracking-[0.3em] uppercase text-sm mb-1" style="color:#754c29">Área de Alberca</p>
                    <h2 class="text-5xl font-bold leading-tight" style="color:#3c2415">
                        1 HORA<br><span style="color:#a97c50">GRATIS</span>
                    </h2>
                    <p class="mt-2" style="color:#603913">en la renta de cualquier paquete</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="card-lift rounded-xl p-4 text-center cursor-default" style="background:#fdf0e0; border:1px solid #e7b98b">
                        <p class="text-xs uppercase tracking-wider mb-1" style="color:#a97c50">Lunes a Jueves</p>
                        <p class="text-3xl font-bold" style="color:#603913">$5,900</p>
                    </div>
                    <div class="card-lift rounded-xl p-4 text-center cursor-default" style="background:#fdf0e0; border:1px solid #e7b98b">
                        <p class="text-xs uppercase tracking-wider mb-1" style="color:#a97c50">Fines de Semana</p>
                        <p class="text-3xl font-bold" style="color:#603913">$6,900</p>
                    </div>
                </div>
                <div class="card-lift rounded-xl p-5 cursor-default" style="background:#fdf0e0; border:1px solid #e7b98b">
                    <p class="font-semibold text-sm uppercase tracking-wider mb-3" style="color:#a97c50">Incluye</p>
                    <ul class="space-y-1 text-sm" style="color:#3c2415">
                        <li class="flex gap-2"><span style="color:#fcba63">✓</span> Mesas con mantel y cubre mantel para 60 personas</li>
                        <li class="flex gap-2"><span style="color:#fcba63">✓</span> Futbolito</li>
                        <li class="flex gap-2"><span style="color:#fcba63">✓</span> Brincolín para niños de hasta 6 años</li>
                        <li class="flex gap-2"><span style="color:#fcba63">✓</span> Quemador y sonido</li>
                    </ul>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="card-lift rounded-xl overflow-hidden aspect-video">
                        <img src="/assets/images/alberca-adicional.jpg" alt="Alberca La Toscana" class="w-full h-full object-cover">
                    </div>
                    <div class="card-lift rounded-xl overflow-hidden aspect-video">
                        <img src="/assets/images/fiesta-alberca.jpg" alt="Fiesta en alberca" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT — cream --}}
    <section id="contacto" class="py-12 px-6" style="background:#fdf0e0">
        <div class="max-w-3xl mx-auto text-center flex flex-col items-center gap-6">
            <img src="/assets/images/logo-toscana.svg" alt="Toscana" class="h-20">
            <div class="flex flex-col sm:flex-row gap-4 text-2xl font-bold">
                <a href="tel:3319444460" class="btn-press flex items-center gap-2" style="color:#3c2415">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    331 944 4460
                </a>
                <span class="hidden sm:inline" style="color:#a97c50">·</span>
                <a href="tel:3326531106" class="btn-press flex items-center gap-2" style="color:#3c2415">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                    332 653 1106
                </a>
            </div>
            <div class="flex gap-6" style="color:#603913">
                <a href="https://facebook.com/toscansalondeeventos" target="_blank" class="btn-press text-sm tracking-wider">Facebook</a>
                <a href="https://instagram.com/toscansalondeeventos" target="_blank" class="btn-press text-sm tracking-wider">Instagram</a>
                <a href="https://wa.me/523326531106" target="_blank" class="btn-press text-sm tracking-wider">WhatsApp</a>
            </div>
        </div>
    </section>

    {{-- INFO STRIP --}}
    <div class="text-center py-4 px-6 bg-white border-t" style="border-color:#e7b98b">
        <p class="text-sm leading-relaxed max-w-3xl mx-auto" style="color:#754c29">
            Se aparta con <strong style="color:#3c2415">$3,000</strong> y una semana antes se liquida &nbsp;·&nbsp;
            Hora extra <strong style="color:#3c2415">$2,200</strong> &nbsp;·&nbsp;
            Bodas, 15 años y eventos especiales: DJ <strong style="color:#3c2415">$2,000</strong>
        </p>
    </div>

    @include('_partials.footer')

</main>
@endsection
