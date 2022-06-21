<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    
    protected $fillable  =['id', 'name','spec','img','code','phone','email'];

    use HasFactory;
   
}
