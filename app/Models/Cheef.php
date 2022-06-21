<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheef extends Model
{
    protected $fillable  =['id', 'name','spec','img','address','phone','email'];

    use HasFactory;
}
