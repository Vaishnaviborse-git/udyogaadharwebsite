@extends('layouts.landing')

@section('content')


<div class="container-lg py-7">
    <div class="row">
        <div class="mb-7 text-center py-6 px-4">
            <h2 class="font-semibold mb-1"><b>New Gst Registration Form</b></h2>
            <p class="text-sm text-muted">Get the Registration Number within 24 working hours</p>
        </div>  
       
        <div class="col col-lg-6 mx-auto">
            <form action="{{ route('GSTReg.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          <div class="card py-10 px-10">
            <div class="row g-5">
                
               
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" name="name">1. Applicant Name / आवेदक का नाम (Required) *</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="phone">2. Mobile Number / मोबाइल संख्या (Required) *</label>
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
                        <label class="form-label" for="email">3. Email Id / ईमेल आईडी (Required) *</label>
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
                        <label class="form-label" for="org_name">4. Organization Name / संस्था का नाम</label>
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
                        <label class="form-label" for="about_business">5. Additional Details about Business / व्यवसाय के बारे में अतिरिक्त विवरण</label>
                        <input type="text" class="form-control @error('about_business') is-invalid @enderror" value="{{ old('about_business') }}" name="about_business">
                        @error('about_business')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="constitution_of_business">6. Constitution Of Business / व्यवसाय का संविधान (Required) *</label>
                        <select class="form-select @error('constitution_of_business') is-invalid @enderror" name="constitution_of_business" aria-label="Default select example">
                            <option value="">Select </option>
                            <option value="propriatorship" @if(old('constitution_of_business') == 'propriatorship' ) selected @endif>Propriatorship </option>
                            <option value="partnership" @if(old('constitution_of_business') == 'partnership' ) selected @endif>Partnership</option>
                            <option value="private limite company" @if(old('constitution_of_business') == 'private limite company' ) selected @endif>Private limite company</option>
                            <option value="public limited company" @if(old('constitution_of_business') == 'public limited company' ) selected @endif>public limited company</option>
                            <option value="one person company" @if(old('constitution_of_business') == 'one person company' ) selected @endif>One Person Company</option>
                            <option value="HUF" @if(old('constitution_of_business') == 'HUF' ) selected @endif>Hindu Undivided Family(HUF)</option>
                            <option value="other" @if(old('constitution_of_business') == 'other' ) selected @endif>other</option>

                          </select>
                        @error('constitution_of_business')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="pan_card_no">7. Applicant / Organization Pan Card / आवेदक/संगठन पैन कार्ड (Required) *</label>
                        <input type="text" class="form-control @error('pan_card_no') is-invalid @enderror" value="{{ old('pan_card_no') }}" name="pan_card_no">
                        @error('pan_card_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="premises_address">8. Address of Business Premises / व्यावसायिक परिसर का पता (Optional)</label>
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
                        <label class="form-label" for="electricity_bill">9. Electricity Bill</label>
                        <input type="file" class="form-control @error('electricity_bill') is-invalid @enderror" value="{{ old('electricity_bill') }}" name="electricity_bill">
                        @error('electricity_bill')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="pan_card">10. Pan Card</label>
                        <input type="file" class="form-control @error('pan_card') is-invalid @enderror" value="{{ old('pan_card') }}" name="pan_card">
                        @error('pan_card')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                
                

                

                
              
                

                <div class="col-md-12">
                    <input class="form-label" type="checkbox" name="check_example" id="check_example">
                    <label class="form-label" for="check_example">
                        I hereby declare that information provided in registration form is true to the best of my
                         knowledge and I accept terms & conditions,disclaimer and refund policies by clicking "Proceed" button.
                    </label>
                </div>
            </div>
          
            <hr class="mt-7 mb-7" />
            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Proceed and Pay Securely</button>
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
