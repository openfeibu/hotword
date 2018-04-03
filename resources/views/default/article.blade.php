@if($articles)
    <div class="article-list-title"><span>·</span>三分热度<span>·</span></div>
    <ol class="article-list">
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('article',['id' => $article->id]) }}" >
                <h4 class='title'>
                        <span>·</span>{{$article->title}}
                </h4>
                <p class="desc">
                  <span>#{{ $article->category->name }}#</span> {{$article->desc}}
                </p>
               <!--  <p class="info">
                    <span>
                        <i class="glyphicon glyphicon-calendar"></i>{{ date('Y-m-d', strtotime($article->created_at)) }}
                    </span>
                            &nbsp;
                    @if($article->category)
                    <span>
                        <i class="glyphicon glyphicon-th-list"></i>
                        <a href="{{ route('category', ['id' => $article->cate_id]) }}" target="_blank">
                            {{ $article->category->name }}
                        </a>
                    </span>
                    @endif
                    <span>
                        <i class="glyphicon glyphicon-eye-open"></i> {{ $article->read_count }} views
                    </span>
                </p> -->
                </a>
            </li>
         <!--    <hr/> -->
        @endforeach
    </ol>
    {!! $articles->links() !!}
@else
    <h3>没有文章哟！！！</h3>
@endif