<?php $systemPresenter = app('App\Presenters\SystemPresenter'); ?>



<?php $__env->startSection('title', $systemPresenter->getKeyValue('title')); ?>

<?php $__env->startSection('description', $systemPresenter->getKeyValue('seo_desc')); ?>

<?php $__env->startSection('keywords', $systemPresenter->getKeyValue('seo_keyword')); ?>

<?php $__env->startSection('header-text'); ?>
    <div class="text-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="to-animate fadeInUp animated color-white">
                    <?php echo e($systemPresenter->getKeyValue('motto')); ?>

                </h3>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('default.article', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>