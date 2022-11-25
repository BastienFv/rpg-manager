<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'name',
        'description',
        'class',
        'magic',
        'strength',
        'agility',
        'inteligence',
        'pv',
        'user_id',
    ];
    
    protected string $name;
    protected string $description;
    protected string $class;
    private int $magic;
    private int $strength;
    private int $agility;
    private int $inteligence;
    private int $pv;
    private int $user_id;


}
