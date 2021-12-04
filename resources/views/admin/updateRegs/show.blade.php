@extends('admin.layouts.app')

@section('content')
 <div class="container-fluid">
    <div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Update Udyam Registration</h1>
               
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-6">
        <div class="card-body ">
            <div>
                <h4 class="h4 mb-0 ls-tight" >{{$updateReg->fname}} {{$updateReg->lname}} </h3><br>

                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Aadhar No: </span> {{$updateReg->aadhar_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Name: </span> {{$updateReg->fname}} {{$updateReg->lname}} 
                </div>
                
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Email: </span> {{$updateReg->email}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Phone: </span> {{$updateReg->phone}}
                </div>
               
                
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Organization Name: </span> {{$updateReg->org_name}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Udyam Registar Number: </span> {{$updateReg->udyam_reg_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Type Of Organisation: </span> {{$updateReg->type_of_org}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Updates: </span> {{$updateReg->updates}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Decription:</span> {{$updateReg->decription}}
                </div>
               
            </div>
         </div>
    </div>

      
</div>
@endsection