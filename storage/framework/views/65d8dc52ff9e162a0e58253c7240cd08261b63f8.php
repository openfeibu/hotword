<?php if($articles): ?>
    <ol class="article-list">
        <?php foreach($articles as $article): ?>
            <li>
                <h4 class='title'>
                    <a href="<?php echo e(route('article',['id' => $article->id])); ?>" target="_blank">
                        <?php echo e($article->title); ?>

                    </a>
                </h4>
                <p class="desc">
                   <?php echo e($article->desc); ?>

                </p>
                <p class="info">
                    <span>
                        <i class="glyphicon glyphicon-calendar"></i><?php echo e(date('Y-m-d', strtotime($article->created_at))); ?>

                    </span>
                            &nbsp;
                    <?php if($article->category): ?>
                    <span>
                        <i class="glyphicon glyphicon-th-list"></i>
                        <a href="<?php echo e(route('category', ['id' => $article->cate_id])); ?>" target="_blank">
                            <?php echo e($article->category->name); ?>

                        </a>
                    </span>
                    <?php endif; ?>
                    <span>
                        <i class="glyphicon glyphicon-eye-open"></i> <?php echo e($article->read_count); ?> views
                    </span>
                </p>
            </li>
            <hr/>
        <?php endforeach; ?>
    </ol>
    <?php echo $articles->links(); ?>

<?php else: ?>
    <h3>没有文章哟！！！</h3>
<?php endif; ?>