@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-md-6 col-12 mb-3 mb-md-0">
        <!-- website_title -->
        <h1 class="h2 mb-0 ls-tight">Add Settings</h1>
    </div>
    <!-- Actions -->
    <div class="col-md-6 col-12 text-md-end">
        <div class="mx-n1">
           
        </div>
    </div>
</div>
</div>

    <form action="{{ route('admin.settings.store') }}" method="POST">
        @csrf
        <div class="card shadow border-0">
        
            <div class="card-body">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label"  for="website_title">Website Title</label>
                            <input type="text" name="website_title" placeholder="Website Title" class="form-control @error('website_title') is-invalid @enderror"
                             value="{{ isset($setting)? $setting->website_title : old('website_title')  }}" id="website_title">
                            @error('website_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label"  for="phone">Phone</label>
                            <input type="number" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" value="{{ isset($setting)? $setting->phone : old('phone') }}" id="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="">
                            <label class="form-label"  for="contact_email">Contact Email</label>
                            <input type="email" name="contact_email" placeholder="Contact Email" class="form-control @error('contact_email') is-invalid @enderror" value="{{ isset($setting)? $setting->contact_email : old('contact_email') }}" id="contact_email">
                            @error('contact_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                  
                    <div class="col-md-12">
                        <div class="">
                            <label class="form-label" for="description">Site Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"  id="description" placeholder="Site Description" rows="3">{{ isset($setting)? $setting->description : old('description') }}</textarea>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="">
                            <label class="form-label" for="address">Company Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address"  id="address" placeholder="Company Address" rows="3">{{ isset($setting)? $setting->address :old('address') }}</textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-footer text-end py-4">
                <a href="{{ route('admin.settings.index') }}" class="btn btn-sm btn-neutral me-2">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection
