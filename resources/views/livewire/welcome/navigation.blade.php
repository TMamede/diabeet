<nav class="flex justify-end flex-1 -mx-3">
    @auth
        <a href="{{ url('/inicio') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Início
        </a>
    @else
        <a href="{{ route('login') }}"
            class="px-3 py-2 text-lg font-semibold text-black transition duration-500 ease-in-out  hover:text-[#315474] hover:shadow-lg rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-[#4338ca] dark:focus-visible:ring-white">
            Entrar
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="px-3 py-2 text-lg font-semibold text-black transition duration-500 ease-in-out  hover:text-[#315474] hover:shadow-lg rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-[#4338ca] dark:focus-visible:ring-white">
                Cadastrar
            </a>
        @endif
    @endauth
</nav>
