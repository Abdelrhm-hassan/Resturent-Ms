<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable  =['id', 'name','cat_id','img','price','desc'];

    public function cat(){
        return $this->belongsTo('App\Models\Cat');
    }
    use HasFactory;
}
