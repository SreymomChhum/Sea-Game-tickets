<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        "match_id"
    ];

    public function Team_matching()
    {
        return $this->belongsTo(Team_matching::class);
    }
}
