<div id="navbar" class="navbar-collapse collapse">
    <?php $navPresenter = app('App\Presenters\NavigationPresenter'); ?>
    <ul class="nav navbar-nav navbar-left">
        <?php $navigations = $navPresenter->simpleNavList(); ?>
        <?php if($navigations): ?>
            <?php foreach($navigations as $navigation): ?>
                    <li><a href="<?php echo e($navigation->url); ?>"><span><?php echo e($navigation->name); ?></span></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <form class="navbar-form navbar-right" action="<?php echo e(route('search')); ?>" method="get">
        <div class="input-group">
            <input type="search" class="search-field form-control" value="" name="keyword" placeholder="Search">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
</div>