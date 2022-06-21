<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable  =['id', 'name'];
    
    public function Meal(){
        return $this->hasMany('App\Models\Meal');
    }
    use HasFactory;
}
