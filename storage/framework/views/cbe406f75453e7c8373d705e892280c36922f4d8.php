<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('node_modules/@splidejs/splide/dist/css/splide.min.css')); ?>" />
    <link rel="stylesheet"
        href="<?php echo e(asset('theme/node_modules/@splidejs/splide/dist/css/themes/splide-default.min.css')); ?>" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php echo $__env->make('includes.theme.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('node_modules/materialize-css/dist/js/materialize.js')); ?>"></script>
    <script src="<?php echo e(asset('node_modules/@splidejs/splide/dist/js/splide.js')); ?>"></script>

    <script>
        $(document).ready(function () {
      $(".sidenav").sidenav();
      $(".dropdown-trigger").dropdown();
    });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
      new Splide(".splide").mount();
    });
    </script>
</body>

</html>
<?php /**PATH /mnt/c/xampp/htdocs/ecom/resources/views/layouts/app.blade.php ENDPATH**/ ?>