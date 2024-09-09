@extends("layouts.app")
@section("title", "Tambah Berita")
@section("content")
    <section class="p-5 bg-white drop-shadow-xl">
        <div class="flex flex-row justify-between items-center">
            <a href="/" class="text-xl font-bold lg:text-3xl">Tasty Food</a>
            <div class="flex flex-row gap-2 justify-evenly items-center text-sm font-medium lg:gap-10 xl:flex">
                <div class="flex gap-5 text-lg font-normal">
                    <ul id="menu"
                        class="hidden fixed top-0 right-0 z-50 p-10 text-black bg-white lg:flex lg:relative lg:flex-row lg:p-0 lg:space-x-6 lg:text-white lg:bg-transparent">
                        <li class="fixed top-8 right-10 lg:hidden z-[1000]">
                            <button class="text-5xl text-right" onclick="toggleMenu()">&times;</button>
                        </li>
                        <li>
                            <a class="text-sm font-medium text-black opacity-70 duration-300 hover:opacity-100"
                                href="/">Home</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium text-black opacity-70 duration-300 hover:opacity-100"
                                href="/tentang">Tentang</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium text-black opacity-70 duration-300 hover:opacity-100"
                                href="/berita">Berita</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium text-black opacity-70 duration-300 hover:opacity-100"
                                href="/galeri">Galeri</a>
                        </li>
                        <li class="mt-8 lg:mt-0">
                            <a class="text-sm font-medium text-black opacity-70 duration-300 hover:opacity-100"
                                href="/kontak">Kontak</a>
                        </li>
                    </ul>
                    <div class="flex items-center lg:hidden">
                        <button class="relative text-4xl font-bold text-black opacity-70 duration-300 hover:opacity-100"
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
                @auth
                    <a href="{{ route("logout") }}" class="p-2 text-white bg-red-700 rounded-xl hover:bg-red-700/50">Logout</a>
                @endauth
            </div>
        </div>
    </section>
    <section class="bg-gray-50">
        <div class="flex flex-row justify-center items-center p-10 mx-auto lg:p-20">
            <div class="w-full bg-white rounded-lg shadow sm:max-w-md">
                <h1 class="p-6 text-3xl font-bold text-center">Tambah Berita</h1>
                <hr class="mx-20 border-black/20 border-1">
                <div class="p-6 space-y-4 sm:p-8 md:space-y-6 z-100">
                    <form class="flex flex-col gap-4" action="{{ route("berita.store") }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Judul
                                @error("title")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <input type="title" name="title" id="title"
                                class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border @error("title") border-red-500 @enderror border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600"
                                value="{{ old("title") }}">
                        </div>
                        <div>
                            <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Isi
                                @error("content")
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <textarea type="content" name="content" id="content" cols="40" rows="5"
                                class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border @error("content") border-red-500 @enderror border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600">{{ old("content") }}</textarea>
                        </div>
                        <p class="block text-sm font-medium text-gray-900">Gambar
                            @error("img-type")
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            @error("file")
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            @error("url")
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            @error("galery")
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </p>
                        <ul
                            class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border
                            @error("img-type")
                                border-red-500
                            @enderror
                            @error("file")
                                border-red-500
                            @enderror
                            @error("url")
                                border-red-500
                            @enderror
                            @error("galery")
                                border-red-500
                            @enderror
                            border-gray-200 sm:flex">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="file-radio" type="radio" value="file" name="img-type"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    <label for="file-radio" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">Dari
                                        File</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="url-radio" type="radio" value="url" name="img-type"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    <label for="url-radio" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">Dari
                                        URL</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="galery-radio" type="radio" value="galery" name="img-type"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-2 focus:ring-blue-500">
                                    <label for="galery-radio"
                                        class="py-3 ml-2 w-full text-sm font-medium text-gray-900">Dari
                                        Galeri</label>
                                </div>
                            </li>
                        </ul>
                        <div id="file-input" class="hidden">
                            <label for="file" class="block mb-2 text-sm font-medium text-gray-900">File</label>
                            <input type="file" name="file" id="file"
                                class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600"
                                placeholder="file" value="">
                        </div>
                        <div id="url-input" class="hidden">
                            <label for="url" class="block mb-2 text-sm font-medium text-gray-900">URL</label>
                            <input type="url" name="url" id="url"
                                class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600"
                                placeholder="url" value="">
                        </div>
                        <div id="galery-input" class="hidden">
                            <label for="galery" class="block mb-2 text-sm font-medium text-gray-900">Galery</label>
                            <select name="galery" id="galery" onchange="changePrev(this.value)"
                                class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600">
                                <option value="">Pilih Galery</option>
                                @foreach ($galeries as $galery)
                                    <option value="{{ $galery }}">{{ str_replace("galery/", "", $galery) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div id="preview" class="hidden mx-auto mb-2 col-md-12">
                            <img id="preview-image-before-upload"
                                src="//www.ecreativeim.com/blog/wp-content/uploads/2011/05/image-not-found.jpg"
                                alt="preview image" style="max-height: 250px;">
                        </div>
                        <button type="submit"
                            class="py-2.5 px-5 w-full text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-neutral-600 hover:bg-neutral-700 focus:ring-neutral-300">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("script")
    <script type="text/javascript">
        const fileInput = document.getElementById('file-input');
        const urlInput = document.getElementById('url-input');
        const galeryInput = document.getElementById('galery-input');
        const file = document.getElementById('file-radio');
        const url = document.getElementById('url-radio');
        const galery = document.getElementById('galery-radio');
        const preview = document.getElementById('preview');

        file.addEventListener('click', () => {
            fileInput.classList.remove('hidden');
            preview.classList.remove('hidden');
            urlInput.classList.add('hidden');
            galeryInput.classList.add('hidden');
        });

        url.addEventListener('click', () => {
            fileInput.classList.add('hidden');
            preview.classList.add('hidden');
            urlInput.classList.remove('hidden');
            galeryInput.classList.add('hidden');
        });

        galery.addEventListener('click', () => {
            fileInput.classList.add('hidden');
            preview.classList.remove('hidden');
            urlInput.classList.add('hidden');
            galeryInput.classList.remove('hidden');
        });

        $('#file').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        });

        function changePrev(params) {
            var imageSrc = "{!! asset("") !!}" + params;
            $('#preview-image-before-upload').attr('src', imageSrc);
        }
    </script>
@endsection
