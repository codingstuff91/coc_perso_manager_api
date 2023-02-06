<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToProfile
{
    /**
     * @return BelongsTo<Profile>
     */
    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}