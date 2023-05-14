<?php

// namespace App\Http\Controllers;
// use App\Models\Venues;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


// class VenueController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $venues = Venues::all();
//         if(count($venues)==0){
//             return response()->json(['message'=>"request Successfully"],200); 
//         }
//         return response()->json(['message'=>"request Successfully", 'data'=>$venues],200);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $validator =validator::make($request->all(),[
//             'location'=>'required|max:500',
//         ]);
//         if ($validator->fails()){
//             return $validator->errors();
//         }
//         $venues = Venues::create($validator->validated());
//         return response()->json(['message'=>"venue created successfully", 'data'=>$venues],200);
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $venues = Venues::find($id);
//         return response()->json(['message'=>"show by id Successfully", 'data'=>$venues],200);      
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $venues = Venues::find($id);
//         $validator =Validator::make($request->all(),[
//             'location'=>'required|max:500',
//         ]);
//         if ($validator->fails()){
//             return $validator->errors();
//         }else{
//             $venues->update([
//                 'location'=>request('location'),
//             ]);
//         }
//         return response()->json(["message"=>"show post by user id = ".$id." was update", 'data'=>$venues],200);
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $venue = Venues::find($id);
//         $venue->delete();
//         return response()->json(["message"=>"deleted successfully"],200); 
//     }
// }
