<?php

namespace App\Http\Controllers;

use App\Models\ApplicationGEMReg;
use Illuminate\Http\Request;

class GEMRegistrationsController extends Controller
{
    public function index()
    {
        $GEMRegs = ApplicationGEMReg::latest()->get();
        return view('admin.GEMRegs.index',compact('GEMRegs'));
    }

    public function show(ApplicationGEMReg $GEMReg)
    {
       
        return view('admin.GEMRegs.show',compact('GEMReg'));
    }


    public function create()
    {
        return view('GEMRegs');
    }

    public function store(Request $request)
    {        
        // Validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'org_name' => 'sometimes',
            'type_of_org' => 'sometimes',
            'business_pan' => 'sometimes',
            'date_of_start' => 'sometimes',
            'business_address' => 'sometimes',
            'IFSC_code' => 'sometimes',
            'bank_account_no' => 'sometimes',
            'bank_name' => 'sometimes'
            
        ]);

        // store
        ApplicationGEMReg::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'org_name' => $request->get('org_name'),
            'type_of_org' => $request->get('type_of_org'),
            'business_pan' => $request->get('business_pan'),
            
            'date_of_start' => $request->get('date_of_start'),
            'business_address' => $request->get('business_address'),
            'IFSC_code' => $request->get('IFSC_code'),
            'bank_account_no' => $request->get('bank_account_no'),
            'bank_name' => $request->get('bank_name')

        ]);

        return view('thankyou');
    }
}