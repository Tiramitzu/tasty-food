<?php $__env->startSection("title", "Tentang"); ?>
<?php $__env->startSection("content"); ?>
    <div class="bg-[#F4F4F4] p-10 lg:p-20 flex flex-col md:flex-row gap-6 md:gap-10">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-3xl font-bold uppercase">Tasty Food</p>
                <?php if(auth()->guard()->check()): ?>
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-orange-500 rounded-lg animate-pulse">
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
                <?php endif; ?>
            </div>
            <div class="flex flex-col gap-4 text-sm md:text-md">
                <p class="font-bold" id="about1"><?php echo $tentang["about1"]; ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <textarea name="about1_input" id="about1_input" cols="30" rows="10" class="hidden"></textarea>
                <?php endif; ?>
                <p id="about2"><?php echo $tentang["about2"]; ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <textarea name="about2_input" id="about2_input" cols="30" rows="10" class="hidden"></textarea>
                <?php endif; ?>
            </div>
        </div>
        <div class="flex flex-row gap-2 w-full md:w-1/2">
            <img src="<?php echo e(asset("")); ?>assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt=""
                class="object-cover w-full rounded-xl shadow-md md:w-1/2" />
            <img src="<?php echo e(asset("")); ?>assets/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt=""
                class="hidden object-cover w-1/2 rounded-xl shadow-md md:block" />
        </div>
    </div>
    <div class="flex flex-col gap-6 p-10 md:flex-row md:gap-10 lg:p-20">
        <div class="grid-cols-2 gap-2 w-full md:grid md:w-1/2">
            <img src="<?php echo e(asset("")); ?>assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt=""
                class="rounded-xl shadow-md aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" alt=""
                class="hidden rounded-xl shadow-md md:block aspect-square" />
        </div>
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-xl font-bold uppercase">Visi</p>
                <?php if(auth()->guard()->check()): ?>
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-orange-500 rounded-lg animate-pulse">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                <?php endif; ?>
            </div>
            <p id="visi" class="text-sm md:text-md"><?php echo $tentang["visi"]; ?></p>
            <?php if(auth()->guard()->check()): ?>
                <textarea name="visi_input" id="visi_input" cols="30" rows="10" class="hidden"></textarea>
            <?php endif; ?>
        </div>
    </div>
    <div class="bg-[#F4F4F4] p-10 lg:p-20 h-full md:h-[26rem] flex flex-col md:flex-row md:gap-10">
        <div class="flex flex-col gap-4 w-full md:w-1/2">
            <div class="flex flex-row gap-2 items-center">
                <p class="text-xl font-bold uppercase">Misi</p>
                <?php if(auth()->guard()->check()): ?>
                    <div data-popover-target="popover-about"
                        class="inline-flex flex-shrink-0 justify-center items-center text-orange-500 rounded-lg animate-pulse">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                <?php endif; ?>
            </div>
            <p id="misi" class="text-sm md:text-md"><?php echo $tentang["misi"]; ?></p>
            <?php if(auth()->guard()->check()): ?>
                <textarea name="misi_input" id="misi_input" cols="30" rows="10" class="hidden"></textarea>
            <?php endif; ?>
        </div>
        <div class="flex flex-row gap-2 w-full md:w-1/2">
            <img src="<?php echo e(asset("")); ?>assets/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt=""
                class="object-cover w-full rounded-xl shadow-md" />
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php if(auth()->guard()->check()): ?>
    <?php $__env->startSection("script"); ?>
        <script src="<?php echo e(asset("scripts/update.js")); ?>"></script>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/tentang.blade.php ENDPATH**/ ?>