<?php $__env->startSection("title", "Kontak"); ?>
<?php $__env->startSection("content"); ?>
    <section id="kontak" class="flex flex-col justify-center p-10 lg:p-20">
        <h2 class="mb-12 text-3xl font-bold uppercase">Kontak kami</h2>
        <form action="<?php echo e(route("send-email")); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="flex flex-col gap-2 lg:flex-row">
                <div class="flex flex-col gap-3 lg:w-1/2">
                    <div class="rounded-2xl">
                        <input type="text" placeholder="Subject" name="subject"
                            class="p-3 w-full text-lg rounded-2xl border-2 <?php $__errorArgs = ["subject"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> border-black focus:outline-none h-[6rem]">
                        <?php $__errorArgs = ["subject"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="rounded-2xl">
                        <input type="text" placeholder="Name" name="name"
                            class="p-3 w-full text-lg rounded-2xl border-2 <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> border-black focus:outline-none h-[6rem]">
                        <?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="rounded-2xl">
                        <input type="email" placeholder="Email" name="email"
                            class="p-3 w-full text-lg rounded-2xl border-2 <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> border-black focus:outline-none h-[6rem]">
                        <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="w-full rounded-2xl">
                        <textarea placeholder="Message" name="message"
                            class="p-8 w-full text-lg rounded-2xl border-2 <?php $__errorArgs = ["message"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> border-black resize-none focus:outline-none h-[312px]"></textarea>
                        <?php $__errorArgs = ["message"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="mt-6 w-full h-24 text-2xl font-bold text-white uppercase bg-black rounded-2xl">Kirim</button>
        </form>
    </section>
    <section class="py-4 px-10 lg:px-20" id="contact">
        <div class="flex flex-col justify-between md:flex-row">
            <div class="flex flex-row gap-2 items-center mb-4 md:flex-col">
                <img class="w-12 h-12 lg:w-28 lg:h-28" src="<?php echo e(asset("icons/Group-66.png")); ?>" alt="">
                <div class="flex flex-row gap-2 items-center">
                    <h3 class="text-lg font-bold text-center uppercase lg:text-2xl">email</h3>
                    <?php if(auth()->guard()->check()): ?>
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
                    <?php endif; ?>
                </div>
                <p id="email" class="text-sm tracking-wide lg:text-xl"><?php echo $kontak["email"]; ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <textarea name="email_input" id="email_input" cols="30" rows="2" class="hidden"></textarea>
                <?php endif; ?>
            </div>
            <div class="flex flex-row gap-2 items-center mb-4 md:flex-col">
                <img class="w-12 h-12 lg:w-28 lg:h-28" src="<?php echo e(asset("icons/Group-67.png")); ?>" alt="">
                <div class="flex flex-row gap-2 items-center">
                    <h3 class="text-lg font-bold text-center uppercase lg:text-2xl">phone</h3>
                    <?php if(auth()->guard()->check()): ?>
                        <div data-popover-target="popover-about"
                            class="inline-flex flex-shrink-0 justify-center items-center text-blue-500 rounded-lg animate-pulse">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                            </svg>
                            <span class="sr-only">Warning icon</span>
                        </div>
                    <?php endif; ?>
                </div>
                <p id="phone" class="text-sm tracking-wide lg:text-xl"><?php echo $kontak["phone"]; ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <textarea name="phone_input" id="phone_input" cols="30" rows="2" class="hidden"></textarea>
                <?php endif; ?>
            </div>
            <div class="flex flex-row gap-2 items-center mb-4 md:flex-col">
                <img class="w-12 h-12 lg:w-28 lg:h-28" src="<?php echo e(asset("icons/Group-68.png")); ?>" alt="">
                <div class="flex flex-row gap-2 items-center">
                    <h3 class="text-lg font-bold text-center uppercase lg:text-2xl">location</h3>
                    <?php if(auth()->guard()->check()): ?>
                        <div data-popover-target="popover-about"
                            class="inline-flex flex-shrink-0 justify-center items-center text-blue-500 rounded-lg animate-pulse">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                            </svg>
                            <span class="sr-only">Warning icon</span>
                        </div>
                    <?php endif; ?>
                </div>
                <p id="location" class="text-sm tracking-wide lg:text-xl"><?php echo $kontak["location"]; ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <textarea name="location_input" id="location_input" cols="30" rows="2" class="hidden"></textarea>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="maps" class="p-10 lg:p-20">
        <iframe class="w-full h-[500px]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851666655!2d107.66141237462823!3d-6.943206067969248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs!5e0!3m2!1sen!2sid!4v1693375109769!5m2!1sen!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php $__env->stopSection(); ?>
<?php if(auth()->guard()->check()): ?>
    <?php $__env->startSection("script"); ?>
        <script src="<?php echo e(asset("scripts/update.js")); ?>"></script>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/kontak.blade.php ENDPATH**/ ?>