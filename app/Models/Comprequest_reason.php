<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprequest_reason extends Model
{
    use HasFactory;

     protected $guarded = [];


    public function  comprequest(){
        return  $this->belongsTo(Comprequest::class);
    }

}
