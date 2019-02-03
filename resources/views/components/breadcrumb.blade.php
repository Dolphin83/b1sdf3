<section class="breadcrumb-classic context-dark">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.35" data-type="media" data-url="/images/parallax-breadcrumbs.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0.08" data-type="html" class="rd-parallax-layer">
            <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
                <h1 class="veil reveal-sm-block">{{isset($recipe)? 'Рецепт' : $title}}</h1>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="/">Главная</a></li>
                        @if(isset($recipe))
                            <li><a href="{{route('recipe.list')}}">Рецепты</a></li>
                        @endif
                        <li>{{$title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
