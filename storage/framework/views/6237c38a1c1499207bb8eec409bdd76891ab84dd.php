<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">热门文章</div>

    <?php $hotArticle = app('App\Presenters\ArticlePresenter'); ?>

    <?php $hotArticleList = $hotArticle->hotArticleList(); ?>
    <!-- List group -->
    <ul class="list-group">
        <?php if($hotArticleList): ?>
            <?php foreach($hotArticleList as $hal): ?>
                <li class="list-group-item">
                    <span class="badge"><?php echo e($hal->read_count); ?></span>
                    <a href="<?php echo e(route('article', ['id' => $hal->id])); ?>" target="_blank">
                        <?php echo e($hotArticle->formatTitle($hal->title)); ?>

                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>