<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'team_match_id',
        'zone_id',
    ];
    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
    public function Team_Matching()
    {
        return $this->belongsTo(Team_matching::class);
    }
    public function Zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
