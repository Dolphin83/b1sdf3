<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class RecipeImage extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['recipe_id', 'filename'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }

    /**
     * @return string
     */
    public function url()
    {
        return asset($this->publicUrl());
    }

    /**
     * @return string
     */
    public function info()
    {
        list($w, $h) = getimagesize(public_path($this->publicUrl()));
        return $w.'x'.$h;
    }

    /**
     * @return string
     */
    private function publicUrl()
    {
        return  '/images/recipe/' . $this->filename;
    }
}
