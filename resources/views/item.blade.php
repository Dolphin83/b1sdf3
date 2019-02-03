@extends('layouts.app')

@section('breadcrumb')
    @component('components.breadcrumb', ['title' => $recipe->title, 'recipe' => true]) @endcomponent
@endsection

@section('content')
    <main class="page-content">
        <!-- Portfolio Grid-->
        <section class="section-70 section-md-114 text-left">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-sm-8 cell-md-8 text-md-left">
                        <h2 class="text-bold">{{$recipe->title}}</h2>
                        <hr class="divider bg-madison hr-md-left-0">

                        <div class="post-news-meta offset-top-20">
                            <ul class="list-inline list-inline-xxs offset-top-15 offset-sm-top-0 pull-sm-left">
                                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                                <li><span class="icon icon-xs mdi mdi-star text-primary"></span></li>
                                <li><span
                                        class="icon icon-xs mdi mdi-star @if($recipe->stars() === 4)text-light @else text-primary @endif"></span>
                                </li>
                            </ul>
                        </div>
                        @if($recipe->images()->count())
                            <div class="offset-top-60">
                                <img src="{{$recipe->previewImage()}}" alt="" class="img-responsive">
                            </div>
                        @endif
                        <div class="offset-top-30">
                            <h6>Способ приготовления</h6>
                            <div class="text-subline"></div>
                            {!! $recipe->body !!}
                        </div>
                    </div>
                    <div class="cell-md-4 text-left cell-xs-8 offset-top-85 offset-md-top-0">
                        <aside class="inset-md-left-30">
                            <h6 class="text-bold">Тэги</h6>
                            <div class="text-subline"></div>
                            <div class="offset-top-20">
                                <div class="tags-list group group-sm reveal-inline-block text-middle">
                                    @foreach($recipe->tags as $tag)
                                        <a href="{{route('recipe.list', ['tag' => $tag->id])}}"
                                           class="btn btn-xs btn-primary text-italic">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            @if($recipe->images()->count() > 1)
                                <div class="offset-top-60">
                                    <h6 class="text-bold">Фото рецепта</h6>
                                    <div class="text-subline"></div>
                                    <div class="offset-top-20">
                                        <div data-photo-swipe-gallery="gallery">
                                            @foreach($recipe->images as $image)
                                                <div class="offset-top-20">
                                                    <figure class="thumbnail-classic photo-thumb">
                                                        <div class="thumbnail-classic-img-wrap">
                                                            <img src="{{$image->url()}}" alt="">
                                                            <a class="gallery-link-mobile veil-lg"
                                                               data-photo-swipe-item="" data-size="{{$image->info()}}"
                                                               href="{{$image->url()}}"></a>
                                                        </div>
                                                        <figcaption class="thumbnail-classic-caption text-center">
                                                            <div class="offset-top-20 veil reveal-lg-block">
                                                                <a class="icon icon-xxs fa-search-plus"
                                                                   data-photo-swipe-item=""
                                                                   data-size="{{$image->info()}}"
                                                                   href="{{$image->url()}}"></a>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="offset-top-60">
                                <h6 class="text-bold">Попробуйте этот рецепт</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-20">
                                    @component('components.random', ['recipe' => $random]) @endcomponent
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
