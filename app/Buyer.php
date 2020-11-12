<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    protected $appends = [
        'total_items'
    ];

    protected $with = ['diaryTaken', 'penTaken', 'eraserTaken'];

    public function diaryTaken()
    {
        return $this->hasMany(DiaryTaken::class);
    }

    public function penTaken()
    {
        return $this->hasMany(PenTaken::class);
    }

    public function eraserTaken()
    {
        return $this->hasMany(EraserTaken::class);
    }

    public function getTotalItemsAttribute()
    {
        return $this->diaryTaken()->sum('amount') + $this->penTaken()->sum('amount') + $this->eraserTaken()->sum('amount');
    }
}
