<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	/**
     * Get all of the post's comments.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }

}
