@extends('layouts.app')

@section('breadcrumb')
    @component('components.breadcrumb', ['title' => 'Рецепты']) @endcomponent
@endsection

@section('content')
    <main class="page-content">
        <div id="fb-root"></div>
        <!-- Latest news-->
        <section class="section-70 section-md-114 bg-catskill">
            <div class="shell">
                <div class="range range-xs-center">
                    <div class="cell-md-8">
                        <div class="range text-sm-left range-xs-center">
                            @foreach($list->chunk(3) as $k => $chunk)
                                <div class="cell-sm-6 @if($k==1) offset-top-30 offset-sm-top-0 @endif">
                                    @foreach($chunk as $recipe)
                                        <div class="offset-top-30">
                                            @component('components.recipe_short', ['recipe' => $recipe]) @endcomponent
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="offset-top-60 text-md-left">
                            <!-- Bootstrap Pagination-->
                            <nav>

                            </nav>
                        </div>
                    </div>
                    <div class="cell-md-4 text-left cell-xs-8 offset-top-85 offset-md-top-0">
                        <aside class="inset-md-left-30">
                            {{--
                            <h6 class="text-bold">Поиск</h6>
                            <div class="text-subline"></div>
                            <div class="offset-top-30">
                                <form action="search-results.html" method="GET"
                                      class="form-search rd-search form-search-widget">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="s" autocomplete="off"
                                                   class="form-search-input  form-control"><span
                                                class="input-group-btn">
                                              <button type="submit" class="btn btn-primary"><span
                                                      class="icon fa-search"> </span></button></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            --}}
                            <div class="offset-top-30">
                                <!-- Archive-->
                                <h6 class="text-bold">Тэги</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-20">
                                    <div class="tags-list group group-sm reveal-inline-block text-middle">
                                        @foreach($randomTags as $tag)
                                            <a href="{{route('recipe.list', ['tag' => $tag->id])}}"
                                               class="btn btn-xs btn-primary text-italic">{{$tag->name}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="offset-top-60">
                                <!-- Archive-->
                                <h6 class="text-bold">Рецепт дня</h6>
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
