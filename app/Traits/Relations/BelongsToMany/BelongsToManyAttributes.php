<?php

namespace App\Traits\Relations\BelongsToMany;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait BelongsToManyAttributes
{
    /**
     * @return BelongsToMany<Attribute>
     */
    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->withPivot('value', 'modificator');
    }
}