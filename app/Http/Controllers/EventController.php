<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        if(count($event)==0){
            return response()->json(['message'=>"request Successfully"],200); 
        }
        return response()->json(['message'=>"request Successfully", 'data'=>$event],200);
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
        $validator =Validator::make($request->all(),[
            'name_sport'=>'required|max:150',
        ]);
        if ($validator->fails()){
            return $validator->errors();
        }
        $event = Event::create($validator->validated());
        return response()->json(['message'=>"Create Successfully", 'data'=>$event],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);
        return response()->json(['message'=>"show by id Successfully", 'data'=>$event],200);
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
        $event = Event::find($id);
        $validator =Validator::make($request->all(),[
            'name_sport'=>'required|max:150',
        ]);
        if ($validator->fails()){
            return $validator->errors();
        }else{
            $event->update([
                'name_sport'=>request('name_sport'),
            ]);
        }
        return response()->json(["message"=>"show event by user id = ".$id." was update", 'data'=>$event],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return response()->json(['message' =>"deleted successfully"],201);


    }
}
