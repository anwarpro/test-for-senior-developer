<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenTaken extends Model
{
    protected $table = 'pen_taken';

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
