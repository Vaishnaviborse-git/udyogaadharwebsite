@extends('admin.layouts.app')

@section('content')
 <div class="container-fluid">
    <div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">GST Registration</h1>
               
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-6">
        <div class="card-body ">
            <div>
                <h4 class="h4 mb-0 ls-tight" >{{$gstReg->name}} </h3><br>

                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Name: </span> {{$gstReg->name}} 
                    </div>
                    
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Email: </span> {{$gstReg->email}}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Phone: </span> {{$gstReg->phone}}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Organization Name: </span> {{$gstReg->org_name}}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Additional Details about Business: </span> {{$gstReg->about_business}}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Constitution Of Business : </span> {{$gstReg->constitution_of_business }}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold">Pan Card No.:</span> {{$gstReg->pan_card_no}}
                    </div>
                    <div class="mt-1 text-sm text-black-80">
                        <span class="text-muted text-sm font-bold"> Address of Business Premises:</span> {{$gstReg->premises_address}}
                    </div>
            </div>
         </div>
    </div>

      
</div>
@endsection