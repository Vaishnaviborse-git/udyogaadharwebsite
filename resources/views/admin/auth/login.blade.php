@extends('admin.layouts.auth')

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
                                Welcome back!
                            </h1>
                            <p class="mt-2">Login to admin panel</p>
                        </div>
                        <form action="{{route('admin.login')}}" method="POST">
                            @csrf
                            <div class="mb-5">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                       placeholder="Your email address">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"
                                       autocomplete="current-password">
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="check_example" id="check_example">
                                    <label class="form-check-label" for="check_example">
                                        Keep me logged in
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-full">
                                    Sign in
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
