<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

   protected $fillable =[
    'email',
    'password',
    'firstname',
    'lastname',
    'pseudo',
   ];

   protected $hidden = [
    'password'
   ];
}
