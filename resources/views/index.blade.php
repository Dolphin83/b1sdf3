@extends('layouts.app')

@section('content')
    <main class="page-content">
        <section>
            <!-- Swiper-->
            <div data-height="60vh" data-loop="false" data-dragable="false" data-min-height="580px"
                 data-slide-effect="true" class="swiper-container swiper-slider">
                <div class="swiper-wrapper">
                    <div data-slide-bg="images/slide-01-1920x810.jpg" style="background-position: 80% center"
                         class="swiper-slide">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="range range-xs-center range-lg-left">
                                    <div class="cell-md-6 text-md-left cell-xs-10">
                                        <div class="jumbotron-custom bg-white-transparent">
                                            <div style="z-index:9" class="top-banner">
                                                <h4 class="text-white">Рецепт дня</h4>
                                            </div>
                                            <div>
                                                <h1 class="text-bold"><a href="{{route('recipe.item', ['id' => 440])}}">Кекс Бильбо Бэггинса</a></h1>
                                            </div>
                                            <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                                                <h5 class="text-regular font-default"></h5>
                                            </div>
                                            <div class="offset-top-20 offset-xl-top-40">
                                                <a href="{{route('recipe.item', ['id' => 440])}}" class="btn btn-primary">Читать рецепт</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- A Few Words-->
        <section class="section-70 section-md-100">
            <div class="shell">
                <div class="range text-sm-left range-sm-justify range-sm-reverse">
                    <div class="cell-sm-5">
                        <div class="img-wrap-2 view-animate zoomInSmall duration-06">
                            <figure><img src="/images/home-01-620-350.jpg" width="620" height="350" alt=""
                                         class="img-responsive reveal-inline-block"></figure>
                        </div>
                    </div>
                    <div class="cell-sm-7 offset-top-50 offset-sm-top-0">
                        <h2 class="text-bold view-animate fadeInLeftSm delay-06">О сайте</h2>
                        <hr class="divider bg-madison hr-sm-left-0 view-animate fadeInLeftSm delay-08">
                        <div class="offset-top-35 offset-md-top-60 view-animate fadeInLeftSm delay-1">
                            <p>
                                Любите когда все, что называется "по полкам"? Тогда каталог рецептов именно то, что вам
                                нужно! У хорошей хозяйки самое необходимое на кухне - на расстоянии вытянутой руки. Вот
                                мы и подумали, что наши замечательные рецепты по которым вы уже готовили и будете
                                продолжать, нужно собрать в доступный, удобный и понятный каталог.

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="bg-catskill section-70 section-md-114">
            <div class="shell">
                <h2 class="text-bold view-animate fadeInUpSmall delay-04">Новые Рецепты</h2>
                <hr class="divider bg-madison view-animate fadeInUpSmall delay-06">
                <div class="range text-sm-left range-xs-center offset-top-60">
                    @foreach($list->chunk(2) as $chunk)
                    <div class="cell-md-4 offset-top-30 offset-sm-top-0">
                        <div class="range">
                            @foreach($chunk as $k=>$recipe)
                                <div class="cell-sm-6 cell-md-12 @if($k%2==1) offset-top-30 @endif">
                                    @component('components.recipe_short', ['recipe' => $recipe]) @endcomponent
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="offset-top-50"><a href="/recipes" class="btn btn-primary">Все рецепты</a></div>
            </div>
        </section>

    </main>
@endsection
