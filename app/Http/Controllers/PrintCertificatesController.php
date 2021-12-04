<?php

namespace App\Http\Controllers;

use App\Models\PrintCertificate;
use Illuminate\Http\Request;

class PrintCertificatesController extends Controller
{
    public function index()
    {
        $printCerts = PrintCertificate::latest()->get();
        return view('admin.printCerts.index',compact('printCerts'));
    }

    public function show(PrintCertificate $printCert)
    {
       
        return view('admin.printCerts.show',compact('printCert'));
    }


    public function create()
    {
        return view('printCertificates');
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
            'udyam_reg_no' => 'sometimes'
            
        ]);

        // store
        PrintCertificate::create([
            'aadhar_no' => $request->get('aadhar_no'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'udyam_reg_no' => $request->get('udyam_reg_no'),

        ]);

        return view('thankyou');
    }

    public function update(Request $request, PrintCertificate $printCert)
    {
          // Validation
          $request->validate([
            'status' => 'required'

        ]);

        // update
        $printCert->update([
            'status' => $request->get('status')

        ]);

        return redirect()->back();
    }
}
