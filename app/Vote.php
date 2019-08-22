<?php

namespace App;

class Vote extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bappa()
    {
        return $this->belongsTo(Mandal::class);
    }
}
