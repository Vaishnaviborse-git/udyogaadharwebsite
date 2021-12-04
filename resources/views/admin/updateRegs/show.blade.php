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

<form action="{{ route('admin.updateRegs.update',['updateReg' => $updateReg]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card shadow border-0">
    
        <div class="card-body">
            <div class="row g-5">
                
                <div class="col-md-6">
                    <div class="">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status">
                            <option >Select Status</option>
                            <option value="New" @if($updateReg->status == 'New' ) selected @endif >New</option>
                            <option value="Processing" @if($updateReg->status == 'Processing' ) selected @endif>Processing</option>
                            <option value="Deliver" @if($updateReg->status == 'Deliver' ) selected @endif>Deliver</option>
                            <option value="Cancel" @if($updateReg->status == 'Processing' ) selected @endif>Cancel</option>
                          </select> 

                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-end py-4">
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
        </div>
    </div>
</form>
@endsection