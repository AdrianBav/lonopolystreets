<?php

namespace App;

class Group extends BaseModel
{
    /**
     * Get the streets of the group.
     */
    public function streets()
    {
        return $this->hasMany(Street::class);
    }
}
