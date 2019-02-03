<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'body', 'video'];
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('App\RecipeImage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * @return string
     */
    public function preview()
    {
        $length = mt_rand(50, 100);
        return strip_tags(mb_substr($this->body, 0, $length)) . '...';
    }

    /**
     * @return string
     */
    public function previewImage()
    {
        if ($this->images->count()) {

            return asset('images/recipe/' . $this->images->first()->filename);
        }

        $color = substr(md5($this->title), 1,6);
        return "http://dummyimage.com/370x230/$color.jpg&text=$this->title" ;
    }

    /**
     * @return integer
     */
    public function stars()
    {
        $stars = [4,5];
        return $stars[array_rand($stars)];
    }

    /**
     * @return integer
     */
    public function mins()
    {
        $min = range(15,30);
        return $min[array_rand($min)];
    }
}
