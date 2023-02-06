<?php

namespace App\Traits\Relations\BelongsToMany;

use App\Models\Character;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyCharacters
{
    /**
     * @return BelongsToMany<Character>
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}