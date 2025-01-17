<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function awardType()
    {
        return $this->belongsTo(AwardType::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
