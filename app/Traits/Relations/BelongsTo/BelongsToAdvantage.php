<?php

namespace App\Traits\Relations\BelongsTo;

use App\Models\Advantage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToAdvantage
{
    /**
     * @return BelongsTo<Advantage>
     */
    public function advantage(): BelongsTo
    {
        return $this->belongsTo(Advantage::class);
    }
}