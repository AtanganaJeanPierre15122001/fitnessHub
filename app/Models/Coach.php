<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'password'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}