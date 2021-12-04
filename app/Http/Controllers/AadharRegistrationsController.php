<?php

namespace App\Http\Controllers;

use App\Models\AadharReg;
use Illuminate\Http\Request;

class AadharRegistrationsController extends Controller
{

    public function index()
    {
        $aadharRegs = AadharReg::latest()->get();
        return view('admin.aadharRegs.index',compact('aadharRegs'));
    }

    public function show(AadharReg $aadharReg)
    {
       
        return view('admin.aadharRegs.show',compact('aadharReg'));
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
            'gender' => 'sometimes',
            'social_category' => 'sometimes',
            'physically_handicapped' => 'sometimes',
            'pan_card' => 'sometimes',
            'org_name' => 'sometimes',
            'type_of_org' => 'required',
            'premises_address' => 'sometimes',
            'GSTIN_no' => 'sometimes',
            'date_of_start' => 'sometimes',
            'bank_account_no' => 'sometimes',
            'IFSC_code' => 'sometimes',
            'business_activity' => 'sometimes',
            'about_product' => 'sometimes',
            'no_of_emp' => 'sometimes',
            'total_investment' => 'sometimes',
            'gross_turnover' => 'sometimes',
            
        ]);

        // store
        AadharReg::create([
            'aadhar_no' => $request->get('aadhar_no'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'social_category' => $request->get('social_category'),
            'physically_handicapped' => $request->get('physically_handicapped'),
            'pan_card' => $request->get('pan_card'),
            'org_name' => $request->get('org_name'),
            'type_of_org' => $request->get('type_of_org'),
            'premises_address' => $request->get('premises_address'),
            'GSTIN_no' => $request->get('GSTIN_no'),
            'date_of_start' => $request->get('date_of_start'),
            'bank_account_no' => $request->get('bank_account_no'),
            'IFSC_code' => $request->get('IFSC_code'),
            'business_activity' => $request->get('business_activity'),
            'about_product' => $request->get('about_product'),
            'no_of_emp' => $request->get('no_of_emp'),
            'total_investment' => $request->get('total_investment'),
            'gross_turnover' => $request->get('gross_turnover'),

        ]);

        return view('thankyou');

    }

    public function update(Request $request, AadharReg $aadharReg)
    {
          // Validation
          $request->validate([
            'status' => 'required'

        ]);

        // update
        $aadharReg->update([
            'status' => $request->get('status')

        ]);

        return redirect()->back();
    }
}
