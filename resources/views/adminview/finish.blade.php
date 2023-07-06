<x-layout title="Register Event">
  <x-slot name="navbarAdmin"></x-slot>
    <div class="p-5">
        <p class="fs-1 fw-bold pt-2 text-center" style="color:rgba(40, 84, 48, 1)(40, 84, 48, 1)">Create an Event</p>
      <div class="d-flex justify-content-center align-items-center">
        <i class="bi bi-sliders ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid #285430; border-radius: 50px; background-color: #B7CF5B; color: white"></i>
        <div class="" style="background-color: #B7CF5B; width: 21vw; height:0.2vw"></div>
        <i class="bi bi-list-check ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid #285430; border-radius: 50px; background-color: #B7CF5B; color: white"></i>
        <div class="" style="background-color: #B7CF5B; width: 21vw; height:0.2vw"></div>
        <i class="bi bi-flag-fill ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #46B8FF; color: white"></i>
      </div>

      <div class="d-flex gap-5 justify-content-evenly">
        <p class="fs-4 fw-semibold pe-3">Set Up</p>
        <p class="fs-4 fw-semibold pe-4" style="margin-left: 3vw; margin-right: 3vw" >Verify</p>
        <p class="fs-4 fw-semibold pe-1">Finish</p>
      </div>

        <div class="position-absolute " style="top:390px; left: 73.8vw">
            <i class="bi bi-triangle-fill " style="font-size: 3vw; color:rgba(244, 234, 213, 1)"></i>
        </div>
        <div class="container p-5 pt-2 rounded mt-5" style="background-color: rgba(244, 234, 213, 1)">

          <p class="d-flex justify-content-center fs-5 fw-bold pt-2">You are all set!</p>
          <div class="d-flex justify-content-center" style="margin-top: -15px">
            <p class="fs-5 fw-semibold">Your new event should be visible on the homepage once you click on</p>
            <p class="fs-5 fw-semibold" style="color: #B7CF5B">&nbspDone</p>
          </div>
          
          <div class="d-flex justify-content-center">
            <div class="mb-3 mt-5 ps-2 pe-1" style="border-radius: 15px">
                <i class="d-flex justify-content-center bi bi-check2-circle pt-3 pb-3" style="font-size: 10rem; color: #B7CF5B"></i>
            </div>
          </div>

          <div class="d-flex justify-content-end w-100 mt-5">
            <a class="btn fw-semibold shadow me-3" href="{{ route('event.verify') }}" role="button" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw"><i class="bi bi-arrow-left"></i> Back</a>
            <a href="{{ route('dashboard') }}" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Done <i class="bi bi-check2"></i></a>
          </div>
        </div>
    </div>
  </x-layout>
