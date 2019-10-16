<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    // protected $table = 'komentar';
    protected $fillable = ['nama' , 'email','komen'];
    public $timestamps = false;
    
    
    
}
