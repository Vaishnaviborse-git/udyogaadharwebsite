@extends('admin.layouts.app')

@section('content')
 <div class="container-fluid">
    <div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">GeM Registration</h1>
               
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-6">
        <div class="card-body ">
            <div>
                <h4 class="h4 mb-0 ls-tight" >{{$GEMReg->name}}  </h3><br>

                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Name: </span> {{$GEMReg->name}} 
                </div>
                
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Email: </span> {{$GEMReg->email}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Phone: </span> {{$GEMReg->phone}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Organization Name: </span> {{$GEMReg->org_name}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Type Of Organisation: </span> {{$GEMReg->type_of_org}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Business Address : </span> {{$GEMReg->business_address}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold"> Date of Commencement of Business : </span> {{$GEMReg->date_of_start }}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Business Pan Card:</span> {{$GEMReg->business_pan}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold"> Bank Name:</span> {{$GEMReg->bank_name}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Bank Account No.:</span> {{$GEMReg->bank_account_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">IFSC Code:</span> {{$GEMReg->IFSC_code}}
                </div>
               
                
            </div>
         </div>
    </div>
 </div>
      
@endsection