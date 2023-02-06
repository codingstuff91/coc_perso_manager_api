<?php

namespace App\Traits\Relations\BelongsToMany;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyWeapons
{
    /**
     * @return BelongsToMany<Weapon>
     */
    public function weapons(): BelongsToMany
    {
        return $this->belongsToMany(Weapon::class);
    }
}