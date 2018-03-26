<div class="panel panel-default author">
    <?php $userPresenter = app('App\Presenters\UserPresenter'); ?>
    <?php
        $author = isset($user->id) ? $user : $userPresenter->getUserInfo();
    ?>
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($author->name); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row text-center">
            <img src="<?php echo e(asset('uploads/avatar')."/".$author->user_pic); ?>" class="img-circle author-avatar" alt="User Image">
        </div>
        <div class="row text-center author-footer">
            <?php
            $github_url = '';
            $weibo_url = '';
            if (!isset($user->id) || $user->id == 1) { //临时
                $github_url = $systemPresenter->getKeyValue('github_url');
                $weibo_url = $systemPresenter->getKeyValue('weibo_url');
            }
            ?>
            <?php if($github_url != ""): ?>
                <span class="icon-github" style="padding-left:20px;">
                    <a href='<?php echo e($github_url); ?>' target="_blank">GitHub</a>
                </span>
            <?php endif; ?>
            <?php if($weibo_url != ""): ?>
                <span class="icon-sina-weibo" style="padding-left:20px;margin-left:10px;">
                    <a href='<?php echo e($weibo_url); ?>' target="_blank">Weibo</a>
                </span>
            <?php endif; ?>
        </div>
    </div>
</div>