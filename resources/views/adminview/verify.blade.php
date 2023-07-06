<x-layout title="Verify">
  <x-slot name="navbarAdmin"></x-slot>
    <div class="p-5">
        <p class="fs-1 fw-bold pt-2 text-center" style="color:rgba(40, 84, 48, 1)(40, 84, 48, 1)">Create an Event</p>
      <div class="d-flex justify-content-center align-items-center">
        <i class="bi bi-sliders ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid #285430; border-radius: 50px; background-color: #B7CF5B; color: white"></i>
        <div class="" style="background-color: #B7CF5B; width: 21vw; height:0.2vw"></div>
        <i class="bi bi-list-check ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #46B8FF; color: white"></i>
        <div class="" style="background-color: #46B8FF; width: 21vw; height:0.2vw"></div>
        <i class="bi bi-flag-fill ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #B5E3FF; color: white"></i>
      </div>

      <div class="d-flex gap-5 justify-content-evenly">
        <p class="fs-4 fw-semibold pe-3">Set Up</p>
        <p class="fs-4 fw-semibold pe-4" style="margin-left: 3vw; margin-right: 3vw" >Verify</p>
        <p class="fs-4 fw-semibold pe-1">Finish</p>
      </div>

        <div class="position-absolute " style="top:390px; left: 47.8vw; ">
            <i class="bi bi-triangle-fill " style="font-size: 3vw; color:rgba(244, 234, 213, 1)"></i>
        </div>
        <div class="container p-5 pt-2 rounded mt-5" style="background-color: rgba(244, 234, 213, 1)">

          <p class="d-flex justify-content-center fs-5 fw-bold pt-2">You are almost done!</p>
          <div class="d-flex justify-content-center" style="margin-top: -15px">
            <p class="fs-5 fw-semibold">Please click on</p>
            <p class="fs-5 fw-semibold" style="color: #BE2323">&nbspPreview&nbsp</p> 
            <p class="fs-5 fw-semibold">to make sure you have fill in the event details correctly.</p>
          </div>
          
          <div class="d-flex justify-content-center">
            <div class="shadow mb-3 mt-5 ps-2 pe-1" style="background-color: #CCD6A6; border-radius: 15px; border: 0px">
                <i class="d-flex justify-content-center bi bi-file-earmark-richtext pt-3 pb-3" style="font-size: 100px; color:#285430"></i>
                <a href="{{ route('event.preview', $event->id) }}" class="fs-5 fw-semibold d-flex justify-content-center" style="margin-top: -15px; margin-bottom: 8px; color:rgba(40, 84, 48, 1)">Preview</a>
            </div>
          </div>

          <div class="d-flex justify-content-end gap-4 w-100 mt-5">
            <a class="btn fw-semibold shadow" href="{{ route('event.create') }}" role="button" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Back</a>
            <a href="finish" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Next</a>
          </div>
        </div>
    </div>
  </x-layout>
