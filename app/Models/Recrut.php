<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recrut extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'response',
       ];
    
    private int $group_id;
    private int $character_id;
    protected bool $response;
}
