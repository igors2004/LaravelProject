<?php

namespace App\Http\Controllers;

use App\Http\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(): JsonResponse 
    {
        return response()->json(People::all(), 200); 
    }
    public function show($id): JsonResponse
    {
        $person = Basic::find($id);
        return response()->json($person, 200);
    }
    public function update(Request $request, $id)
    {
        $person = Basic::find($id);

        $data = $request ->validate([
            'city'=> 'required',
            'country'=> 'required'
        ]);
        $person->update($data);
        return response ()->json($person, 200);

    }
    public function delete($id)
    {  
        $person = Basic::find($id);
        $person->delete(); 

    }
    public function create(Request $request)
    {
        $data = $request ->validate([
            'name'=> 'required',
            'last_name'=> 'required',
            'phone_number'=>'required',
            'street_number'=> 'required',
            'city'=>'required',
            'country'=>'required'
        ]);
        $people =Basic::create($data);
        return response ()->json($people, 201);
    }
}


