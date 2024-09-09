<?php $__env->startSection("title", "Home"); ?>
<?php $__env->startSection("content"); ?>
    <section id="home" class="pb-6 pl-10 lg:pl-20 bg-[#F4F4F4] h-auto">
        <div class="flex overflow-hidden flex-row">
            <div class="flex flex-col uppercase">
                <div class="flex flex-row justify-between items-center pr-10 mt-6 w-full lg:pr-0 lg:mt-14">
                    <a href="<?php echo e(route("home")); ?>" class="w-auto text-3xl font-bold">Tasty Food</a>
                    <div class="flex gap-10 text-lg font-normal">
                        <ul id="menu"
                            class="hidden fixed top-0 right-0 z-50 p-10 bg-white lg:flex lg:relative lg:flex-row lg:p-0 lg:space-x-6 lg:bg-transparent">
                            <li class="fixed top-5 right-7 lg:hidden z-[1000]">
                                <button class="text-5xl text-right" onclick="toggleMenu()">&times;</button>
                            </li>
                            <li>
                                <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                    href="/">Home</a>
                            </li>
                            <li class="mt-8 lg:mt-0">
                                <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                    href="/tentang">Tentang</a>
                            </li>
                            <li class="mt-8 lg:mt-0">
                                <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                    href="/berita">Berita</a>
                            </li>
                            <li class="mt-8 lg:mt-0">
                                <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                    href="/galeri">Galeri</a>
                            </li>
                            <li class="mt-8 lg:mt-0">
                                <a class="text-sm font-medium opacity-70 duration-300 hover:opacity-100"
                                    href="/kontak">Kontak</a>
                            </li>
                            <?php if(auth()->guard()->check()): ?>
                                <li class="mt-8 lg:mt-0">
                                    <a class="text-sm font-medium text-red-900 opacity-70 duration-300 lg:p-2 lg:text-white lg:bg-red-700 lg:rounded-xl hover:opacity-100 lg:hover:bg-red-700/50"
                                        href="<?php echo e(route("logout")); ?>">Logout</a>
                                </li>
                            <?php endif; ?>
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
                </div>
                <pre class="my-6 lg:my-14"></pre>
                <hr class="w-20 border border-black" />
                <div class="flex flex-col ml-1">
                    <h1 class="mt-8 text-5xl leading-tight">Healthy<br /><a class="font-extrabold">Tasty Food</a></h1>
                    <h2 class="mt-2 mr-20 normal-case">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque ut modi qui reprehenderit
                        quod a perspiciatis, commodi officiis voluptates? Sunt cumque tempore magni et possimus delectus
                        assumenda accusantium illum?
                    </h2>
                    <a href="/tentang" class="py-4 px-20 mt-5 text-sm font-semibold text-white bg-black w-fit">Tentang
                        Kami</a>
                </div>
            </div>
            <img src="<?php echo e(asset("")); ?>assets/img-4-2000x2000.png" alt=""
                class="hidden relative -ml-48 lg:block w-[50rem] -right-[13rem] -top-[9rem]" />
        </div>
    </section>
    <section id="tentang">
        <div class="flex flex-col justify-center items-center py-20 px-6 md:px-32 lg:px-48 xl:px-96">
            <h2 class="text-2xl font-extrabold uppercase">Tentang Kami</h2>
            <p class="my-5 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae odio, quos rem rerum cupiditate distinctio
                maiores, libero modi ullam quia quo ipsa soluta iusto voluptate ut, delectus harum. Deleniti, architecto!
            </p>
            <hr class="w-24 border border-black" />
        </div>
        <section class="p-10 xl:p-20 bg-[url(assets/Group70.png)] bg-cover bg-center-left">
            <div class="grid grid-cols-1 gap-4 mt-28 text-center md:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col p-5 mb-28 bg-white rounded-lg lg:mb-0">
                    <div class="justify-center items-center -mt-32 w-full">
                        <img src="<?php echo e(asset("")); ?>assets/img-1.png" alt="" class="relative m-auto w-60" />
                    </div>
                    <div class="relative">
                        <h3 class="py-6 text-2xl font-bold uppercase">Lorem Ipsum</h3>
                        <p class="pb-10 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sit harum qui
                            dignissimos
                            nemo
                        </p>
                    </div>
                </div>
                <div class="flex flex-col p-5 mb-28 bg-white rounded-lg lg:mb-0">
                    <div class="justify-center items-center -mt-32 w-full">
                        <img src="<?php echo e(asset("")); ?>assets/img-2.png" alt="" class="relative m-auto w-60" />
                    </div>
                    <div class="relative">
                        <h3 class="py-6 text-2xl font-bold uppercase">Lorem Ipsum</h3>
                        <p class="pb-10 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sit harum qui
                            dignissimos
                            nemo
                        </p>
                    </div>
                </div>
                <div class="flex flex-col p-5 mb-28 bg-white rounded-lg lg:mb-0">
                    <div class="justify-center items-center -mt-32 w-full">
                        <img src="<?php echo e(asset("")); ?>assets/img-3.png" alt="" class="relative m-auto w-60" />
                    </div>
                    <div class="relative">
                        <h3 class="py-6 text-2xl font-bold uppercase">Lorem Ipsum</h3>
                        <p class="pb-10 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sit harum qui
                            dignissimos
                            nemo
                        </p>
                    </div>
                </div>
                <div class="flex flex-col p-5 bg-white rounded-lg lg:mb-0">
                    <div class="justify-center items-center -mt-32 w-full">
                        <img src="<?php echo e(asset("")); ?>assets/img-4.png" alt="" class="relative m-auto w-60" />
                    </div>
                    <div class="relative">
                        <h3 class="py-6 text-2xl font-bold uppercase">Lorem Ipsum</h3>
                        <p class="pb-10 text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sit harum qui
                            dignissimos
                            nemo
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section id="berita" class="flex flex-col p-10 lg:p-20 items-center justify-center bg-[#F4F4F4]">
        <h2 class="pb-10 text-2xl font-bold uppercase">Berita Kami</h2>
        <div class="flex flex-col gap-4 xl:flex-row">
            <div class="flex overflow-hidden flex-col w-full bg-white rounded-xl shadow-xl xl:w-1/2 max-h-[48rem]">
                <img src="<?php if(str_starts_with($fberita->gambar, "assets")): ?> <?php echo e(asset($fberita->gambar)); ?><?php else: ?><?php echo e($fberita->gambar); ?> <?php endif; ?>"
                    class="object-cover w-full rounded-t-xl h-[24rem] bg-left-center" />
                <h3 class="p-5 text-xl font-bold uppercase"><?php echo e(substr($fberita->judul, 0, 20) . "..."); ?></h3>
                <p class="pr-10 pb-5 pl-5 text-xs md:text-sm text-neutral-700">
                    <?php echo e(substr($fberita->isi, 0, 700)); ?>

                </p>
                <div class="flex flex-row justify-between m-5 mt-auto">
                    <a href="<?php echo e(route("berita.show", $fberita->slug)); ?>" class="text-sm text-yellow-500">Baca
                        selengkapnya</a>
                    <?php if(auth()->guard()->check()): ?>
                        <div class="relative" data-te-dropdown-position="dropup">
                            <button
                                class="flex items-center whitespace-nowrap  bg-primary pt-[10px] text-sm font-medium uppercase leading-normal text-white  transition duration-150 ease-in-out  motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]  "
                                type="button" id="dropdownMenuButton1u" data-te-dropdown-toggle-ref aria-expanded="false"
                                data-te-ripple-init data-te-ripple-color="light">
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
                                        href="<?php echo e(route("berita.edit", $fberita->slug)); ?>" data-te-dropdown-item-ref>
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo e(route("berita.destroy", $fberita->slug)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field("DELETE"); ?>
                                        <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')"
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
            <div class="hidden flex-wrap gap-4 w-full md:flex xl:flex xl:w-1/2">
                <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-col -mr-2 bg-white rounded-xl shadow-xl basis-1/2 max-h-[21.5rem]">
                        <img src="<?php if(str_starts_with($berita->gambar, "assets")): ?> <?php echo e(asset($berita->gambar)); ?><?php else: ?><?php echo e($berita->gambar); ?> <?php endif; ?>"
                            class="object-cover w-full h-2/6 rounded-t-xl bg-left-center" />
                        <h3 class="p-5 text-xl font-bold uppercase"><?php echo e(substr($berita->judul, 0, 15) . "..."); ?></h3>
                        <p class="px-5 pr-10 text-sm text-neutral-700">
                            <?php echo e(substr($berita->isi, 0, 120) . "..."); ?>

                        </p>
                        <div class="flex flex-row justify-between p-5 mt-auto">
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <section id="galeri" class="flex flex-col justify-center items-center p-10 lg:p-20">
        <h2 class="pb-10 text-2xl font-bold uppercase">Galeri Kami</h2>
        <div class="grid grid-cols-2 gap-2 lg:grid-cols-3">
            <img src="<?php echo e(asset("")); ?>assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/ella-olsson-mmnKI8kMxpc-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/jonathan-borba-Gkc_xM3VY34-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
            <img src="<?php echo e(asset("")); ?>assets/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt=""
                class="object-cover rounded-xl aspect-square" />
        </div>
        <a href="<?php echo e(route("galeri.index")); ?>"
            class="py-3 px-10 mt-10 text-sm font-semibold text-white uppercase bg-black">
            Lihat lebih banyak
        </a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>