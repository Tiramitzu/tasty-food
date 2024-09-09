@extends("layouts.app")
@section("title", "Tentang")
@section("content")
    <div class="bg-[#F4F4F4] p-10 lg:p-20 flex flex-col md:flex-row gap-6 md:gap-10">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-3xl font-bold uppercase">Tasty Food</p>
                @auth
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-blue-500 rounded-lg animate-pulse">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                    <div data-popover id="popover-about" role="tooltip"
                        class="inline-block absolute invisible z-10 w-64 text-sm text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300">
                        <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200">
                            <h3 class="font-semibold text-gray-900">Tips Untuk Admin</h3>
                        </div>
                        <div class="py-2 px-3">
                            <p>Double Click Untuk Mengubah Text Dibawah Ini!</p>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                @endauth
            </div>
            <div class="flex flex-col gap-4 text-sm md:text-md">
                <p class="font-bold" id="about1">{!! $tentang["about1"] !!}</p>
                @auth
                    <textarea name="about1_input" id="about1_input" cols="30" rows="10" class="hidden"></textarea>
                @endauth
                <p id="about2">{!! $tentang["about2"] !!}</p>
                @auth
                    <textarea name="about2_input" id="about2_input" cols="30" rows="10" class="hidden"></textarea>
                @endauth
            </div>
        </div>
        <div class="flex flex-row gap-2 w-full md:w-1/2">
            <img src="{{ asset("") }}assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt=""
                class="object-cover w-full rounded-xl shadow-md md:w-1/2" />
            <img src="{{ asset("") }}assets/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt=""
                class="hidden object-cover w-1/2 rounded-xl shadow-md md:block" />
        </div>
    </div>
    <div class="flex flex-col gap-6 p-10 md:flex-row md:gap-10 lg:p-20">
        <div class="grid-cols-2 gap-2 w-full md:grid md:w-1/2">
            <img src="{{ asset("") }}assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt=""
                class="rounded-xl shadow-md aspect-square" />
            <img src="{{ asset("") }}assets/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" alt=""
                class="hidden rounded-xl shadow-md md:block aspect-square" />
        </div>
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-xl font-bold uppercase">Visi</p>
                @auth
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-blue-500 rounded-lg animate-pulse">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                @endauth
            </div>
            <p id="visi" class="text-sm md:text-md">{!! $tentang["visi"] !!}</p>
            @auth
                <textarea name="visi_input" id="visi_input" cols="30" rows="10" class="hidden"></textarea>
            @endauth
        </div>
    </div>
    <div class="bg-[#F4F4F4] p-10 lg:p-20 h-full md:h-[26rem] flex flex-col gap-6 md:flex-row md:gap-10">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-xl font-bold uppercase">Misi</p>
                @auth
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-blue-500 rounded-lg animate-pulse">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                @endauth
            </div>
            <p id="misi" class="text-sm md:text-md">{!! $tentang["misi"] !!}</p>
            @auth
                <textarea name="misi_input" id="misi_input" cols="30" rows="10" class="hidden"></textarea>
            @endauth
        </div>
        <div class="flex flex-row gap-2 w-full md:w-1/2">
            <img src="{{ asset("") }}assets/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt=""
                class="object-cover w-full rounded-xl shadow-md" />
        </div>
    </div>
@endsection
@auth
    @section("script")
        <script src="{{ asset("scripts/update.js") }}"></script>
    @endsection
@endauth
