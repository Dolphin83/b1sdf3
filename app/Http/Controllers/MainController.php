<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Tag;
use App\Recipe;
use App\RecipeImage;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index', [
            'list' => Recipe::with('images')->inRandomOrder()->take(6)->get()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tags()
    {

        return view('tags',[
            'list'=> Tag::all()
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recipeList(Request $request)
    {
        $tag = $request->query('tag', null);
        $list = Recipe::whereHas('tags', function($q) use ($tag){
            if ($tag) $q->where('tags.id', $tag);
        })->with('images')->paginate(6);

        $random = Recipe::with('images')->inRandomOrder()->take(1)->get()->first();
        $randomTags = Tag::inRandomOrder()->take(20)->get();

        return view('recipes', [
            'list' => $list,
            'random' => $random,
            'randomTags' => $randomTags
        ]);
    }

    /**
     * @param integer $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recipeItem($id)
    {
        $recipe = Recipe::with(['images', 'tags'])->find($id);
        $random = Recipe::with('images')->inRandomOrder()->take(1)->get()->first();
        return view('item', [
            'recipe' => $recipe,
            'random' => $random
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subscribe()
    {
        return view('subscribe');
    }
}
