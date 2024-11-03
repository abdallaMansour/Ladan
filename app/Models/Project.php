<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'description_ar',
        'name_en',
        'description_en',
        'web_link',
        'ios_link',
        'android_link',
        'image',
    ];
}
