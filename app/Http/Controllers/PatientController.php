<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        // $validator = Validator::make($request->all(),
        // [
        //     'first_name' =>  'required|string|max:255',
        //     'last_name' =>  'required|string|max:255',
        //     'gender' =>  'required|string',
        //     'dob' =>  'required|string',
        //     'email' => 'required|string|max:255',
        //     'primary_phone_no1' => 'required|integer|min:7',
        //     'secondary_phone_no' => 'required|integer|min:7',
        //     'address1' =>  'required|string|max:255',
        //     'city' =>  'required|string|max:255',
        //     'postcode' =>  'required|string|max:255',
        //     'country' =>  'required|string|max:255',

        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        
        $patient = new Patient();
        $patient->created_by = Auth::id();
        $patient->first_name = $request->input('first_name');
        $patient->last_name = $request->input('last_name');
        $patient->gender = $request->input('gender');
        $patient->dob = $request->input('dob');
        $patient->email = $request->input('email');
        $patient->primary_phone_no = $request->input('primary_phone_no');
        $patient->secondary_phone_no = $request->input('secondary_phone_no');
        $patient->address1 = $request->input('address1');
        $patient->address2 = $request->input('address2');
        $patient->city = $request->input('city');
        $patient->postcode = $request->input('postcode');
        $patient->country = $request->input('country');
        
        if($patient->save()){
            Session::flash('success', 'Data saved successfully.');
            return redirect()->back();
        }else{
            echo "Unable to save data";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
