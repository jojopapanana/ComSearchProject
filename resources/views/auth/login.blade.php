<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
        <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex" style="height: 100vh">
        <div class="col-7 text-center mt-5 pt-5">
            <img src="/storage/images/comsearchlogo.png" alt="COMSEARCH" width="150">
            <p class="fw-bold mt-2" style="font-size: 2.75rem">Login into Your Account</p>
            <p class="fw-semibold" style="font-size: 1.5625rem">Login using your ComSearch account</p>

            <div class="d-flex justify-content-center">
                <form id="login" method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="col-7">
                    @csrf
                    <div class="mb-4 mt-4">
                      <input type="text" placeholder="Email" class="p-3 form-control @error('email') is-invalid @enderror fw-semibold shadow" name="email" style="border-radius: 15px; background-color: #F4EAD5">

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    
                    <div class="mb-4">
                      <input type="password" placeholder="Password" class="p-3 form-control @error('password') is-invalid @enderror fw-semibold shadow" name="password" style="border-radius: 15px; background-color: #F4EAD5">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="d-flex justify-content-center w-100 mt-5" style="">
                      <button type="submit" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 15vw; padding: 10px">Sign In</button>
                    </div>
                  </form>
            </div>

            {{-- <div class="mt-5">
                <a href="{{ route('participant.login') }}" class="fw-semibold fs-5" style="text-decoration:none; color: rgb(143, 161, 69);">Login as Participant</a>
            </div> --}}
        </div>

        <div class="col-5" style="background: linear-gradient(to top right, rgba(255, 251, 233, 1), rgba(204, 214, 166, 1))">
            <i class="d-flex justify-content-end bi bi-circle-fill" style="margin-top: -150px; color: rgba(250, 234, 213, 0.25); font-size: 21.5625rem;"></i>
            <p class="d-flex justify-content-center fw-bold mt-5" style="font-size: 2.75rem">No Account Yet?</p>
            <p class="text-center d-flex justify-content-center fw-semibold" style="font-size: 1.5625rem">Sign up and discover a great amount of ComServe Hours activities!</p>
            <div class="d-flex justify-content-center w-100 mt-5">
              <a href="{{ route('register') }}" class="btn fw-semibold shadow" style="background-color: white; border-radius: 40px; width: 15vw; padding: 10px">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>