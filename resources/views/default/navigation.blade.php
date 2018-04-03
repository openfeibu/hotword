<div id="navbar" class="navbar-collapse collapse">
    @inject('navPresenter', 'App\Presenters\NavigationPresenter')
    <ul class="nav navbar-nav navbar-left">
        <?php $navigations = $navPresenter->simpleNavList(); ?>
        @if ($navigations)
            @foreach ($navigations as $navigation)
                    <li><a href="{{ $navigation->url }}"><span>{{ $navigation->name }}</span></a></li>
            @endforeach
        @endif
    </ul>
    
</div>
<form class="navbar-form navbar-right" action="{{ route('search') }}" method="get">
        <div class="input-group">
            <input type="search" class="search-field " value="" name="keyword" placeholder="搜索热词、热点" >
            <span class="input-group-btn">
                <button type="submit" class="search-btn ">
                    <!-- <span class="glyphicon glyphicon-search"></span> -->
                </button>
            </span>
        </div>
    </form>