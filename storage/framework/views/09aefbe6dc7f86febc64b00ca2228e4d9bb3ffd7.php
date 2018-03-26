<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>" />
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>" />
    <meta name="author" content="Moell" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo e(asset('default/css/bootstrap.min.css')); ?>">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo e(asset('default/css/animate.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('default/css/index.css')); ?>">


</head>

<body>
<?php $systemPresenter = app('App\Presenters\SystemPresenter'); ?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url("/")); ?>" ><?php echo e($systemPresenter->getKeyValue('blog_name')); ?></a>
        </div>
        <?php echo $__env->make('default.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <p>
            <?php echo $__env->yieldContent('header-text'); ?>
        </p>
    </div>
</div>

<div class="container">
    <div class='row'>
        <div class='col-md-8' >
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class='col-md-4'>
            <?php echo $__env->make('default.author', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('default.tag', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('default.hot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('default.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</div> <!-- /container -->


<?php echo $__env->make('default.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- jQuery -->
<script src="<?php echo e(asset('default/js/jQuery-2.2.0.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('default/js/bootstrap.min.js')); ?>"></script>
<!-- Waypoints -->

<script src="<?php echo e(asset('default/js/index.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
