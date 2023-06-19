<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'surname', 'yearOfBirth', 'salary'];

    protected static function newFactory()
    {
        return \Database\Factories\PlayerFactory::new();
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
