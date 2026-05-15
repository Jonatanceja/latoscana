<footer class="bg-white border-t" style="border-color:#e7b98b">

    {{-- Social + logo row --}}
    <div class="py-10 px-6" style="background:#fdf0e0">
        <div class="max-w-4xl mx-auto flex flex-col items-center gap-6">
            <a href="/">
                <img src="/assets/images/logo-toscana.svg" alt="La Toscana" class="h-16">
            </a>
            <p class="text-sm tracking-widest uppercase" style="color:#754c29">Salón de Eventos &amp; Banquetes</p>

            <div class="flex items-center gap-6">

                {{-- Facebook --}}
                <a href="https://www.facebook.com/toscanasalondeeventos/?locale=es_LA" target="_blank" rel="noopener"
                   class="flex flex-col items-center gap-1 group transition-transform duration-150 hover:scale-110 active:scale-95" aria-label="Facebook">
                    <span class="w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-200 group-hover:bg-[#1877F2]"
                          style="background:#3c2415">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.268h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
                        </svg>
                    </span>
                    <span class="text-xs" style="color:#603913">Facebook</span>
                </a>

                {{-- WhatsApp --}}
                <a href="https://wa.me/523326531106" target="_blank" rel="noopener"
                   class="flex flex-col items-center gap-1 group transition-transform duration-150 hover:scale-110 active:scale-95" aria-label="WhatsApp">
                    <span class="w-10 h-10 rounded-full flex items-center justify-center transition-colors duration-200 group-hover:bg-[#25D366]"
                          style="background:#3c2415">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.122 1.532 5.855L.057 23.184a.75.75 0 00.916.916l5.33-1.475A11.954 11.954 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.963 0-3.8-.535-5.373-1.465l-.385-.227-3.989 1.104 1.104-3.989-.227-.385A9.953 9.953 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                        </svg>
                    </span>
                    <span class="text-xs" style="color:#603913">WhatsApp</span>
                </a>

            </div>
        </div>
    </div>

    {{-- Copyright bar --}}
    <div class="py-4 px-6 text-center" style="background:#3c2415">
        <p class="text-xs text-white/70">
            &copy; {{ date('Y') }} La Toscana · Salón de Eventos &amp; Banquetes · Todos los derechos reservados
        </p>
    </div>

</footer>
