@extends('_layouts.main')

@section('body')

{{-- NAV --}}
<header x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between gap-6">
        <a href="/" class="shrink-0">
            <img src="/assets/images/logo-toscana.svg" alt="Toscana" class="h-14">
        </a>
        <nav class="hidden md:flex items-center gap-7 text-sm font-medium" style="color:#603913">
            <a href="#inicio"   class="hover:opacity-50 transition-opacity">Inicio</a>
            <a href="#menus"    class="hover:opacity-50 transition-opacity">Menús</a>
            <a href="#incluye"  class="hover:opacity-50 transition-opacity">Incluye</a>
            <a href="#contacto" class="hover:opacity-50 transition-opacity">Contacto</a>
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
        <button @click="open = !open" class="md:hidden p-2" style="color:#603913" aria-label="Menú">
            <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="open"  class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
    <div x-show="open" x-transition @click.outside="open = false"
         class="md:hidden bg-white border-t px-6 py-4 flex flex-col gap-4" style="border-color:#e7b98b; color:#3c2415">
        <a href="#inicio"   @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Inicio</a>
        <a href="#menus"    @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Menús</a>
        <a href="#incluye"  @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Incluye</a>
        <a href="#contacto" @click="open=false" class="py-1 font-medium hover:opacity-50 transition-opacity">Contacto</a>
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
    <section id="inicio" class="relative h-72 md:h-[32rem] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('/assets/images/banquetes.jpg')"></div>
        <div class="absolute inset-0" style="background:rgba(60,36,21,0.5)"></div>
        <div class="relative flex flex-col items-center justify-center h-full text-center px-4">
            <p class="text-sm tracking-[0.3em] uppercase mb-2" style="color:#fdcd9f">La Toscana</p>
            <h1 class="text-4xl md:text-6xl font-light tracking-widest uppercase text-white">Banquetes</h1>
            <p class="mt-3 text-lg md:text-xl tracking-wider" style="color:#fdcd9f">a Domicilio</p>
            <p class="mt-4 text-sm tracking-wider text-white/70 max-w-lg">Llevamos el sabor y la tradición directamente a tu evento</p>
            <a href="#menus" class="btn-press mt-8 px-8 py-3 rounded-full text-sm font-semibold tracking-widest uppercase"
               style="background:#fcba63; color:#3c2415">Ver menús</a>
        </div>
    </section>

    {{-- MARKETING STRIP — white --}}
    <div class="py-10 px-6 bg-white border-b" style="border-color:#e7b98b">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ([
                ['🍽️', 'Ingredientes Frescos', 'Preparamos todo con los mejores insumos del día para garantizar sabor y calidad.'],
                ['👨‍🍳', 'Cocineros Expertos', 'Más de 10 años perfeccionando los sabores de la cocina mexicana tradicional.'],
                ['🚐', 'Vamos a tu Lugar', 'Llevamos todo el equipo y montaje. Tú solo disfruta tu evento.'],
            ] as [$icon, $title, $desc])
            <div class="feature-hover text-center p-5">
                <p class="text-3xl mb-2">{{ $icon }}</p>
                <p class="font-bold tracking-wide mb-1" style="color:#3c2415">{{ $title }}</p>
                <p class="text-sm" style="color:#603913">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- MENUS — cream --}}
    <section id="menus" class="py-16 px-6" style="background:#fdf0e0">
        <div class="max-w-5xl mx-auto">
            <p class="text-center tracking-[0.3em] uppercase text-sm mb-2" style="color:#a97c50">Precios 2026</p>
            <h2 class="text-center text-3xl font-light tracking-widest uppercase mb-3" style="color:#3c2415">Nuestros Menús</h2>
            <p class="text-center text-sm mb-12 max-w-xl mx-auto" style="color:#754c29">Mínimo 100 personas por servicio · Precio por persona</p>
            <div class="grid md:grid-cols-2 gap-6">

                @foreach ([
                    ['Taquiza', '$100', [
                        'Tacos al pastor, bistec, longaniza o pollo',
                        'Tortillas de maíz recién hechas',
                        'Salsas, cebolla y cilantro',
                        'Taquero incluido',
                    ], 'Taquiza', '/assets/images/taquizas.jpg'],
                    ['Antojitos Mexicanos', '$110', [
                        'Sopes, gorditas, tostadas y quesadillas',
                        'Guisados variados a escoger',
                        'Salsas y complementos',
                        'Servicio de meseros',
                    ], 'Antojitos%20Mexicanos', null],
                    ['Birria', '$120', [
                        'Birria estilo Jalisco',
                        'Sopa de arroz',
                        'Frijoles de olla',
                        'Tortillas y consomé',
                    ], 'Birria', '/assets/images/birria.jpg'],
                    ['Carnes en su Jugo', '$120', [
                        'Carne de res en su propio jugo',
                        'Frijoles con tocino',
                        'Tortillas y complementos',
                        'Servicio de meseros',
                    ], 'Carnes%20en%20su%20Jugo', '/assets/images/carne-en-su-jugo.jpg'],
                ] as [$name, $price, $items, $wa, $img])
                <div class="card-lift bg-white rounded-2xl overflow-hidden flex flex-col" style="border:1px solid #e7b98b">
                    <div class="group aspect-video overflow-hidden relative">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                             style="background-image:url('{{ $img ?? '/assets/images/banquetes.jpg' }}')"></div>
                        <div class="absolute inset-0 transition-opacity duration-300 group-hover:opacity-80"
                             style="background:linear-gradient(to top, rgba(60,36,21,0.7), transparent)"></div>
                        <div class="absolute bottom-0 left-0 p-4">
                            <span class="text-white font-bold text-xl tracking-wide">{{ $name }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col gap-3 flex-1">
                        <div class="flex items-end gap-2">
                            <span class="text-4xl font-bold" style="color:#603913">{{ $price }}</span>
                            <span class="text-sm mb-1" style="color:#a97c50">por persona</span>
                        </div>
                        <ul class="space-y-1 text-sm" style="color:#3c2415">
                            @foreach ($items as $item)
                            <li class="flex gap-2"><span style="color:#fcba63">✓</span> {{ $item }}</li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/523326531106?text=Hola,%20me%20interesa%20cotizar%20{{ $wa }}" target="_blank"
                           class="btn-press mt-auto text-center py-2 px-4 rounded-full text-sm font-semibold text-white"
                           style="background:#a97c50">Cotizar por WhatsApp</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- INCLUYE — white --}}
    <section id="incluye" class="py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto">
            <p class="text-center tracking-[0.3em] uppercase text-sm mb-2" style="color:#a97c50">En todos los paquetes</p>
            <h2 class="text-center text-3xl font-light tracking-widest uppercase mb-12" style="color:#3c2415">¿Qué Incluye?</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ([
                    ['Montaje completo', 'Llegamos con tiempo para montar todo antes de tu evento.'],
                    ['Meseros uniformados', 'Personal presentable y capacitado para atender a tus invitados.'],
                    ['Utensilios y equipo', 'Llevamos todo lo necesario: cazuelas, hornillas, utensilios y más.'],
                    ['Salsa y complementos', 'Amplia variedad de salsas, limones, cebolla, cilantro y más.'],
                    ['Mínimo 100 personas', 'Servicio disponible a partir de 100 comensales.'],
                    ['Servicio a domicilio', 'Nos desplazamos al lugar de tu evento en la ciudad.'],
                ] as [$title, $desc])
                <div class="feature-hover text-center p-4 cursor-default">
                    <div class="w-12 h-12 rounded-full mx-auto mb-3 flex items-center justify-center transition-colors duration-300" style="background:#fdf0e0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color:#a97c50">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-sm mb-1" style="color:#3c2415">{{ $title }}</p>
                    <p class="text-xs leading-relaxed" style="color:#754c29">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA — white --}}
    <div class="py-14 px-6 text-center bg-white border-y" style="border-color:#e7b98b">
        <p class="text-sm tracking-[0.3em] uppercase mb-3" style="color:#754c29">¿Listo para ordenar?</p>
        <h2 class="text-3xl md:text-4xl font-light mb-6" style="color:#3c2415">Cotiza sin compromiso</h2>
        <p class="text-sm max-w-md mx-auto mb-8" style="color:#603913">
            Cuéntanos la fecha, el número de personas y el menú que te interesa. Te respondemos a la brevedad.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/523319444460" target="_blank"
               class="btn-press flex items-center gap-2 px-8 py-3 rounded-full font-semibold text-white"
               style="background:#3c2415">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.122 1.532 5.855L.057 23.184a.75.75 0 00.916.916l5.33-1.475A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.963 0-3.8-.535-5.373-1.465l-.385-.227-3.989 1.104 1.104-3.989-.227-.385A9.953 9.953 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                WhatsApp
            </a>
            <a href="tel:3319444460"
               class="btn-press flex items-center gap-2 px-8 py-3 rounded-full font-semibold"
               style="background:#fdf0e0; color:#3c2415; border:1px solid #c49a6c">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
                Llamar ahora
            </a>
        </div>
    </div>

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
            Servicio a domicilio &nbsp;·&nbsp; Mínimo 100 personas &nbsp;·&nbsp;
            Contáctanos para fecha y disponibilidad
        </p>
    </div>

    @include('_partials.footer')

</main>
@endsection
