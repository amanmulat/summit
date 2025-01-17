<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];
    public function nominee()
    {
        return $this->belongsTo(Nominee::class, 'nominee_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
