<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $venue = Venue::all();
        if(count($venue)==0){
            return response()->json(['message'=>"request Successfully"],200); 
        }
        return response()->json(['message'=>"request Successfully", 'data'=>$venue],200);
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
        $validator = validator::make($request->all(),[
            'location'=>'required|max:500',

        ]);
        if($validator->fails()){
            return $validator -> errors();
        }else{
            $venue = Venue::create([
                'location' => request('location'),
            ]);
        }
        return response()->json(['success'=>true, 'data'=>$venue],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venue = Venue::find($id);
        return response()->json(['message'=>"show by id Successfully", 'data'=>$venue],200);
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
        $venue = Venue::find($id);
        $validator =Validator::make($request->all(),[
            'location'=>'required|max:500',
        ]);
        if ($validator->fails()){
            return $validator->errors();
        }else{
            $venue->update([
                'location'=>request('location'),
            ]);
        }
        return response()->json(["message"=>"show venue by user id = ".$id." was update", 'data'=>$venue],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
