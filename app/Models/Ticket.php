<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Ticket extends Model implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'message',
        'category_id',
        'priority',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
