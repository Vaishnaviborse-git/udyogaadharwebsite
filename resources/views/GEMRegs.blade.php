@extends('layouts.landing')

@section('content')

<div class="container-lg py-7">
    <div class="row">
        <div class="mb-7 text-center py-6 px-4">
            <h2 class="font-semibold mb-1"><b>Application for GeM Registration :</b></h2>
        </div>  
       
        <div class="col col-lg-6 mx-auto">
            <form action="{{ route('GEMReg.store') }}" method="POST">
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
                        <label class="form-label" for="phone">2. Mobile number / मोबाइल नंबर (Required) *</label>
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
                        <label class="form-label" for="org_name">5. Organisation Name / संगठन का नाम</label>
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
                        <label class="form-label" for="type_of_org">4. Type of Organisation / संगठन वर्ग</label>
                        <select class="form-select @error('type_of_org') is-invalid @enderror" name="type_of_org">
                            <option value="" >Select  </option>
                            <option value="propriatorship" @if(old('type_of_org') == 'propriatorship' ) selected @endif>Propriatorship </option>
                            <option value="partnership" @if(old('type_of_org') == 'partnership' ) selected @endif>Partnership Firm</option>
                            <option value="Hindu Undivided Family" @if(old('type_of_org') == 'Hindu Undivided Family' ) selected @endif>Hindu Undivided Family</option>
                            <option value="Co-Operative" @if(old('type_of_org') == 'Co-Operative' ) selected @endif>Co-Operative</option>
                            <option value="Limited Liability Partnership" @if(old('type_of_org') == 'Limited Liability Partnership' ) selected @endif>Limited Liability Partnership</option>
                            <option value="private limite company" @if(old('type_of_org') == 'private limite company' ) selected @endif>Private limite company</option>
                            <option value="public limited company" @if(old('type_of_org') == 'public limited company' ) selected @endif>public limited company</option>
                            <option value="Self Help Group" @if(old('type_of_org') == 'Self Help Group' ) selected @endif>Self Help Group </option>
                            <option value="Society" @if(old('type_of_org') == 'Society' ) selected @endif>Society </option>
                            <option value="Trust" @if(old('type_of_org') == 'Trust' ) selected @endif>Trust </option>

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
                        <label class="form-label" for="business_pan">6. Business Pan (If Available) / बिजनेस पैन</label>
                        <input type="text" class="form-control @error('business_pan') is-invalid @enderror" value="{{ old('business_pan') }}" name="business_pan">
                        @error('business_pan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="date_of_start">7. Date of Commencement of Business / व्यवसाय के प्रारंभ की तिथि</label>
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
                        <label class="form-label" for="business_address">8. Business Address (with Pin code) / व्यावसायिक पता (पिन कोड के साथ)</label>
                        <input type="text" class="form-control @error('business_address') is-invalid @enderror" value="{{ old('business_address') }}" name="business_address">
                        @error('business_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="IFSC_code">9. IFSC code / IFSC कोड</label>
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
                        <label class="form-label" for="bank_account_no">10. Bank Account Number / बैंक खाता संख्या</label>
                        <input type="text" class="form-control @error('bank_account_no') is-invalid @enderror" value="{{ old('bank_account_no') }}" name="bank_account_no">
                        @error('bank_account_no')bank_account_no
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="">
                        <label class="form-label" for="bank_name">11 Bank Name / बैंक का नाम</label>
                        <input type="text" class="form-control @error('bank_name') is-invalid @enderror" value="{{ old('bank_name') }}" name="bank_name">
                        @error('bank_name')
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
