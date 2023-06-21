<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    protected $fillable=[
        'first_name','last_name','email','password'
    ];
}
