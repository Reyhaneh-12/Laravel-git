<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normaluser extends Model
{
    use HasFactory;
    protected $fillable=['fname','lname','username','password','email','inventory'];

}
