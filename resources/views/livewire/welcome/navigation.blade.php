<nav class="flex justify-end flex-1 -mx-3">
    @auth
        <a href="{{ url('/inicio') }}"
            class=" text-3xl font-semibold rounded-md px-18 mr-10 py-3 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
            Voltar Ao Dashboard
        </a>
    @else
        <a href="{{ route('login') }}"
            class="px-3 py-2 text-lg font-semibold text-black transition duration-500 ease-in-out   hover:shadow-lg rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-white  hover:text-[#4338ca]">
            Entrar
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="px-3 py-2 text-lg font-semibold text-black transition duration-500 ease-in-out   hover:shadow-lg rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-white  hover:text-[#4338ca] ">
                Cadastrar
            </a>
        @endif
    @endauth
</nav>
