<?php

namespace App\Http\Controllers;

use App\Models\contact_doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor =contact_doctor::get();
        if($doctor){
            return response()->json($doctor,200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'doctor_name' => 'required|min:4|max:20',
                'doctor_phonenum' => 'required',
                'specialist_at' => 'required',
                'available_time' => 'required',


            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        }
        else {

            $doctor = new contact_doctor();

            $doctor->doctor_name = $request->doctor_name;
            $doctor->doctor_phonenum = $request->doctor_phonenum;
            $doctor->specialist_at = $request->specialist_at;
            $doctor->available_time = $request->available_time;

            if($doctor->save()){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Doctor Add Successfully',
                ]);
            }
            else{
                return response()->json([
                    'status' => 'failed',
                    'failed' => 'Doctor Add Failed',
                ]);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doctorDelete(Request $request)
    {
        $doctor = contact_doctor::find($request->id);
        if ($doctor ->delete()) {
            return response()->json(["success" => " Doctor  Delete Succesfull"], 200);
        } else {
            return response()->json(["msg" => "notfound"], 404);
        }
    }
}
