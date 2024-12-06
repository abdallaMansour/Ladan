<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Ticket extends Model implements HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'message',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
