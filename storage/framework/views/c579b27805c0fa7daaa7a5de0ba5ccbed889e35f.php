<?php $systemPresenter = app('App\Presenters\SystemPresenter'); ?>



<?php $__env->startSection('title', $systemPresenter->checkReturnValue('title', $article->title)); ?>

<?php $__env->startSection('description', $systemPresenter->checkReturnValue('seo_desc', $article->desc)); ?>

<?php $__env->startSection('keywords', $systemPresenter->checkReturnValue('seo_keyword', $article->keyword)); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('editor.md/css/editormd.preview.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('share.js/css/share.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header-text'); ?>
    <div class="text-inner">
        <div class="row">
            <div class="col-md-12 to-animate fadeInUp animated">
                <h3 class="color-white">
                    <?php echo e($article->title); ?>

                </h3>

                <p class=" m-t-25 color-white">
                    <i class="glyphicon glyphicon-calendar"></i><?php echo e($article->created_at); ?>

                    &nbsp;
                    <?php if($article->category): ?>
                        <i class="glyphicon glyphicon-th-list"></i>
                        <a href="<?php echo e(route('category', ['id' => $article->cate_id])); ?>" target="_blank">
                            <?php echo e($article->category->name); ?>

                        </a>
                    <?php endif; ?>
                </p>
                <p class="color-white">
                    <i class="glyphicon glyphicon-tags"></i>&nbsp;
                    <?php foreach($article->tag as $tag): ?>
                        <a href="<?php echo e(route('tag', ['id' => $tag->id])); ?>" target="_blank">
                            <?php echo e($tag->tag_name); ?>

                        </a>
                        &nbsp;
                    <?php endforeach; ?>
                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="markdown-body editormd-html-preview" style="padding:0;">
        <?php echo $article->html_content; ?>

    </div>

    <div id="share" class="social-share m-t-25"></div>
    <!-- 评论插件 -->
    <?php echo $__env->make('default.comment.index', [
        'commentId' => $article->id,
        'commentTitle' => $article->title,
        'commentUrl' => Request::getUri()
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('share.js/js/jquery.share.min.js')); ?>"></script>

    <script>
        $(function(){
            $('#share').share({sites: ['qzone', 'qq', 'weibo','wechat']});
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>