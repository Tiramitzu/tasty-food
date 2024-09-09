<nav
    class="flex flex-col uppercase text-white bg-[url(@if(count(Request::segments()) == 2){{ asset($berita->gambar) }}@else{{ asset("assets/Group70.png") }}@endif)] bg-cover">
    <div class="bg-black/50">
        <div class="flex flex-row justify-between items-center p-10 lg:p-20">
            <a href="/" class="text-lg font-bold md:text-xl lg:text-3xl">Tasty Food</a>
            <div class="flex flex-row gap-2 justify-evenly items-center text-sm font-medium lg:gap-10 xl:flex">
                <div class="flex gap-5 text-lg font-normal">
                    <ul id="menu"
                        class="hidden fixed top-0 right-0 z-50 p-10 text-black bg-white lg:flex lg:relative lg:flex-row lg:p-0 lg:space-x-6 lg:text-white lg:bg-transparent">
                        <li class="fixed top-9 right-11 lg:hidden z-[1000]">
                            <button class="text-2xl text-right" onclick="toggleMenu()">&times;</button>
                        </li>
                        <li>
                            <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                href="/">Home</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                href="/tentang">Tentang</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                href="/berita">Berita</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                href="/galeri">Galeri</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                href="/kontak">Kontak</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            @auth
                                <a class="text-sm font-medium text-red-900 opacity-70 duration-300 lg:p-2 lg:text-white lg:bg-red-700 lg:rounded-xl hover:opacity-100 lg:hover:bg-red-700/50"
                                href="{{ route("logout") }}">Logout</a>
                            @endauth
                        </li>
                    </ul>
                    <div class="flex items-center lg:hidden">
                        <button class="relative text-2xl font-bold text-white opacity-70 duration-300 hover:opacity-100"
                            onclick="toggleMenu()">
                            &#9776;
                        </button>
                        <script>
                            var menu = document.getElementById('menu');

                            function toggleMenu() {
                                menu.classList.toggle('hidden');
                                menu.classList.toggle('w-full');
                                menu.classList.toggle('h-screen');
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="p-10 mb-20 text-4xl font-extrabold lg:p-20 lg:text-5xl">
            @if (count(Request::segments()) == 2)
                {{ $berita->judul }}
            @else
                @yield("title") Kami
            @endif
        </h1>
    </div>
</nav>
