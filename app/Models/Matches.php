<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'date_time',
        'event_id',
    ];
    public function Event()
    {
        return $this->belongsTo((Event::class));
    }
    public function Team()
    {
        return $this->hasMany(Team::class);
    }
}
