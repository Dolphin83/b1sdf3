@extends('layouts.app')

@section('breadcrumb')
    @component('components.breadcrumb', ['title' => 'Теги']) @endcomponent
@endsection

@section('content')
    <main class="page-content">
        <div id="fb-root"></div>

        <section class="section-70 section-md-100">
            <div class="shell">
                <div class="range text-sm-left range-sm-justify range-sm-reverse">
                    <div class="offset-top-60">
                        <!-- Archive-->
                        <div class="offset-top-20">
                            <div class="tags-list group group-sm reveal-inline-block text-middle">
                                @foreach($list as $tag)
                                <a href="{{route('recipe.list', ['tag' => $tag->id])}}" class="btn btn-xs btn-primary text-italic">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
