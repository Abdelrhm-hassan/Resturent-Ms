<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
     protected $fillable  =['id', 'name','gest_number','date','time_id','message','phone','email'];
     public function time(){
        return $this->belongsTo('App\Models\time');
    }
    use HasFactory;
}
