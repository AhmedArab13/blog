<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// الاسم المفرد من الجدول(studly case)

// php artisan make:model Post

class Post extends Model
{

    use HasFactory;

// fillable protect us from mass assignment vulnerability 
    protected $fillable = [
    'title',
    'description',
    'posted_by'
        ] ;
}