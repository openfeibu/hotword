<div class="f_hot" style="border:none;">
    <!-- Default panel contents -->

    <div class="article-list-title"><span>·</span>热度榜<span>·</span></div>

    @inject('hotArticle', 'App\Presenters\ArticlePresenter')

    <?php $hotArticleList = $hotArticle->hotArticleList(); ?>
    <!-- List group -->
    <ul class="list-group">
        @if ($hotArticleList)
            @foreach ($hotArticleList as $hal)
                <li class="list-group-item list-group-item-hot">
                    <div class="hot_box">
                        <label hot="{{ $hal->read_count }}">热力值：{{ $hal->read_count }}</label>
                        <div class="hot_line_box_bg">
                            <div class="hot_line_box_overflow transition">
                                <div class="hot_line_box_red"></div>
                            </div>
                        </div>
                    </div>
                    <a class="hot_a" href="{{ route('article', ['id' => $hal->id]) }}" target="_blank">
                        {{ $hotArticle->formatTitle($hal->title) }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
    <script>
        var hot = $(".list-group .list-group-item-hot").eq(0).find("label").attr("hot");
        $.each($(".list-group .list-group-item"),function(a,b){
            var that = $(b);
            var zhot = that.find("label").attr("hot");
            that.find(".hot_line_box_overflow").width((zhot/hot)*100+'%')
        })
    </script>
</div>