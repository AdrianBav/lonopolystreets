<?php

namespace App;

use Illuminate\Support\Str;

class Street extends BaseModel
{
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
     * Get the photos of the street.
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
