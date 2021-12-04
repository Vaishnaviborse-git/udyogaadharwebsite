@extends('layouts.auth')

@section('content')
<div class="px-5 py-5 p-lg-0">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
            <div class="row">
                <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                    <div class="text-center mb-12">
                        <!-- <a class="d-inline-block" href="#">
                            <img src="https://preview.webpixels.io/web/img/logos/clever-primary-sm.svg" class="h-12" alt="...">

                        </a> -->
                        <span class="d-inline-block d-lg-block h1 mb-lg-6 me-3">👋</span>
                        <h1 class="ls-tight font-bolder h2">
                            Create Account
                        </h1>   
                        <p class="mt-2">Let's build someting great</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Your Name">
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}"  placeholder="Your email address">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" autocomplete="current-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password" placeholder="Confirm Password" autocomplete="current-password">
                            
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        
                        <div>
                            <button type="submit" class="btn btn-primary w-full">
                                Register
                            </button>
                        </div>
                    </form>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

