<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['name', 'route', 'parent_id', 'is_hidden', 'sort', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_auth')->withTimestamps();
    }
}
