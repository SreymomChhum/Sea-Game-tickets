<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Matches;
// use PhpParser\Node\Expr\Match_;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $matches = Match
        $matches = Matches::all();
        if (count($matches)==0){
            return response()->json(['message'=>"request Successfully"], 200);
        }
        return response()->json(['message'=>'request Successfully'],200);
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
        $validator = Validator::make($request->all(),[
            'description'=>'required|min:20',
            'date_time'=>'required',
            // 'event_id'=>'required',
        ]);
        if($validator->fails()){
            return $validator -> errors();
        }else{
            $match = Matches::create([
                'description' => request('description'),
                'date_time' => request('date_time'),
            ]);
        }
        return response()->json(['message' => "Create Successfully",'data' => $match], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $marth = Matches::find($id);
        return response()->json(['message'=>"request by id successfully",'data'=>$marth],200);
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
        $match = Matches::find($id);
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:150',
            'date_time' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $match->update([
                'description' => request('description'),
                'date_time' => request('date_time'),
            ]);
        }
        return response()->json(["message" => "show marth by user id = " . $id . " was update", 'data' => $match], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $match = Matches::find($id);
        $match->delete();
        return response()->json(['deleted success']);
    }
}
