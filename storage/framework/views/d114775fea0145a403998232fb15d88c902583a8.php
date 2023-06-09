<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('https://bcfc-31-135-250-34.ngrok-free.app/css/app.css')); ?>">
    <script src="<?php echo e(asset('https://bcfc-31-135-250-34.ngrok-free.app/js/app.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('https://bcfc-31-135-250-34.ngrok-free.app/fontawesome/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('https://bcfc-31-135-250-34.ngrok-free.app/css/style.css')); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<header>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <div class="container-fluid">

        <div class="navb-logo">
            <a href="<?php echo e(asset('main')); ?>"><img src="<?php echo e(asset('image/logo.png')); ?>" alt="Logo"></a>


        </div>
        <div class="navb-logo mr-2"><img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png"
                                    alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ"/></div>

        <div class="navb-items d-none d-xl-flex">

            <div class="item">
                <a href="<?php echo e(asset('about')); ?>">Об организации</a>
            </div>
            <div class="item">
                <a href="<?php echo e(asset('news')); ?>">Новости</a>
            </div>

            <div class="item">
                <a href="<?php echo e(asset('parents')); ?>">Родителям</a>
            </div>

            <div class="item">
                <a href="<?php echo e(asset('title_group')); ?>">Наши группы</a>
            </div>
            <div class="item">
                <a href="<?php echo e(asset('photo_gallery')); ?>">Фотогалерея</a>
            </div>

            <?php echo csrf_field(); ?>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->role==='admin'): ?>
                    <div class="item">
                        <a href="<?php echo e(asset('admin')); ?>">Админ панель</a></div>
                <?php endif; ?>
            <?php endif; ?>


            <form method="post" class="auth" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(auth()->guard()->check()): ?>
                    <div class="item"><a href="<?php echo e(route('logout')); ?>">Выход</a></div>
                <?php else: ?>
                    <div class="item"><a href="<?php echo e(route('home')); ?>">Войти</a>


                    </div>
                    <div class="item">

                        <a href="<?php echo e(route('register')); ?>">Регистрация</a>
                    </div>

                <?php endif; ?>


            </form>


        </div>

        <!-- Button trigger modal -->
        <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <img src="<?php echo e(asset('image/logo.png')); ?>" alt="Logo">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>

                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->role==='admin'): ?>
                                <div class="modal-line">
                                    <i class="fa-solid fa-image-portrait"></i><a href="<?php echo e(asset('admin')); ?>">Админ
                                        панель</a></div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div class="modal-line">
                            <i class="fa-solid fa-house"></i><a href="<?php echo e(asset('main')); ?>">Главная</a>
                        </div>
                        <div class="modal-line">
                            <i class="fa-solid fa-circle-info"></i><a href="<?php echo e(asset('about')); ?>">Об организации</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-newspaper"></i><a href="<?php echo e(asset('news')); ?>">Новости</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-file-lines"></i> <a href="<?php echo e(asset('parents')); ?>">Для родителей</a>
                        </div>

                        <div class="modal-line">
                            <i class="fa-solid fa-user-group"></i><a href="<?php echo e(asset('title_group')); ?>">Наши группы</a>
                        </div>
                        <div class="modal-line">
                            <i class="fa-solid fa-images"></i><a href="<?php echo e(asset('photo_gallery')); ?>">Фотогалерея</a>
                        </div>

                        <form method="post" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <a href="<?php echo e(route('logout')); ?>" class="navb-button">Выход</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('home')); ?>" class="navb-button">Авторизация</a>

                                    <a href="<?php echo e(route('register')); ?>" class="mt-2 navb-button">Регистрация</a>

                                <?php endif; ?>

                            </form>

                        </div>

                        <div class="mobile-modal-footer">

                            <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i
                                    class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</header>
<div class="background">
<div class="main_back">
    <div class="main ">
        <div class="text-center  h2 mb-5 pt-5">Mуниципальное бюджетное дошкольное образовательное учреждение города Кургана Детский сад комбинированного вида № 103
            «Журавушка»</div>

    <?php echo $__env->yieldContent('content'); ?>
        <div class="div" style="height: 100px; width: 100%"></div>
        <div class="container-fluid mt-5 tb-5 pb-5 tb-5">

            <div class="row banner"><a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img src="<?php echo e(asset('image/banner/minprosvet_8dc81.jpg')); ?>" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img style="max-width: 100%" src="<?php echo e(asset('image/banner/bus-gov-ru.gif')); ?>" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6 mx-auto d-flex justify-content-center m-1" href=""><img style="max-width: 100%" src="<?php echo e(asset('image/banner/crf.jpg')); ?>" alt=""></a>
                <a class="col-md-4 ml-md-auto col-sm-6  d-flex justify-content-center mt-3" href=""><img style="max-width: 100%" src="<?php echo e(asset('image/banner/deti.jpg')); ?>" alt=""></a>
                <a class="col-md-8 ml-md-auto col-sm-6 d-flex justify-content-center mt-3" href=""><img style="max-width: 100%" src="<?php echo e(asset('image/banner/corr.jpg')); ?>" alt=""></a>
            </div>
            <div class="row mt-5 banner">
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/1.png')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/2.png')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/3.png')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/04.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/05.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/05.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/6.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/8.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/9.png')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/10.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/11.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/12.jpg')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/13.png')); ?>" alt=""></a>
                <a class="col-md-12 ml-md-auto mx-auto d-flex justify-content-center m-1" href=""><img class="img-fluid width: 100% \9 h-75" src="<?php echo e(asset('image/banner/14.png')); ?>" alt=""></a>


            </div>
            <div class="text-center">Горячая линия" по противодействию коррупции</div>
            <div class="text-center">8 (3522) 42-65-51</div>
            <div class="text-center mt-2">"Горячая линия" по вопросам незаконных сборов денежных средств в образовательных организациях</div>
            <div class="text-center">8 (3522) 64-02-81</div>
            <div class="text-center mt-2">"Горячая линия" Департамента образования и науки Курганской области.</div>
            <div class="text-center"> 8 (3522) 25-48-12      8 (3522) 25-48-31
            </div>
        </div>

    </div>
</div>
</div>
<footer class="d-flex  flex-wrap justify-content-between align-items-center py-3 position-sticky  ">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
        <a target="_blank" href="https://vk.com/guravuhka200223923" class="text-center"><i
                class="fa-brands fa-vk mr-3"></i>Детский сад №103"ЖУРАВУШКА</a>
    </div>



</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>
<script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\kindergarten-master\resources\views/layouts/main.blade.php ENDPATH**/ ?>