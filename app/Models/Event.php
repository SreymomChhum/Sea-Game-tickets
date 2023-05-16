<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;


class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_sport',
        "venue_id"
    ];
    public function Venue()
    {
        return $this->belongsTo((Venue::class));
    }
    public function Team_Matching(){
        return $this->hasMany((Team_matching::class));
    }
    public function Ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
