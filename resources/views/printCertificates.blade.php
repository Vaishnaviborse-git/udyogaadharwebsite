@extends('layouts.landing')

@section('content')


<div class="container-lg py-7">
    <div class="row">
        <div class="mb-7 text-center py-6 px-4">
            <h2 class="font-semibold mb-1"><b>Print Udyog Aadhar/Udyam Certificate</b></h2>
            <p class="text-sm text-muted">Get the Registration Number within 24 working hours</p>
        </div>  
       
        <div class="col col-lg-6 mx-auto">
            <form action="{{ route('printCert.store') }}" method="POST">
                @csrf
          <div class="card py-10 px-10">
            <div class="row g-5">
                
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="aadhar_no">Applicant Aadhaar Number / आवेदक आधार नंबर) *</label>
                        <input type="text" class="form-control @error('aadhar_no') is-invalid @enderror" value="{{ old('aadhar_no') }}" name="aadhar_no">
                        @error('aadhar_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <label class="form-label" for="Name">Applicant Name / आवेदक का नाम *</label>
                <div class="col-md-6">
                    <div class="">
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}" name="fname">
                        <label class="form-label" name="fname">First name</label>
                        @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" name="lname">
                        <label class="form-label" name="lname">Last name</label>
                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="phone">Applicant Mobile Number / आवेदक का मोबाइल नंबर *</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="email">Applicant Email Id / आवेदक ईमेल आईडी *</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

               
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="udyam_reg_no">Msme/Udyog/Udyam Registration Number / एमएसएमई/उद्योग/उद्यम संख्या</label>
                        <input type="text" class="form-control @error('udyam_reg_no') is-invalid @enderror" value="{{ old('udyam_reg_no') }}" name="udyam_reg_no">
                        @error('udyam_reg_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <input class="form-label" type="checkbox" name="check_example" id="check_example">
                    <label class="form-label" for="check_example">
                        Accept Terms & Conditions
                    </label>
                </div>
            </div>
          
            <hr class="mt-7 mb-7" />
            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Submit</button>
                {{-- <button type="button" class="btn btn-neutral ms-auto">Cancel</button> --}}
            </div>
        </div>
        </div>

        <div class="flex-none w-56 w-lg-96 mb-10 mb-md-0">
            <div class="list-group">
                <div class="list-group-item">
                    <h5 class="mb-0">Settings</h5>
                </div>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-person-square text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Profile</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-gear text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Account</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-palette text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Appearance</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-shield-lock text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Account Security</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-wallet text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Billing</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex">
                    <div class="me-3 text-sm d-none d-md-block">
                        <i class="bi bi-bell text-muted"></i>
                    </div>
                    <div>
                        <span class="d-block text-heading text-sm font-semibold mb-0 mb-lg-1">Notifications</span>
                        <p class="text-sm text-muted d-none d-lg-block">By filling your data you get a much better experience using our.</p>
                    </div>
                </a>
            </div>
        </div>

   

    </div>
</div>

   
@endsection
