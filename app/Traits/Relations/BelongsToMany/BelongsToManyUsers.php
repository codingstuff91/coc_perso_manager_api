<?php

namespace App\Traits\Relations\BelongsToMany;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyUsers
{
    /**
     * @return BelongsToMany<User>
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}