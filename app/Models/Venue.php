<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
    ];

    public function event(){
        return $this->hasMany(Event::class);
    }
    public function zone(){
        return $this->hasMany(Zone::class);
    }
}
