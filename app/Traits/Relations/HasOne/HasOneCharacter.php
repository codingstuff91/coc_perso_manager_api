<?php

namespace App\Traits\Relations\HasOne;

use App\Models\Character;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasOneCharacter
{
    /**
     * @return HasOne<Character>
     */
    public function character(): HasOne
    {
        return $this->hasOne(Character::class);
    }
}