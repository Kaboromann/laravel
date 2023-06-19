<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public $table = 'reviews';
    protected $fillable=[
        'name','email','review','updated_at'
    ];
}
