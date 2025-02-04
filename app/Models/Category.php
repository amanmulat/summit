<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class, 'nominee_id');
    }
}
