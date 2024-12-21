<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;
    public $translatedAttributes = ['name'];

    protected $fillable = ['created_at', 'updated_at'];

    protected $with = ['translations'];
}
