<?php

namespace App;

class Location extends BaseModel
{
    /**
     * Get the properties for the location.
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
