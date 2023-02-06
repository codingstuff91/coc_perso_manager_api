<?php

namespace App\Models;

use App\Traits\Relations\BelongsToMany\BelongsToManyCharacters;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use BelongsToManyCharacters;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
    ];

}
