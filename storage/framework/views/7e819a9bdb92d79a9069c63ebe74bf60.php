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
                                class="flex items-center whitespace-nowrap  bg-primary pt-[10px] text-sm font-medium uppercase leading-normal text-white  transition duration-150 ease-in-out  motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]  "
                                type="button" id="dropdownMenuButton1u" data-te-dropdown-toggle-ref
                                aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                <div class="flex gap-1 items-center cursor-pointer">
                                    <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                    <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                    <div class="w-1 h-1 bg-gray-600 rounded-xl"></div>
                                </div>
                            </button>
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton1u" data-te-dropdown-menu-ref>
                                <li>
                                    <a class="block py-2 px-4 w-full text-sm font-normal whitespace-nowrap bg-blue-400 hover:bg-blue-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 dark:text-neutral-200 dark:hover:bg-neutral-600 active:text-neutral-800 disabled:text-neutral-400"
                                        href="<?php echo e(route("berita.edit", $berita->slug)); ?>" data-te-dropdown-item-ref>
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo e(route("berita.destroy", $berita->slug)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button type="submit"
                                            onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')"
                                            class="block py-2 px-4 w-full text-sm font-normal whitespace-nowrap bg-red-400 hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 dark:text-neutral-200 dark:hover:bg-neutral-600 active:text-neutral-800 disabled:text-neutral-400">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            Delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
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
<?php /**PATH /var/www/html/resources/views/berita/pagination.blade.php ENDPATH**/ ?>