@extends('layouts.backend')

@section('title', '发布文章')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('editor.md/css/editormd.min.css') }}">
@endsection

@section('header')
    <h1>
        发布文章
    </h1>
@endsection

@section('content')
        <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            @include('backend.alert.warning')
            <div class="box box-solid">
                <form role="form" method="post" action="{{ url('backend/article') }}" id="article-form">
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
                            <label for="content">文章内容</label>
                            <div id="">
                                <textarea  name="html-content" style="width: 100%;height:200px;resize:none"></textarea>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}


                    <div class="box-footer">
                        <button type="submit" id="submit-article" class="btn btn-primary">发布</button>
                        <button type="button" id="reset-btn" class="btn btn-warning">重置</button>
                    </div>
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('editor.md/editormd.min.js') }}"></script>
    <script>

        var editor = editormd("editormd", {
            path        : "{{ asset('/editor.md/lib/') }}/",
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
                // cate_id : {
                //     validators : {
                //         notEmpty : {
                //             message : "请选择文章分类"
                //         }
                //     }
                // }
            }
        }).on('success.form.bv', function(e) {
            //var html = editor.getPreviewedHTML();
            //$("#article-form textarea[name='html-content']").val(html);
        });
    </script>
@endsection
