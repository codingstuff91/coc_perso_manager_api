<?php

namespace App\Models;

use App\Models\User;
use App\Models\Weapon;
use App\Models\Profile;
use App\Models\Capacity;
use App\Models\Attribute;
use App\Models\Particularity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function particularity()
    {
        return $this->belongsTo(Particularity::class, 'trait_id');
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class)->withPivot('value', 'modificator');;
    }

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class);
    }

    public function capacities()
    {
        return $this->belongsToMany(Capacity::class, 'capacity_character');
    }
}
