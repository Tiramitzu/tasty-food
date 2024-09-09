<div class="grid grid-cols-2 gap-4 p-10 lg:grid-cols-4 lg:p-20">
    <?php $__currentLoopData = $galeries2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="relative group">
            <img src="<?php echo e(asset("") . $galery); ?>" alt=""
                class="shadow-md aspect-square w-full h-full object-cover rounded-xl bg-[#F4F4F4]" />
            <?php if(auth()->guard()->check()): ?>
                <div
                    class="flex absolute top-0 left-0 justify-center items-center w-full h-full bg-gradient-to-t from-gray-800 via-gray-800 opacity-0 group-hover:opacity-50 to-opacity-30">
                </div>
                <div
                    class="flex absolute top-0 left-0 justify-center items-center w-full h-full opacity-0 hover:opacity-100">
                    <div class="flex-row text-center">
                        <form action="<?php echo e(route("galeri.destroy", $galery)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("DELETE"); ?>
                            <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')"
                                class="block py-2 px-4 w-full text-sm font-normal whitespace-nowrap bg-red-400 rounded-lg hover:bg-red-800 active:no-underline disabled:bg-transparent disabled:pointer-events-none text-neutral-200 dark:text-neutral-200 dark:hover:bg-neutral-600 active:text-neutral-800 disabled:text-neutral-400">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="px-10 pb-10 w-full lg:px-20 lg:pb-20">
    <?php echo e($galeries2->onEachSide(-1)->links()); ?>

</div>
<?php /**PATH /var/www/html/resources/views/galeri/paginate.blade.php ENDPATH**/ ?>