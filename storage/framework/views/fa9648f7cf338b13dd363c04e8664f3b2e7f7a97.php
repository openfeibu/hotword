<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">标签</h3>
    </div>
    <div class="panel-body">
        <?php $tagPresenter = app('App\Presenters\TagPresenter'); ?>

        <?php $tagList = $tagPresenter->tagList();?>
        <?php if($tagList): ?>
            <?php foreach($tagList as $tl): ?>
                <span style="padding: 5px;">
                    <a href="<?php echo e(route('tag', ['id' => $tl->id])); ?>" target="_blank"><?php echo e($tl->tag_name); ?></a>
                </span>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>