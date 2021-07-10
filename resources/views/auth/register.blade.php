<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Register</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-validate" method="POST" action='{{ route('register')  }}' aria-label="{{ __('Register') }}"  >           
                                        @csrf
                                        <div class="form-head"><h4>ADMIN</h4> </div> 
                                        <h4 class="text-primary my-4">SignUp</h4>
                                        <div class="form-group @error('name') is-invalid @enderror">
                                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Enter your name here" >

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> 
                                       
                                        <div class="form-group @error('email') is-invalid @enderror">
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email here">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                       
                                        <div class="form-group @error('password') is-invalid @enderror">

                                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password here">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>

                                      
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Register</button>
                                    </form>
                                    <p class="mb-0 mt-3">Already have an account? <a href="{{url('/login')}}">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start JS -->        
     <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <!-- Switchery js -->
    <!-- Input Mask js -->
    <script src="/assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="/assets/js/custom/custom-form-inputmask.js"></script>
    <script src="/assets/plugins/validatejs/validate.min.js"></script>

    <script src="/assets/js/custom/custom-validate.js"></script>
    <script src="/assets/js/custom/custom-form-validation.js"></script>
    <!-- Core js -->
</body>
</html>