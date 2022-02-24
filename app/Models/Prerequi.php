<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prerequi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function preuser()
    {
        return $this->belongsTo(Preuser::class);
    }
}
