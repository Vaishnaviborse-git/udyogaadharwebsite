@extends('layouts.landing')

@section('content')


<div class="container-lg py-7">
    <div class="row">
        <div class="mb-7 text-center py-6 px-4">
            <h2 class="font-semibold mb-1"><b>Update Udyog Aadhar/Udyam Registration</b></h2>
            <p class="text-sm text-muted">Get the Registration Number within 24 working hours</p>
        </div>  
       
        <div class="col col-lg-6 mx-auto">
            <form action="{{ route('updateReg.store') }}" method="POST">
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
                        <label class="form-label" for="udyam_reg_no">Msme/Udyog/Udyam Registration Number / उद्योग / उद्योग / एमएसएमई पंजीकरण संख्या</label>
                        <input type="text" class="form-control @error('udyam_reg_no') is-invalid @enderror" value="{{ old('udyam_reg_no') }}" name="udyam_reg_no">
                        @error('udyam_reg_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="org_name">Organization Name / संस्था का नाम</label>
                        <input type="text" class="form-control @error('org_name') is-invalid @enderror" value="{{ old('org_name') }}" name="org_name">
                        @error('org_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="type_of_org">Type Of Organization / एक प्रकार की संस्था *</label>
                        <select class="form-select @error('type_of_org') is-invalid @enderror" name="type_of_org" aria-label="Default select example">
                            <option value="propriatorship" @if(old('type_of_org') == 'propriatorship' ) selected @endif>Propriatorship </option>
                            <option value="partnership" @if(old('type_of_org') == 'partnership' ) selected @endif>Partnership</option>
                            <option value="private limite company" @if(old('type_of_org') == 'private limite company' ) selected @endif>Private limite company</option>
                            <option value="public limited company" @if(old('type_of_org') == 'public limited company' ) selected @endif>public limited company</option>
                            <option value="HUF" @if(old('type_of_org') == 'HUF' ) selected @endif>Hindu Undivided Family(HUF)</option>
                            <option value="other" @if(old('type_of_org') == 'other' ) selected @endif>other</option>

                          </select>
                        @error('type_of_org')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="updates">Updates which you want / अपडेट जो आप चाहते हैं *</label>
                        <select class="form-select @error('updates') is-invalid @enderror" name="updates" aria-label="Default select example">
                            <option value="Changes of Business/Organization Name" @if(old('updates') == 'Changes of Business/Organization Name' ) selected @endif>Changes of Business/Organization Name </option>
                            <option value="Changes of Business Address" @if(old('updates') == 'Changes of Business Address' ) selected @endif>Changes of Business Address </option>
                            <option value="Changes of Email Id/Mobile Number" @if(old('updates') == 'Changes of Email Id/Mobile Number' ) selected @endif>Changes of Email Id/Mobile Number</option>
                            <option value="Changes of Employee Details" @if(old('updates') == 'Changes of Employee Details' ) selected @endif>Changes of Employee Details</option>
                            <option value="Changes of Annual Turnover" @if(old('updates') == 'Changes of Annual Turnover' ) selected @endif>Changes of Annual Turnover </option>
                            <option value="Changes of Bank Details" @if(old('updates') == 'Changes of Bank Details' ) selected @endif>Changes of Bank Details </option>
                            <option value="other" @if(old('updates') == 'other' ) selected @endif>Any Other</option>
                          </select>
                        @error('updates')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="">
                        <textarea rows="3" class="form-control @error('decription') is-invalid @enderror" value="{{ old('decription') }}" name="decription"></textarea>
                        @error('decription')
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
