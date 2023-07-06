<x-layout title="Register Event">
  <x-slot name="navbarAdmin"></x-slot>
  <div class="p-5">
      <p class="fs-1 fw-bold pt-2 text-center" style="color:rgba(40, 84, 48, 1)(40, 84, 48, 1)">Create an Event</p>
    <div class="d-flex justify-content-center align-items-center">
      <i class="bi bi-sliders ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #46B8FF; color: white"></i>
      <div class="" style="background-color: #46B8FF; width: 21vw; height:0.2vw"></div>
      <i class="bi bi-list-check ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #B5E3FF; color: white"></i>
      <div class="" style="background-color: #46B8FF; width: 21vw; height:0.2vw"></div>
      <i class="bi bi-flag-fill ps-4 pe-4 pt-3 pb-3 fs-1" style="border: 3px solid rgba(0, 130, 210, 1); border-radius: 50px; background-color: #B5E3FF; color: white"></i>
    </div>

    <div class="d-flex gap-5 justify-content-evenly">
      <p class="fs-4 fw-semibold pe-3">Set Up</p>
      <p class="fs-4 fw-semibold pe-4" style="margin-left: 3vw; margin-right: 3vw" >Verify</p>
      <p class="fs-4 fw-semibold pe-1">Finish</p>
    </div>

      <div class="position-absolute " style="top:380px; left:20vw;">
          <i class="bi bi-triangle-fill " style="font-size: 3vw; color:rgba(244, 234, 213, 1)"></i>
      </div>
      <div class="container p-5 rounded mt-5" style="background-color: rgba(244, 234, 213, 1)">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <div class="d-flex justify-content-center">
          <p class="fs-5 fw-semibold pt-2">Set up all your event details!</p>
          <p class="fs-5 text-danger fw-semibold ps-2 pt-2">*Required</p>
        </div>

          <form id="createevent" method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_name" class="form-label fw-semibold">Event Title</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="event_name">
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="organizer" class="form-label fw-semibold">Organizer (UKM Name)</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="organizer">
              </div>
              
              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_date" class="form-label fw-semibold">Event Date</label>
                  <p style="color: red">*</p>
                </div>
                <div class="d-flex w-75 align-items-center">
                  <input type="date" class="form-control" name="event_start_date">
                  <div class="m-3 " style="background-color: black; width: 4vw; height:0.2vw"></div>
                  <input type="date" class="form-control" name="event_end_date">
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="registration_date" class="form-label fw-semibold">Registration Date</label>
                  <p style="color: red">*</p>
                </div>
                <div class="d-flex w-75 align-items-center">
                  <input type="date" class="form-control" name="registration_start_date">
                  <div class="m-3 " style="background-color: black; width: 4vw; height:0.2vw"></div>
                  <input type="date" class="form-control" name="registration_end_date">
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_ig1" class="form-label fw-semibold">@Instagram Account</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="event_ig1">
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_ig2" class="form-label fw-semibold">@Instagram Account 2</label>
                </div>
                <input type="text" class="form-control" name="event_ig2">
              </div>

              <div class="mb-3">
                 <div class="d-flex">
                  <label for="event_ig3" class="form-label fw-semibold">@Instagram Account 3</label>
                </div>
                <input type="text" class="form-control" name="event_ig3">
              </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="group_link" class="form-label fw-semibold">LINE/WhatsApp group link for participant</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="text" class="form-control" name="group_link">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="event_description" class="form-label fw-semibold">Event Description</label>
                    <p style="color: red">*</p>
                  </div>
                  <textarea class="form-control" rows="3" name="event_description"></textarea>
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="line_cp" class="form-label fw-semibold">Link for contact person by LINE</label>
                  </div>
                  <input type="text" class="form-control" name="line_cp">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="wa_cp" class="form-label fw-semibold">Link for contact person by WhatsApp</label>
                  </div>
                  <input type="text" class="form-control" name="wa_cp">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="thumbnail" class="form-label fw-semibold">Event Thumbnail</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="file" class="form-control" name="thumbnail">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="poster" class="form-label fw-semibold">Event Poster</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="file" class="form-control" name="poster">
                </div>

                <div class="d-flex justify-content-between w-100 mt-5">
                  <a class="btn fw-semibold shadow" href="/" role="button" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Cancel</a>
                  <button type="submit" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Next</button>
                </div>
            </form>
      </div>
  </div>
</x-layout>
