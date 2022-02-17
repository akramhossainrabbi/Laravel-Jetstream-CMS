<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Str;

class Pages extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'page_content',
    ];

    /**
     * @param $value
     */
    public function setTitleAttribute($value)
    {
        if (static::whereSlug($slug = Str::slug($value))->exists()) {

            $slug = $this->incrementSlug($slug);
        }
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $slug;
    }

    /** 
     * Write code on Method
     *
     * @return response()
     */
    public function incrementSlug($slug) 
    {
        $original = $slug;
        $count = 2;
    
        while (static::whereSlug($slug)->exists()) {
            $slug = "{$original}-" . $count++;
        }

        return $slug;
    }

}
