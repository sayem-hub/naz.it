<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comprequest_reason(){
        return $this->hasMany(Comprequest_reason::class);
    }

    public function comprequest_use(){
        return $this->hasMany(Comprequest_use::class);
    }
}
