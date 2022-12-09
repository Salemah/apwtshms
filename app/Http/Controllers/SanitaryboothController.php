<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanitaryboothController extends Controller
{
    public function index()
    {
        $SanitaryBooth = sanitary_booth::get();
        if ($SanitaryBooth) {
            return response()->json($SanitaryBooth, 200);
       }
    }
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'booth_location' => 'required|min:4|max:20',
                'booth_padstock' => 'required',



            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        }
        else {

            $doctor = new self_defence();

            $doctor->booth_location = $request->booth_location;
            $doctor->booth_padstock = $request->booth_padstock;
            $doctor->status = 1;
            $doctor->save();
            if($doctor){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Booth Add Successfully',
                ]);
            }
            else{
                return response()->json([
                    'status' => 'failed',
                    'failed' => 'Booth Add Failed',
                ]);
            }
        }

    }
    public function sanitaryboothDelete(Request $request){
        $help = sanitary_booth::find($request->id);
        if ($help->delete()) {
            return response()->json(["success" => " Booth Delete Succesfull"], 200);
        } else {
            return response()->json(["msg" => "notfound"], 404);
        }
    }

}


