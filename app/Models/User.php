<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
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

   protected string $email;
   protected string $password;
   protected string $firstname;
   protected string $lastname;
   protected string $pseudo;


}
