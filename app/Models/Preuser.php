<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preuser extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function prerqui()
    {
        return $this->hasMany(Prerequi::class);
    }

}
