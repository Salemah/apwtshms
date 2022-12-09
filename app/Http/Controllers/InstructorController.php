<?php

namespace App\Http\Controllers;

use App\Models\self_defence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstructorController extends Controller
{
    public function index()
    {
        $instructor = self_defence::get();
        if ($instructor) {
            return response()->json($instructor, 200);
       }
    }
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'instructor_name' => 'required|min:4|max:20',
                'instructor_phonenum' => 'required',
                'course_time' => 'required',



            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        }
        else {

            $doctor = new self_defence();

            $doctor->instructor_name = $request->instructor_name;
            $doctor->instructor_phonenum = $request->instructor_phonenum;
            $doctor->course_time = $request->course_time;
            $doctor->status = 1;
            $doctor->save();
            if($doctor){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Instructor Add Successfully',
                ]);
            }
            else{
                return response()->json([
                    'status' => 'failed',
                    'failed' => 'Instructor Add Failed',
                ]);
            }
        }

    }
    public function instructorDelete(Request $request){
        $help = self_defence::find($request->id);
        if ($help->delete()) {
            return response()->json(["success" => " self defence Delete Succesfull"], 200);
        } else {
            return response()->json(["msg" => "notfound"], 404);
        }
    }

}
