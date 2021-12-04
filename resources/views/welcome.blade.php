@extends('layouts.landing')

@section('content')

<div class="container-lg py-7">
    <div class="row">
        <div class="mb-7 text-center py-6 px-4">
            <h2 class="font-semibold mb-1"><b>New Aadhar Registration Form</b></h2>
            <p class="text-sm text-muted">Get the Registration Number within 24 working hours</p>
        </div>  
       
        <div class="col col-lg-6 mx-auto">
            <form action="{{ route('aadharRegistration.store') }}" method="POST">
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
                        <label class="form-label" for="gender">Gender / लिंग</label>
                          <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                            <option value="male" @if(old('gender') == 'male' ) selected @endif>Male </option>
                            <option value="female" @if(old('gender') == 'female' ) selected @endif>Female </option>
                            <option value="other" @if(old('gender') == 'other' ) selected @endif>Other</option>
                          </select> 

                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="social_category">Social Category / सामाजिक श्रेणी</label>
                        <select class="form-select @error('social_category') is-invalid @enderror" name="social_category">
                            <option value="general" @if(old('social_category') == 'general' ) selected @endif>General </option>
                            <option value="SC" @if(old('social_category') == 'SC' ) selected @endif>SC</option>
                            <option value="ST" @if(old('social_category') == 'ST' ) selected @endif>ST</option>
                            <option value="OBC" @if(old('social_category') == 'OBC' ) selected @endif>OBC</option>

                          </select>

                        @error('social_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="physically_handicapped">Physically Handicapped / शारीरिक रूप से विकलांग</label>
                        <select class="form-select @error('physically_handicapped') is-invalid @enderror" name="physically_handicapped">
                            <option value="Yes" @if(old('physically_handicapped') == 'Yes' ) selected @endif>Yes </option>
                            <option value="No" @if(old('physically_handicapped') == 'No' ) selected @endif>No </option>
                          </select>
                        @error('physically_handicapped')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="pan_card">Applicant/Organization Pan Card / आवेदक/संगठन पैन कार्ड)</label>
                        <input type="text" class="form-control @error('pan_card') is-invalid @enderror" value="{{ old('pan_card') }}" name="pan_card">
                        @error('pan_card')
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
                        <select class="form-select @error('type_of_org') is-invalid @enderror" name="type_of_org">
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
                        <label class="form-label" for="premises_address">Business Premises Address / व्यवसाय परिसर का पता</label>
                        <textarea rows="3" class="form-control @error('premises_address') is-invalid @enderror" value="{{ old('premises_address') }}" name="premises_address"></textarea>
                        @error('premises_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="GSTIN_no">GSTIN NUMBER (optional)</label>
                        <input type="text" class="form-control @error('GSTIN_no') is-invalid @enderror" value="{{ old('GSTIN_no') }}" name="GSTIN_no">
                        @error('GSTIN_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="date_of_start">Date Of Commencement Of Business / व्यवसाय प्रारंभ करने की तिथि</label>
                        <input type="date" class="form-control @error('date_of_start') is-invalid @enderror" value="{{ old('date_of_start') }}" name="date_of_start">
                        @error('date_of_start')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="bank_account_no">Current/Saving Bank Account Number(चालू/बचत बैंक खाता संख्या)</label>
                        <input type="text" class="form-control @error('bank_account_no') is-invalid @enderror" value="{{ old('bank_account_no') }}" name="bank_account_no">
                        @error('bank_account_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="IFSC_code">IFSC Code(आईएफएससी कोड)</label>
                        <input type="text" class="form-control @error('IFSC_code') is-invalid @enderror" value="{{ old('IFSC_code') }}" name="IFSC_code">
                        @error('IFSC_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="business_activity">Main Business Activity(मुख्य व्यवसाय गतिविधि)</label>
                        <select class="form-select @error('business_activity') is-invalid @enderror" name="business_activity">
                            <option value="manufacturer" @if(old('business_activity') == 'manufacturer' ) selected @endif>Manufacturer </option>
                            <option value="service provide" @if(old('business_activity') == 'service provide' ) selected @endif>Service provide </option>
                            <option value="other" @if(old('business_activity') == 'other' ) selected @endif>Other</option>
                          </select>
                        @error('business_activity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="about_product">Additional Detail About Product/Service / उत्पाद/सेवा के बारे में विवरण</label>
                        <input type="text" class="form-control @error('about_product') is-invalid @enderror" value="{{ old('about_product') }}" name="about_product">
                        @error('about_product')about_product
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="no_of_emp">Number Of Employees / कर्मचारियों संख्या</label>
                        <input type="text" class="form-control @error('no_of_emp') is-invalid @enderror" value="{{ old('no_of_emp') }}" name="no_of_emp">
                        @error('no_of_emp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="total_investment">Total Investment / कुल निवेश</label>
                        <input type="text" class="form-control @error('total_investment') is-invalid @enderror" value="{{ old('total_investment') }}" name="total_investment">
                        @error('total_investment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="gross_turnover">Gross Turnover(Per Annum) / सकल कारोबार (प्रति वर्ष)</label>
                        <input type="text" class="form-control @error('gross_turnover') is-invalid @enderror" value="{{ old('gross_turnover') }}" name="gross_turnover">
                        @error('gross_turnover')
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
