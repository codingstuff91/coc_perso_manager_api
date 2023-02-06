<?php

namespace App\Traits\Relations\BelongsToMany;

use App\Models\Attribute;
use App\Models\Capacity;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyCapacities
{
    /**
     * @return BelongsToMany<Attribute>
     */
    public function capacities(): BelongsToMany
    {
        return $this->belongsToMany(Capacity::class);
    }
}