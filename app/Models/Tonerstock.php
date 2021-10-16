<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tonerstock extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tonerexpense()
    {
        return $this->belongsTo(Tonerexpense::class);
    }
}
