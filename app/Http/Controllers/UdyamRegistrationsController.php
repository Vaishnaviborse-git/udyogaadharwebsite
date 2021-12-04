<?php

namespace App\Http\Controllers;

use App\Models\AadharReg;
use Illuminate\Http\Request;

class UdyamRegistrationsController extends Controller
{

    public function index()
    {
        $aadharRegs = AadharReg::latest()->get();
        return view('admin.aadharRegs.index',compact('aadharRegs'));
    }

    public function show(AadharReg $aadharRegs)
    {
       
        return view('admin.aadharRegs.index',compact('aadharReg'));
    }

    public function create()
    {
        return view('udyamRegs');
    }
}
