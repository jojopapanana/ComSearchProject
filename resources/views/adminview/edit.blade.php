<x-layout title="Edit Event">
  <x-slot name="navbarAdmin"></x-slot>
    <div class="container p-5 rounded mt-5 mb-5" style="background-color: rgba(244, 234, 213, 1)">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <h1 class="text-center fw-bold">Edit Your Event</h1>
        <div class="d-flex justify-content-center">
          <p class="fs-5 fw-semibold pt-2">Edit your event details below</p>
        </div>

          <form id="editevent" method="POST" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
            @csrf
            @method('UPDATE')
              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_name" class="form-label fw-semibold">Event Title</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="event_name" value="{{ $event->event_name }}">
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="organizer" class="form-label fw-semibold">Organizer (UKM Name)</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="organizer" value="{{ $event->organizer }}">
              </div>
              
              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_date" class="form-label fw-semibold">Event Date</label>
                  <p style="color: red">*</p>
                </div>
                <div class="d-flex w-75 align-items-center">
                  <input type="date" class="form-control" name="event_start_date" value="{{ $event->event_start_date }}">
                  <div class="m-3 " style="background-color: black; width: 4vw; height:0.2vw"></div>
                  <input type="date" class="form-control" name="event_end_date" value="{{ $event->event_end_date }}">
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="registration_date" class="form-label fw-semibold">Registration Date</label>
                  <p style="color: red">*</p>
                </div>
                <div class="d-flex w-75 align-items-center">
                  <input type="date" class="form-control" name="registration_start_date" value="{{ $event->registration_start_date }}">
                  <div class="m-3 " style="background-color: black; width: 4vw; height:0.2vw"></div>
                  <input type="date" class="form-control" name="registration_end_date" value="{{ $event->registration_end_date }}">
                </div>
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_ig1" class="form-label fw-semibold">@Instagram Account</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="event_ig1" value="{{ $event->event_ig1 }}">
              </div>

              <div class="mb-3">
                <div class="d-flex">
                  <label for="event_ig2" class="form-label fw-semibold">@Instagram Account 2</label>
                </div>
                <input type="text" class="form-control" name="event_ig2" value="{{ $event->event_ig2 }}">
              </div>

              <div class="mb-3">
                 <div class="d-flex">
                  <label for="event_ig3" class="form-label fw-semibold">@Instagram Account 3</label>
                </div>
                <input type="text" class="form-control" name="event_ig3" value="{{ $event->event_ig3 }}">
              </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="group_link" class="form-label fw-semibold">LINE/WhatsApp group link for participant</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="text" class="form-control" name="group_link" value="{{ $event->group_link }}">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="event_description" class="form-label fw-semibold">Event Description</label>
                    <p style="color: red">*</p>
                  </div>
                  <textarea class="form-control" rows="3" name="event_description">{{ $event->event_description }}</textarea>
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="line_cp" class="form-label fw-semibold">Link for contact person by LINE</label>
                  </div>
                  <input type="text" class="form-control" name="line_cp" value="{{ $event->line_cp }}">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="wa_cp" class="form-label fw-semibold">Link for contact person by WhatsApp</label>
                  </div>
                  <input type="text" class="form-control" name="wa_cp" value="{{ $event->wa_cp }}">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="thumbnail" class="form-label fw-semibold">Event Thumbnail</label>
                    <p style="color: red">*</p>
                  </div>
                  <img src="/storage/images/events/{{ $event->thumbnail }}" alt="THUMBNAIL" class="mb-4" style="width: 20vw">
                  <input type="text" class="form-control" name="thumbnail_old" value="{{ $event->thumbnail }}" hidden>
                  <input type="file" class="form-control" name="thumbnail_new">
                </div>

                <div class="mb-3">
                  <div class="d-flex">
                    <label for="poster" class="form-label fw-semibold">Event Poster</label>
                    <p style="color: red">*</p>
                  </div>
                  <img src="/storage/images/{{ $event->poster }}" alt="POSTER" class="mb-4" style="width: 20vw">
                  <input type="text" class="form-control" name="poster_old" value="{{ $event->poster }}" hidden>
                  <input type="file" class="form-control" name="poster_new">
                </div>

                <div class="d-flex justify-content-between w-100 mt-5">
                  <a class="btn fw-semibold shadow" href="/" role="button" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Cancel</a>
                  @method('PUT')
                  <button type="submit" class="btn fw-semibold shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Save</button>
                </div>
            </form>
      </div>
</x-layout>