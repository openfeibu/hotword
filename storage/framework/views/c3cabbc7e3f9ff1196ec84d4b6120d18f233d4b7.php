<?php $__env->startSection('title', request('keyword')); ?>

<?php $__env->startSection('description', request('keyword')); ?>

<?php $__env->startSection('keywords', request('keyword')); ?>

<?php $__env->startSection('header-text'); ?>
    <div class="text-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="to-animate fadeInUp animated color-white">
                    <i class="glyphicon glyphicon-search"></i>
                    &nbsp;
                    <?php echo e(request('keyword')); ?>

                </h3>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('default.article', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>