<?php

namespace App\Models;

use Laratrust\Models\Role as RoleModel;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Role extends RoleModel implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['display_name'];

    protected $fillable = ['name'];

    public function translations(): HasMany
    {
        return $this->hasMany(RoleTranslation::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    }
}
