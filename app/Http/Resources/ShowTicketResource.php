<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ShowZoneResource;

class ShowTicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        return [
            'event_id'=> new ShowEventResource($this->Event),
            // 'team_match_id'=>$this-> team_match_id,
            // 'team_match_id'=>new ShowTeamMarchingResource($this->Team_Matching),
            'zone_id'=> new ShowZoneResource($this->Zone),
        ];
    }
}
