<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Team_matching;
use Illuminate\Http\Request;

class team_MatchingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matching = Team_matching::all();
        return response()->json(['message'=>"success",'data'=>$matching],200);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function getEventDetail($id)
    // {
    //     $eventsDetail = team_matching::join('matches', 'matches.id', '=', 'team_matching.id')->where('matches.event_id', $id)->get();
    //     return $eventsDetail;
    // }

}
