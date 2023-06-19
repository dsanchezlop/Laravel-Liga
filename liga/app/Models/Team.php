<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'coach', 'category', 'budget'];

    protected static function newFactory()
    {
        return \Database\Factories\TeamFactory::new();
    }

    public function players(){
        return $this->hasMany(Player::class);
    }
}
