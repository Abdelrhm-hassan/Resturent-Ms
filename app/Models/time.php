<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    protected $fillable  =['id', 'name'];

    public function order(){
        
        return $this->hasMany('App\Models\orders');
    }
    use HasFactory;
}
