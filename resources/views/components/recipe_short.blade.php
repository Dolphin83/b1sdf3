<article class="post-news bg-white">
    {{--<a href="{{request()->has('nos')? route('recipe.item', ['id' => $recipe->id]) : route('subscribe')}}">--}}
    <a href="{{route('recipe.item', ['id' => $recipe->id])}}">
        <img src="{{$recipe->previewImage()}}" alt="{{$recipe->title}}" class="img-responsive">
    </a>
    <div class="post-news-body">
        <h6>
            {{--<a href="{{request()->has('nos')? route('recipe.item', ['id' => $recipe->id]) : route('subscribe')}}">{{$recipe->title}}</a>--}}
            <a href="{{route('recipe.item', ['id' => $recipe->id])}}">{{$recipe->title}}</a>
        </h6>
        <div class="offset-top-20">{{ $recipe->preview() }}</div>
        <div class="post-news-meta offset-top-20">
            <span class="icon icon-xs mdi mdi-clock text-middle text-madison"></span>
            <span class="text-middle inset-left-10">{{$recipe->mins()}} мин.</span>
            <ul class="list-inline list-inline-xxs offset-top-15 offset-sm-top-0 pull-sm-right">
                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                <li><span class="icon icon-xs mdi mdi-star @if($recipe->stars() === 4)text-light @else text-primary @endif"></span></li>
            </ul>
        </div>
    </div>
</article>
