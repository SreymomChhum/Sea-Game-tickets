<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowTeamMarchingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'event_id'=>$this->id,
            // 'match_id'=>$this->match_id,
            // 'team_id'=>$this->team_id,

        ];
    }
}
