<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Tasty Food - <?php echo $__env->yieldContent("title"); ?></title>
    <?php echo $__env->yieldContent("head"); ?>
    <link rel="stylesheet" href="<?php echo e(asset("tw-elements.min.css")); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset("flowbite.min.css")); ?>" />
    <script src="<?php echo e(asset("scripts/fa.js")); ?>"></script>
    <script src="<?php echo e(asset("scripts/tailwind.js")); ?>"></script>
    <script src="<?php echo e(asset("scripts/jquery.min.js")); ?>"></script>
</head>

<body class="overflow-x-hidden w-screen">
    <?php if(Request::segment(1) !== "cba" &&
            count(Request::segments()) >= 1 &&
            Request::segment(1) !== "cbaaal" &&
            Request::segment(1) !== "send-email"): ?>
        <?php echo $__env->make("layouts.hero", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->yieldContent("content"); ?>
    <?php if(Request::segment(1) !== "cba" && Request::segment(1) !== "cbaaal" && Request::segment(1) !== "send-email"): ?>
        <?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make("layouts.flash", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</body>
<?php echo $__env->yieldContent("script"); ?>
<script src="<?php echo e(asset("scripts/flowbite.min.js")); ?>"></script>
<script src="<?php echo e(asset("scripts/tw-elements.umd.min.js")); ?>"></script>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>