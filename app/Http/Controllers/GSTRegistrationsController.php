<?php

namespace App\Http\Controllers;

use App\Models\GSTReg;
use Illuminate\Http\Request;

class GSTRegistrationsController extends Controller
{
    public function index()
    {
        $GSTRegs = GSTReg::latest()->get();
        return view('admin.GSTRegs.index',compact('GSTRegs'));
    }

    public function show(GSTReg $gstReg)
    {
    // echo $gstReg->name;
    // exit();
        return view('admin.GSTRegs.show',compact('gstReg'));
    }

    public function create()
    {
        return view('GSTRegs');
    }

    public function store(Request $request)
    {
        
        // Validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'org_name' => 'sometimes',
            'about_business' => 'sometimes',
            'constitution_of_business' => 'required',
            'pan_card_no' => 'required',
            'premises_address' => 'sometimes',
            'electricity_bill' => 'sometimes',
            'pan_card' => 'sometimes'
         
            
        ]);

        // store
        GSTReg::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'org_name' => $request->get('org_name'),
            'about_business' => $request->get('about_business'),
            'type_of_org' => $request->get('type_of_org'),
            'constitution_of_business' => $request->get('constitution_of_business'),
            'pan_card_no' => $request->get('pan_card_no'),
            'premises_address' => $request->get('premises_address'),
            'electricity_bill' => $request->get('electricity_bill'),
            'pan_card' => $request->get('pan_card')

        ]);

        return view('thankyou');
    }
}