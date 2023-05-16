<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ShowTicketResource;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all();
        if(count($ticket)==0){
            return response()->json(['message'=>"request success"]);
        }else{
            return response()->json(['message'=>"request successfully",'data'=>$ticket], 200);

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = Ticket::create([
            'event_id' => request('event_id'),
            'team_match_id' => request('team_match_id'),
            'zone_id' => request('zone_id'),
        ]);
        return response()->json(['success'=>'create success', 'data'=>$ticket],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return response()->json(['message'=>"request by id successfully",'data'=>$ticket],201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::updated([
            'event_id' => request('event_id'),
            'team_match_id' => request('team_match_id'),
            'zone_id' => request('zone_id'),
        ]);
        return response()->json(['message'=>'request update successful','data'=>$ticket],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return response()->json(['message'=>"request delete succesfully"],200);
    }

    public function getTicketDetail($id){

        $ticket = Ticket::find($id);
        $ticket = new ShowTicketResource($ticket);
        return response()->json(['message'=>'Get ticket detail success', 'data'=>$ticket],200);
    }
    
}
