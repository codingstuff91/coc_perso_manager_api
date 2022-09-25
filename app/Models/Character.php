<?php

namespace App\Models;

use App\Models\Profile;
use App\Models\Particularity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function particularity()
    {
        return $this->belongsTo(Particularity::class, 'trait_id');
    }
}
