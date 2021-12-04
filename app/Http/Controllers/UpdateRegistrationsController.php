<?php

namespace App\Http\Controllers;

use App\Models\UpdateReg;
use Illuminate\Http\Request;

class UpdateRegistrationsController extends Controller
{

    public function index()
    {
        $updateRegs = UpdateReg::latest()->get();
        return view('admin.updateRegs.index',compact('updateRegs'));
    }

    public function show(UpdateReg $updateReg)
    {
       
        return view('admin.updateRegs.show',compact('updateReg'));
    }

    public function create()
    {
        return view('updateRegs');
    }

    public function store(Request $request)
    {

        // Validation
        $request->validate([
            'aadhar_no' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'udyam_reg_no' => 'sometimes',
            'org_name' => 'sometimes',
            'type_of_org' => 'required',
            'updates' => 'required',
            'decription' => 'required'
            
        ]);

        // store
        UpdateReg::create([
            'aadhar_no' => $request->get('aadhar_no'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'udyam_reg_no' => $request->get('udyam_reg_no'),
            'org_name' => $request->get('org_name'),
            'type_of_org' => $request->get('type_of_org'),
            'updates' => $request->get('updates'),
            'decription' => $request->get('decription')
        ]);

        return view('thankyou');
    }
}