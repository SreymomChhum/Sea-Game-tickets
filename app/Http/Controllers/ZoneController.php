<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zone = Zone::all();
        if (count($zone)==0){
            return response()->json(['message'=>'request succesfully'],200);
        }else{
            return response()->json(['message'=>'request succesfully','data'=>$zone],200);
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
        $validator = validator::make($request->all(),[
            'name'=>'required',

        ]);
        if($validator->fails()){
            return $validator -> errors();
        }else{
            $zone = Zone::create([
                'name' => request('name'),
                'venue_id' => request('venue_id'),
            ]);
        }
        return response()->json(['success'=>'create success', 'data'=>$zone],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $zone = Zone::find($id);
        return response()->json(['request by id successfully','data'=>$zone], 201);
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
        $zone = Zone::find($id);
        $validator =Validator::make($request->all(),[
            'name'=>'required',
        ]);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $zone->update([
                'name'=>request('name'),
                'venue_id'=>request('venue_id')
            ]);
        }
        return response()->json(['message'=>'update success','data'=>$zone]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zone = Zone::find($id);
        $zone->delete();
        return response()->json(['message'=>'delete success']);
    }
}
