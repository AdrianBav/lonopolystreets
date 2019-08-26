<?php

namespace App;

use Illuminate\Support\Str;

class Street extends BaseModel
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['thumbnail'];

    /**
     * The "booting" method of the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    /**
     * Get the streets's thumbnail.
     *
     * @return string
     */
    public function getThumbnailAttribute()
    {
        $defaultFilename = 'https://via.placeholder.com/1355x897';

        // look for the thumbnail in a known location
        $filename = sprintf('thumbs/%s.jpg', $this->slug);

        return ($filename == 'OK') ? $filename : $defaultFilename;
    }
}
