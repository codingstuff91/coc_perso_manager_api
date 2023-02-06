<?php

namespace App\Models;

use App\Traits\Relations\BelongsTo\BelongsToAdvantage;
use App\Traits\Relations\BelongsTo\BelongsToProfile;
use App\Traits\Relations\BelongsToMany\BelongsToManyAttributes;
use App\Traits\Relations\BelongsToMany\BelongsToManyCapacities;
use App\Traits\Relations\BelongsToMany\BelongsToManyUsers;
use App\Traits\Relations\BelongsToMany\BelongsToManyWeapons;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    use BelongsToManyUsers;
    use BelongsToProfile;
    use BelongsToAdvantage;
    use BelongsToManyAttributes;
    use BelongsToManyWeapons;
    use BelongsToManyCapacities;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'level',
        'name',
        'gender',
        'age',
        'height',
        'profile_id',
        'advantage_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'level' => 'integer',
        'age'   => 'integer',
    ];
}
