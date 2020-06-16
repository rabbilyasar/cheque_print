<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{

    protected $guarded = [];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

}
