<div class="container-fluid" style="">
      <div class="d-flex">

        <div class="p-5 text-center col-7">
          <img src="/storage/images/comsearchlogo.png" alt="COMSEARCH" width="150">
          <p class="fw-bold" style="font-size: 2.75rem">Login into Your Account</p>
        </div>
        {{-- <div class="flex-grow-1" style="margin-top: -30px">
          <div class="d-flex justify-content-center">
            
          </div>
          <div class="d-flex justify-content-center" style="margin-top: 60px; margin-bottom: -15px">
            <p class="fw-bold" style="font-size: 2.75rem">Login into Your Account</p>
          </div>
          <div class="d-flex justify-content-center">
            <p class="fw-semibold" style="font-size: 1.5625rem">Login using your ComSearch account</p>
          </div>
          <div class="d-flex justify-content-center">
            <div class="container col-8">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form id="login" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 mt-4">
                  <input type="text" placeholder="Email" class="p-3 form-control fw-semibold shadow" name="" style="border-radius: 15px; background-color: #F4EAD5">
                </div>
                <div class="mb-4">
                  <input type="password" placeholder="Password" class="p-3 form-control fw-semibold shadow" name="" style="border-radius: 15px; background-color: #F4EAD5">
                </div>
                <div class="d-flex justify-content-center w-100 mt-5" style="">
                  <button type="submit" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 15vw; padding: 10px">Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div style="flex-basis: 35%; position: relative; overflow: hidden; margin-top: -98px; background: linear-gradient(to top right, rgba(255, 251, 233, 1), rgba(204, 214, 166, 1))">
          <i class="d-flex justify-content-end bi bi-circle-fill" style="margin-top: -150px; margin-right: -50px; color: rgba(250, 234, 213, 0.25); font-size: 21.5625rem;"></i>
          <div class="d-flex justify-content-end pt-4">
            <img src="/storage/images/Vector.png" alt="TREE" style="width: 90%">
          </div>
          <div class="position-absolute top-50 start-50 translate-middle" style="width: 90%">
            <p class="d-flex justify-content-center fw-bold" style="font-size: 2.75rem; margin-top: 120px">No Account Yet?</p>
            <p class="text-center d-flex justify-content-center fw-semibold" style="font-size: 1.5625rem">Sign up and discover a great amount of ComServe Hours activities!</p>
            <div class="d-flex justify-content-center w-100 mt-5" style="margin-bottom: 100px">
              <button type="submit" class="btn fw-semibold shadow" style="background-color: white; border-radius: 40px; width: 15vw; padding: 10px">Sign Up</button>
            </div>
          </div>
        </div> --}}
      </div>
    </div>