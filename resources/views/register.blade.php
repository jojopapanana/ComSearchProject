<x-layout title="Registration">
    <div class="d-flex">
      <i class="bi bi-caret-right-fill" style="font-size: 3rem; color: rgba(40, 84, 48, 1)"></i>
      <p class="fs-1 fw-bold pt-2" style="rgba(40, 84, 48, 1)">REGISTER FOR {{ $event->event_name }}</p>
    </div>
    <hr class="bg-dark border-2 border-top border-dark">
    <p class="fs-5 text-danger fw-semibold ps-5 pt-2">*Required</p>
      
      <div class="container p-5 rounded" style="background-color: rgba(244, 234, 213, 1)">
          <form method="GET" action="{{ route('registration.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <div class="d-flex">
                  <label for="participant_name" class="form-label fw-semibold">Name</label>
                  <p style="color: red">*</p>
                </div>
                <input type="text" class="form-control" name="participant_name">
              </div>
              <div class="mb-3">
                <div class="d-flex">
                  <label for="participant_nim" class="form-label fw-semibold">NIM</label>
                  <p style="color: red">*</p>
                </div>
                  <input type="text" class="form-control" name="participant_nim">
                </div>
                <div class="mb-3">
                  <div class="d-flex">
                    <label for="binusian_email" class="form-label fw-semibold">Binusian Email</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="email" class="form-control" name="binusian_email">
                </div>
                <div class="mb-3">
                  <div class="d-flex">
                    <label for="instagram_account" class="form-label fw-semibold">@Instagram Account</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="text" class="form-control" name="instagram_account">
                </div>
                <div class="mb-3">
                  <div class="d-flex">
                    <label for="following_proof1" class="form-label fw-semibold">Proof of Following Instagram Account @ {{ $event->event_ig1 }}</label>
                    <p style="color: red">*</p>
                  </div>
                  <input type="file" class="form-control" name="following_proof1">
                </div>
                @if(isset($event->event_ig2))
                    <div class="mb-3">
                    <div class="d-flex">
                      <label for="following_proof2" class="form-label fw-semibold">Proof of Following Instagram Account @ {{ $event->event_ig2 }}</label>
                      <p style="color: red">*</p>
                    </div>
                    <input type="file" class="form-control" name="following_proof2">
                  </div>
                @endif

                @if(isset($event->event_ig3))
                    <div class="mb-3">
                    <div class="d-flex">
                      <label for="following_proof3" class="form-label fw-semibold">Proof of Following Instagram Account @ {{ $event->event_ig3 }}</label>
                      <p style="color: red">*</p>
                    </div>
                    <input type="file" class="form-control" name="following_proof3">
                  </div>
                @endif

                <div class="d-flex justify-content-between w-100 mt-5">
                  <a class="btn fw-semibold" href="/" role="button" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Cancel</a>
                  <button type="submit" class="btn fw-semibold" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 10vw">Register</button>
                </div>
            </form>
      </div>
  </x-layout>