<?php $__env->startSection("title", "Galeri"); ?>
<?php $__env->startSection("content"); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php if($errors->any()): ?>
            <div id="toast-danger"
                class="flex fixed right-5 bottom-5 items-center p-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow"
                role="alert">
                <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ml-3 text-sm font-normal"><?php echo e($errors->first()); ?></div>
                <button type="button"
                    class="inline-flex justify-center items-center p-1.5 -my-1.5 -mx-1.5 ml-auto w-8 h-8 text-gray-400 bg-white rounded-lg hover:text-gray-900 hover:bg-gray-100 focus:ring-2 focus:ring-gray-300"
                    data-dismiss-target="#toast-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <div class="flex flex-row p-6 lg:p-20">
            <button data-modal-target="add-modal" data-modal-toggle="add-modal" type="button"
                class="p-2 rounded-lg duration-200 lg:p-8 hover:opacity-50 focus:border-2 focus:border-black">
                <div class="flex flex-row gap-4 justify-center items-center max-h-20 text-black">
                    <div class="py-3 px-4 text-3xl text-white bg-green-400 rounded-full w-[60px]">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="text-lg font-medium lg:text-3xl">Tambah Gambar</p>
                    </div>
                </div>
            </button>

            <div id="add-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative p-5 bg-white rounded-lg shadow">
                        <button type="button"
                            class="inline-flex absolute right-2.5 top-3 justify-center items-center ml-auto w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:text-gray-900 hover:bg-gray-200"
                            data-modal-hide="add-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <form action="<?php echo e(route("galeri.store")); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("POST"); ?>
                                <div class="mb-5">
                                    <ul
                                        class="items-center mb-5 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex">
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center pl-3">
                                                <input id="file-radio" type="radio" value="file" name="img-type"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-2 focus:ring-blue-500">
                                                <label for="file-radio"
                                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900">Dari
                                                    File</label>
                                            </div>
                                        </li>
                                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                            <div class="flex items-center pl-3">
                                                <input id="url-radio" type="radio" value="url" name="img-type"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-2 focus:ring-blue-500">
                                                <label for="url-radio"
                                                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900">Dari
                                                    URL</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="file-input" class="flex hidden flex-col items-center">
                                        <label for="file" class="block mb-2 text-sm font-medium text-gray-900">File</label>
                                        <input type="file" name="file" id="file"
                                            class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600"
                                            placeholder="file" value="">
                                        <div class="my-2 col-md-12">
                                            <img id="preview-image-before-upload"
                                                src="//www.ecreativeim.com/blog/wp-content/uploads/2011/05/image-not-found.jpg"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                    </div>
                                    <div id="url-input" class="hidden">
                                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900">URL</label>
                                        <input type="url" name="url" id="url"
                                            class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-neutral-600 focus:border-neutral-600"
                                            placeholder="url" value="">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="py-2.5 px-5 w-full text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-neutral-600 hover:bg-neutral-700 focus:ring-neutral-300">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div id="controls-carousel" class="block relative p-10 lg:p-20 w-full bg-[#F4F4F4]" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative rounded-xl shadow-lg h-[10rem] md:h-[30rem]">
            <?php $__currentLoopData = $galeries1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hidden duration-700 ease-in-out group" data-carousel-item="active">
                    <img src="<?php echo e(asset("") . $galery); ?>"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="..." />
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="flex absolute top-0 left-1 z-30 justify-center items-center px-4 h-full cursor-pointer lg:left-10 focus:outline-none group"
            data-carousel-prev>
            <span
                class="inline-flex justify-center items-center w-8 h-8 bg-white rounded-full shadow-xl md:w-14 md:h-14 group-focus:ring-white group-focus:outline-none roup-focus:ring-4 group-hover:bg-white/50">
                <svg class="w-4 h-4 text-black md:w-6 md:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-1 z-30 justify-center items-center px-4 h-full cursor-pointer lg:right-10 focus:outline-none group"
            data-carousel-next>
            <span
                class="inline-flex justify-center items-center w-8 h-8 bg-white rounded-full md:w-14 md:h-14 group-focus:ring-4 group-focus:ring-white group-focus:outline-none group-hover:bg-white/50">
                <svg class="w-4 h-4 text-black md:w-6 md:h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div id="galeri-data">
        <div class="grid grid-cols-2 gap-4 p-10 md:grid-cols-4 lg:p-20">
            <?php $__currentLoopData = $galeries2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative group">
                    <img src="<?php echo e(asset("") . $galery); ?>" alt=""
                        class="shadow-md aspect-square object-cover w-full h-full rounded-xl bg-[#F4F4F4]" />
                    <?php if(auth()->guard()->check()): ?>
                        <div
                            class="flex absolute top-0 left-0 justify-center items-center w-full h-full bg-gradient-to-t from-gray-800 via-gray-800 rounded-xl opacity-0 group-hover:opacity-50 to-opacity-30">
                        </div>
                        <div
                            class="flex absolute top-0 left-0 justify-center items-center w-full h-full rounded-xl opacity-0 hover:opacity-100">
                            <button data-modal-target="popup-modal<?php echo e($galery); ?>"
                                data-modal-toggle="popup-modal<?php echo e($galery); ?>" type="button"
                                class="block py-2 px-4 w-max text-sm font-normal whitespace-nowrap bg-red-400 rounded-lg hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 active:text-neutral-800 disabled:text-neutral-400">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Delete
                            </button>
                        </div>
                        <div id="popup-modal<?php echo e($galery); ?>" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="inline-flex absolute right-2.5 top-3 justify-center items-center ml-auto w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:text-gray-900 hover:bg-gray-200"
                                        data-modal-hide="popup-modal<?php echo e($galery); ?>">
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
                                        <form action="<?php echo e(route("galeri.destroy", str_replace("galery/", "", $galery))); ?>"
                                            method="POST"
                                            class="inline-flex items-center py-2.5 px-5 mr-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 focus:outline-none">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("DELETE"); ?>
                                            <button data-modal-hide="popup-modal<?php echo e($galery); ?>" type="submit">
                                                Ya, Saya yakin
                                            </button>
                                        </form>
                                        <button data-modal-hide="popup-modal<?php echo e($galery); ?>" type="button"
                                            class="py-2.5 px-5 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:text-gray-900 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-200 focus:outline-none">Tidak,
                                            batalkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="px-10 pb-10 w-full lg:px-20 lg:pb-20">
            <?php echo e($galeries2->onEachSide(-1)->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>
    <script type="text/javascript">
        const fileInput = document.getElementById('file-input');
        const urlInput = document.getElementById('url-input');
        const file = document.getElementById('file-radio');
        const url = document.getElementById('url-radio');

        file.addEventListener('click', () => {
            fileInput.classList.remove('hidden');
            urlInput.classList.add('hidden');
        });

        url.addEventListener('click', () => {
            fileInput.classList.add('hidden');
            urlInput.classList.remove('hidden');
        });

        $('#file').change(function() {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $(document).on('click', '#prev, #next', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/galeri_paginate?page=' + $(this).attr('data-from'),
                    type: 'get',
                    dataType: 'html',
                }).done(function(data) {
                    $('#galeri-data').html(data);
                });
            });

            $(document).on('click', '.page-link', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/galeri_paginate?page=' + $(this).attr('data-from'),
                    type: 'get',
                    dataType: 'html',
                }).done(function(data) {
                    $('#galeri-data').html(data);
                });
            });

            setInterval(function() {
                $('[data-carousel-next]').trigger('click');
            }, 5000);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/galeri/index.blade.php ENDPATH**/ ?>