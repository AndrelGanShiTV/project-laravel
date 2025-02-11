<header class="">
    <div class="">
        <div class="">
            <button type="button" class="">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <x-logo />
        </div>
        <div class="">
            <a href="">ICONO</a>
        </div>
    </div>
    <nav>
        @foreach (["women","men","kids","accesories","about us","news","contact us"] as $item)
        <a href="">{{ $item }}</a>
        @endforeach
        <button>CERRAR</button>
    </nav>
</header>