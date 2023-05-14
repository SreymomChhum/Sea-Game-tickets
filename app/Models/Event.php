<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venues;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_sport',
        "venue_id"
    ];
    public function venue(){
        return $this->belongsTo((Venues::class));
    }
}
