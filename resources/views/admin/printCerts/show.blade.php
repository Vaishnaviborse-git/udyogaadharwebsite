@extends('admin.layouts.app')

@section('content')
 <div class="container-fluid">
    <div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Print Udyam Certificate</h1>
               
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-6">
        <div class="card-body ">
            <div>
                <h4 class="h4 mb-0 ls-tight" >{{$printCert->fname}} {{$printCert->lname}} </h3><br>

                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Aadhar No: </span> {{$printCert->aadhar_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Name: </span> {{$printCert->fname}} {{$printCert->lname}} 
                </div>
                
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Email: </span> {{$printCert->email}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Phone: </span> {{$printCert->phone}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Udyam Registration Number: </span> {{$printCert->udyam_reg_no}}
                </div>
               
            </div>
         </div>
    </div>

      
</div>
@endsection