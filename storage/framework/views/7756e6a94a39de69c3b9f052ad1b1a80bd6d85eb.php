<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">友情链接</div>

    <?php $linkPresenter = app('App\Presenters\LinkPresenter'); ?>

    <!-- List group -->
    <ul class="list-group">
        <?php $links = $linkPresenter->linkList() ?>

        <?php if($links): ?>
            <?php foreach($links as $link): ?>
                <li class="list-group-item">
                    <a href="<?php echo e($link->url); ?>" target="_blank"><?php echo e($link->name); ?></a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>