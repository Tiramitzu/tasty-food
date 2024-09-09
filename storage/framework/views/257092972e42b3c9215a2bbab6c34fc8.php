<?php $__env->startSection("title", "Berita"); ?>
<?php $__env->startSection("head"); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <?php if(auth()->guard()->check()): ?>
        <div class="flex flex-row p-4 lg:p-12">
            <a href="<?php echo e(route("berita.create")); ?>" class="p-2 rounded-lg duration-200 lg:p-8 hover:opacity-50 focus:border-2 focus:border-black">
                <div class="flex flex-row gap-4 justify-center items-center max-h-20 text-black">
                    <div class="py-3 px-4 text-3xl text-white bg-green-400 rounded-full w-[60px]">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="text-lg font-medium lg:text-3xl">Tambah Berita</p>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>
    <div class="bg-[#F4F4F4] p-6 lg:p-20">
        <div class="grid grid-cols-1 gap-8 justify-center items-center md:grid-cols-2">
            <img src="<?php echo e($hberita->gambar); ?>" alt=""
                class="object-cover w-full h-full rounded-xl shadow-lg aspect-square">
            <div class="flex flex-col gap-8">
                <h2 class="text-3xl font-bold uppercase"><?php echo e($hberita->judul); ?></h2>
                <p class="text-sm whitespace-pre-wrap"><?php echo nl2br(e($hberita->isi)); ?></p>
                <div class="flex flex-col gap-2 lg:flex-row lg:justify-between">
                    <a href="<?php echo e(route("berita.show", $hberita->slug)); ?>"
                        class="py-3 px-4 w-max font-bold text-white uppercase bg-black lg:px-14 hover:bg-black/90">Baca
                        Selengkapnya</a>
                    <?php if(auth()->guard()->check()): ?>
                        <div class="flex flex-row lg:justify-center lg:items-center">
                            <a class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-blue-400 rounded-l-xl hover:bg-blue-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none h-max text-neutral-200 active:text-neutral-800 disabled:text-neutral-400"
                                href="<?php echo e(route("berita.edit", $hberita->slug)); ?>" data-te-dropdown-item-ref>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit
                            </a>
                            <button data-modal-target="popup-modal<?php echo e($hberita->slug); ?>"
                                data-modal-toggle="popup-modal<?php echo e($hberita->slug); ?>" type="button"
                                class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-red-400 rounded-r-xl hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Delete
                            </button>
                        </div>
                        <div id="popup-modal<?php echo e($hberita->slug); ?>" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="inline-flex absolute right-2.5 top-3 justify-center items-center ml-auto w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:text-gray-900 hover:bg-gray-200"
                                        data-modal-hide="popup-modal<?php echo e($hberita->slug); ?>">
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
                                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda
                                            yakin
                                            ingin menghapus berita ini?</h3>
                                        <form action="<?php echo e(route("berita.destroy", $hberita->slug)); ?>" method="POST"
                                            class="inline-flex items-center py-2.5 px-5 mr-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:outline-none">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("DELETE"); ?>
                                            <button data-modal-hide="popup-modal<?php echo e($hberita->slug); ?>" type="submit">
                                                Ya, Saya yakin
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal<?php echo e($hberita->slug); ?>" type="button"
                                            class="py-2.5 px-5 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:text-gray-900 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-200 focus:outline-none">Tidak,
                                            batalkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col gap-10 p-8 lg:p-20" id="berita-data">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col gap-4 h-full rounded-xl shadow-lg">
                    <img src="<?php echo e($berita->gambar); ?>" alt="" class="object-cover rounded-t-xl aspect-video">
                    <div class="flex flex-col gap-6 p-4 h-full">
                        <h2 class="text-2xl font-bold uppercase"><?php echo e(substr($berita->judul, 0, 15) . "..."); ?></h2>
                        <p class="text-sm">
                            <?php echo e(substr($berita->isi, 0, 100) . "..."); ?>

                        </p>
                        <div class="flex flex-row justify-between mt-auto">
                            <a href="<?php echo e(route("berita.show", $berita->slug)); ?>" class="text-sm text-yellow-500">Baca
                                selengkapnya</a>
                            <?php if(auth()->guard()->check()): ?>
                                <div class="relative" data-te-dropdown-position="dropup">
                                    <button
                                        class="flex items-center text-sm font-medium leading-normal text-white uppercase whitespace-nowrap transition duration-150 ease-in-out bg-primary pt-[10px] motion-reduce:transition-none"
                                        type="button" id="dropdownMenuButton1u" data-te-dropdown-toggle-ref
                                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                        <div class="flex gap-1 items-center cursor-pointer">
                                            <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                            <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                            <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                        </div>
                                    </button>
                                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                                        aria-labelledby="dropdownMenuButton1u" data-te-dropdown-menu-ref>
                                        <li>
                                            <a class="block py-2 px-4 w-full text-sm font-normal whitespace-nowrap bg-blue-400 hover:bg-blue-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400"
                                                href="<?php echo e(route("berita.edit", $berita->slug)); ?>" data-te-dropdown-item-ref>
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <button data-modal-target="popup-modal<?php echo e($berita->slug); ?>" data-modal-toggle="popup-modal<?php echo e($berita->slug); ?>"
                                                type="button"
                                                class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-red-400 rounded-b-lg hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div id="popup-modal<?php echo e($berita->slug); ?>" tabindex="-1"
                                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <button type="button"
                                                class="inline-flex absolute right-2.5 top-3 justify-center items-center ml-auto w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:text-gray-900 hover:bg-gray-200"
                                                data-modal-hide="popup-modal<?php echo e($berita->slug); ?>">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <svg class="mx-auto mb-4 w-12 h-12 text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda
                                                    yakin
                                                    ingin menghapus berita ini?</h3>
                                                <form action="<?php echo e(route("berita.destroy", $berita->slug)); ?>" method="POST"
                                                    class="inline-flex items-center py-2.5 px-5 mr-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:outline-none">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field("DELETE"); ?>
                                                    <button data-modal-hide="popup-modal<?php echo e($berita->slug); ?>" type="submit">
                                                        Ya, Saya yakin
                                                    </button>
                                                </form>
                                                <button data-modal-hide="popup-modal<?php echo e($berita->slug); ?>" type="button"
                                                    class="py-2.5 px-5 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:text-gray-900 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-200 focus:outline-none">Tidak,
                                                    batalkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="w-full">
            <?php echo e($beritas->onEachSide(-1)->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $(document).on('click', '#prev, #next', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/berita_paginate?page=' + $(this).attr('data-from'),
                    type: 'get',
                    dataType: 'html',
                }).done(function(data) {
                    $('#berita-data').html(data);
                });
            });
        });

        $(document).ready(function() {
            $(document).on('click', '.page-link', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/berita_paginate?page=' + $(this).attr('data-from'),
                    type: 'get',
                    dataType: 'html',
                }).done(function(data) {
                    $('#berita-data').html(data);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/berita/index.blade.php ENDPATH**/ ?>