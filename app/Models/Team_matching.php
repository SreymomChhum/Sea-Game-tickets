<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_matching extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'match_id',
        'team_id',
    ];
    public function Team()
    {
        return $this->hasMany(Team::class);
    }
    public function Match()
    {
        return $this->hasMany(Matches::class);
    }
    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
}
