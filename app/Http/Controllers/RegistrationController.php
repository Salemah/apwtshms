<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // |regex:/^([0-9\s\-\+\(\)]*)$/|max:14|min:11
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:4|max:20',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'confirmpassword' => 'required|same:password',
                'phone' => 'required',
                'age' => 'required',
                'emergency_contact' => 'required',
                'address' => 'required',

            ],
            [
                'phone.required' => 'Phone is required!',
                'phone.regex' => 'Invalid phone number!',
                'phone.max' => 'Number should 11 characters!',
                'confirmpassword.same' => 'password missmatched'

            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->errors(),
            ]);
        }
        else {

            $admin = new User();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->password = $request->password;
            $admin->age = $request->age;
            $admin->emergency_contact = $request->emergency_contact;
            $admin->address = $request->address;
            $admin->user_type = 2; //registration always as a user
            $admin->save();
            if($admin){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Registration Successfully',
                ]);
            }
            else{
                return response()->json([
                    'status' => 'failed',
                    'failed' => 'Registration Failed',
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
    public function destroy($id)
    {
        //
    }
}
