<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaryTaken extends Model
{
    protected $table = 'diary_taken';

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

}
