<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fa fa-check"></i>
        提示消息!
        <p><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>