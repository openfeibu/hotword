<?php $__env->startSection('title', '发布文章'); ?>

<?php $__env->startSection('stylesheet'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('editor.md/css/editormd.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <h1>
        发布文章
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('backend.alert.warning', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="box box-solid">
                <form role="form" method="post" action="<?php echo e(url('backend/article')); ?>" id="article-form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">标题</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="title" id='title' placeholder='标题'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keyword">关键字(Keywords)</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' name="keyword" id='keyword' placeholder='请输入关键字，以英文逗号分割，利于搜索引擎收录'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc">描述(Description)</label>
                            <div class="row">
                                <div class='col-md-10'>
                                    <input type='text' class='form-control' name="desc" id='desc' placeholder='请输入文章描述'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">文章内容</label>
                            <div id="editormd">
                                <textarea class="editormd-markdown-textarea" style="display:none;" id="content" name="markdown-content"></textarea>
                                <textarea style="display:none;"  name="html-content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cate_id">文章分类</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <?php $category = app('App\Presenters\CategoryPresenter'); ?>
                                    <?php echo $category->getSelect(0, '请选择', ''); ?>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tags">标签</label>
                            <div class="row">
                                <div class='col-md-6'>
                                    <input type='text' class='form-control' id='tags' name="tags" placeholder='多个标签以; 分割'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo e(csrf_field()); ?>



                    <div class="box-footer">
                        <button type="submit" id="submit-article" class="btn btn-primary">发布</button>
                        <button type="button" id="reset-btn" class="btn btn-warning">重置</button>
                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="<?php echo e(asset('editor.md/editormd.min.js')); ?>"></script>
    <script>

        var editor = editormd("editormd", {
            path        : "<?php echo e(asset('/editor.md/lib/')); ?>/",
            height  : 500,
            syncScrolling : "single",
            toolbarAutoFixed: false,
            saveHTMLToTextarea : false
        });

        /* 文章操作验证 */
        $("#article-form").bootstrapValidator({
            live: 'disables',
            message: "This Values is not valid",
            feedbackIcons: {
                valid: 'glyphicon ',
                invalid: 'glyphicon ',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields : {
                title : {
                    validators : {
                        notEmpty : {
                            message : "文章标题不能为空"
                        }
                    }
                },
                cate_id : {
                    validators : {
                        notEmpty : {
                            message : "请选择文章分类"
                        }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            var html = editor.getPreviewedHTML();
            $("#article-form textarea[name='html-content']").val(html);
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>