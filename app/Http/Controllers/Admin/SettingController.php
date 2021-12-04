<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index',compact('setting'));
    }
    

    public function store(Request $request, Setting $setting)
    {
        
        $setting = Setting::first();

        if(isset($setting))
        {
              // Validation
            $request->validate([

                'website_title' => 'required',
                'description' => 'required',
                'address' => 'required',
                'phone' => 'required|min:10',
                'contact_email' => 'required|email'
                
            ]);

          //Update
            $setting->update([
                'website_title' => $request->get('website_title'),
                'description' => $request->get('description'),
                'address' => $request->get('address'),
                'phone' => $request->get('phone'),
                'contact_email' => $request->get('contact_email'),
                
            ]);

        }else
        {
              // Validation
            $request->validate([
                'website_title' => 'required',
                'description' => 'required',
                'address' => 'required',
                'phone' => 'required|min:10',
                'contact_email' => 'required|email'
            ]);

            Setting::create([

                'website_title' => $request->get('website_title'),
                'description' => $request->get('description'),
                'address' => $request->get('address'),
                'phone' => $request->get('phone'),
                'contact_email' => $request->get('contact_email'),

            ]);
        }

        return redirect(route('admin.settings.index'));
    }
}
