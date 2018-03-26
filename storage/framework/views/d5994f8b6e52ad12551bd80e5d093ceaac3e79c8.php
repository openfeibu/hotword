
<?php
$commentPlugin = $systemPresenter->getKeyValue('comment_plugin');
$shortName = $systemPresenter->getKeyValue($commentPlugin.'_short_name');
?>
<?php if($commentPlugin !='' && $shortName != ''): ?>
    <?php if($commentPlugin == 'duoshuo'): ?>
        <?php echo $__env->make('default.comment.duoshuo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php elseif($commentPlugin == 'disqus'): ?>
        <?php echo $__env->make('default.comment.disqus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php endif; ?>