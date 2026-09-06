<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsersPermission extends Model
{
    protected $table = 'users_permissions';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
