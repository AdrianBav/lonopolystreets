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
        $filename = sprintf('images/streets/%s.jpg', $this->slug);

        return file_exists(public_path($filename))
            ? asset($filename)
            : 'https://via.placeholder.com/1355x897';
    }
}
