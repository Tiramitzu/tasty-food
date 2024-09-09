@extends("layouts.app")
@section("title", $berita->judul)
@section("content")
    @auth
        <div class="flex flex-col gap-4 justify-center items-center p-6 lg:flex-row lg:justify-between lg:p-20">
            <a href="{{ route("berita.edit", $berita->slug) }}">
                <div class="flex flex-row gap-4 justify-center items-center max-h-20 text-black">
                    <div class="py-3 px-4 text-3xl text-white bg-blue-400 rounded-full w-[60px]">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="text-lg font-medium lg:text-3xl">Edit Berita</p>
                    </div>
                </div>
            </a>
            <form method="POST" action="{{ route("berita.destroy", $berita->slug) }}">
                @csrf
                @method("DELETE")
                <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')" class="flex flex-row gap-4 justify-center items-center max-h-20 text-black">
                    <div class="py-3 px-4 text-3xl text-white bg-red-400 rounded-full w-[60px]">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="text-lg font-medium lg:text-3xl">Hapus Berita</p>
                    </div>
                </button>
            </a>
        </div>
    @endauth
    <div class="bg-[#F4F4F4] px-5 lg:py-20 lg:px-40 xl:px-96 py-10">
        <div class="justify-center items-center">
            <div class="flex flex-col gap-8 whitespace-pre-wrap">
                <p class="text-sm">{!! nl2br(e($berita->isi)) !!}</p>
                <div class="flex flex-col justify-between items-center lg:flex-row lg:mt-10">
                    @auth
                        <div class="flex flex-row gap-1 justify-start items-center w-1/2">
                            <a class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-blue-400 rounded-xl hover:bg-blue-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none h-max text-neutral-200 active:text-neutral-800 disabled:text-neutral-400"
                                href="{{ route("berita.edit", $berita->slug) }}" data-te-dropdown-item-ref>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>
                            <form action="{{ route("berita.destroy", $berita->slug) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')"
                                    class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-red-400 rounded-xl hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endauth
                    <p class="w-full text-xs text-center text-end text-neutral-500">
                        @if ($berita->updated_at != null)
                            Diperbarui pada {{ $berita->updated_at->format("H:i \| d/m/Y") }}
                            Dibuat pada {{ $berita->created_at->format("H:i \| d/m/Y") }}
                        @else
                            Dibuat pada {{ $berita->created_at->format("H:i \| d/m/Y") }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
