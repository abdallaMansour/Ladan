<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionTranslation extends Model
{
    protected $fillable = [
        'display_name',
        'locale',
        'permission_id',
    ];
    protected $table = 'permission_translations';
    public $timestamps = false; 

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
