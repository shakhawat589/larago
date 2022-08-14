<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Espire - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.ico')}}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="auth-full-height">
        <div class="row m-0">
            <div class="col p-0 auth-full-height" style="background-image: url({{asset('assets/images/others/bg-1.jpg')}});">
                <div class="d-flex justify-content-between flex-column h-100 px-5 py-3">
                    <div></div>
                    <div class="w-100 ">
                        <h1 class="display-4 text-white mb-4">Start with Espire</h1>
                        <p class="text-white lead" style="max-width: 630px;">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-white">© 2021 ThemeNate</span>
                        <div>
                            <a href="#" class="text-white text-link me-3">Legal</a>
                            <a href="#" class="text-white text-link">Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0 auth-full-height bg-white" style="max-width: 450px;">
                <div class="d-flex h-100 align-items-center p-5">
                    <div class="w-100">
                        <div class="d-flex justify-content-center mt-3">
                            <div class="text-center logo">
                                <img alt="logo" class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" style="height: 70px;">
                            </div>
                        </div>
                        <div class="mt-4">
                             <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-error-alert class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <input name="name" class="form-control" required placeholder="Name"/>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="email" type="email" required class="form-control" placeholder="Email"/>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="password" type="password" required class="form-control" placeholder="Password"/>
                                </div>
                                <div class="form-group mb-3">
                                    <input name="password_confirmation" required type="password" class="form-control" placeholder="Confirm Password"/>
                                </div>
                                <div class="form-group mb-3">
                                    
                                    <select name="country" required class="form-control" id="cars">
                                        <option value="">Select Country</option>
                                        @php
                                            $countries = json_decode(Countries::getList('en', 'json'), true);
                                        @endphp
                                        @foreach ($countries as $country)
                                            
                                        <option value="{{$country}}">{{$country}}</option>
                                        @endforeach
                                        
                                    </select>  
                                </div>
                                
                                <button type="submit" class="btn btn-primary w-100">Signup</button>
                            </form>
                            <div class="divider">
                                <span class="divider-text text-muted">or Sign up with</span>
                            </div>
                            <div class="row">
                                <div class="col px-1">
                                    <a href="{{route('google.login')}}" class="btn btn-outline-secondary w-100">
                                        <img src="{{asset('assets/images/thumbs/thumb-1.png')}}" alt="" style="max-width: 20px;">
                                    </a>
                                </div>
                                <div class="col px-1">
                                    <a href="{{route('facebook.login')}}" class="btn btn-outline-secondary w-100">
                                        <img src="{{asset('assets/images/thumbs/thumb-2.png')}}" alt="" style="max-width: 20px;">
                                    </a>
                                </div>
                                <div class="col px-1">
                                    <a href="{{route('twitter.login')}}" class="btn btn-outline-secondary w-100">
                                        <img src="{{asset('assets/images/thumbs/thumb-3.png')}}" alt="" style="max-width: 20px;">
                                    </a>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <p class="text-muted">Already have an account? <a href="{{route('login')}}">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    
    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>