@extends('admin.layouts.app')

@section('content')
 <div class="container-fluid">
    <div>
        <div class="row align-items-center">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight">Udyam Aadhar Registration</h1>
               
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-6">
        <div class="card-body ">
            <div>
                <h4 class="h4 mb-0 ls-tight" >{{$aadharReg->fname}} {{$aadharReg->lname}} </h3><br>

                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Aadhar No: </span> {{$aadharReg->aadhar_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Name: </span> {{$aadharReg->fname}} {{$aadharReg->lname}} 
                </div>
                
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Email: </span> {{$aadharReg->email}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Phone: </span> {{$aadharReg->phone}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Gender: </span> {{$aadharReg->gender}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Social Category: </span> {{$aadharReg->social_category}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Physically Handicap: </span> {{$aadharReg->physically_handicapped}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Pan Card: </span> {{$aadharReg->pan_card}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Organization Name: </span> {{$aadharReg->org_name}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Type Of Organisation: </span> {{$aadharReg->type_of_org}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Primises Address: </span> {{$aadharReg->premises_address}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">GST No.:</span> {{$aadharReg->GSTIN_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Date Of Start:</span> {{$aadharReg->date_of_start}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Bank Account No.:</span> {{$aadharReg->bank_account_no}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">IFSC Code:</span> {{$aadharReg->IFSC_code}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">No. of Employee:</span> {{$aadharReg->no_of_emp}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Total Investment:</span> {{$aadharReg->total_investment}}
                </div>
                <div class="mt-1 text-sm text-black-80">
                    <span class="text-muted text-sm font-bold">Gross Turnover:</span> {{$aadharReg->gross_turnover}}
                </div>
                </div>
            </div>
         </div>
    </div>

      
</div>
@endsection