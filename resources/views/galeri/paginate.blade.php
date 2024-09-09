<div class="grid grid-cols-2 gap-4 p-10 md:grid-cols-4 lg:p-20">
    @foreach ($galeries2 as $galery)
        <div class="relative group">
            <img src="{{ asset($galery) }}" alt=""
                class="shadow-md aspect-square object-cover w-full h-full rounded-xl bg-[#F4F4F4]" />
            @auth
                <div
                    class="flex absolute top-0 left-0 justify-center items-center w-full h-full bg-gradient-to-t from-gray-800 via-gray-800 rounded-xl opacity-0 group-hover:opacity-50 to-opacity-30">
                </div>
                <div
                    class="flex absolute top-0 left-0 justify-center items-center w-full h-full rounded-xl opacity-0 hover:opacity-100">
                    <button data-modal-target="popup-modal{{ $galery }}"
                        data-modal-toggle="popup-modal{{ $galery }}" type="button"
                        class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-red-400 rounded-lg hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Delete
                    </button>
                </div>
                <div id="popup-modal{{ $galery }}" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button"
                                class="inline-flex absolute right-2.5 top-3 justify-center items-center ml-auto w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:text-gray-900 hover:bg-gray-200"
                                data-modal-hide="popup-modal{{ $galery }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg class="mx-auto mb-4 w-12 h-12 text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin
                                    ingin menghapus gambar ini?</h3>
                                <form action="{{ route("galeri.destroy", str_replace("galery/", "", $galery)) }}"
                                    method="POST"
                                    class="inline-flex items-center py-2.5 px-5 mr-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:outline-none">
                                    @csrf
                                    @method("DELETE")
                                    <button data-modal-hide="popup-modal{{ $galery }}" type="submit">
                                        Ya, Saya yakin
                                    </button>
                                </form>
                                <button data-modal-hide="popup-modal{{ $galery }}" type="button"
                                    class="py-2.5 px-5 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:text-gray-900 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-200 focus:outline-none">Tidak,
                                    batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </div>
    @endforeach
</div>
<div class="px-10 pb-10 w-full lg:px-20 lg:pb-20">
    {{ $galeries2->onEachSide(-1)->links() }}
</div>
