<figure class="thumbnail-classic">
    <div class="thumbnail-classic-img-wrap">
        <img src="{{$recipe->previewImage()}}" alt="">
        <a class="gallery-link-mobile veil-lg"
           {{--href="{{request()->has('nos')? route('recipe.item', ['id' => $recipe->id]) : route('subscribe')}}"></a>--}}
           href="{{route('recipe.item', ['id' => $recipe->id])}}"></a>
    </div>
    <figcaption class="thumbnail-classic-caption text-center">
        <div>
            <h4 class="thumbnail-classic-title">{{$recipe->title}}</h4>
        </div>
        <div class="offset-top-20 veil reveal-lg-block">
            <a class="icon icon-xxs fa-search-plus"
               {{--href="{{request()->has('nos')? route('recipe.item', ['id' => $recipe->id]) : route('subscribe')}}"></a>--}}
               href="{{route('recipe.item', ['id' => $recipe->id])}}"></a>
        </div>
    </figcaption>
</figure>
