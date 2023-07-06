<x-layout title="Detail">
  <x-slot name="navbar"></x-slot>
    <div class="d-flex">
      <img src="/storage/images/{{ $event->poster }}" alt="EVENT" style="heigh:100vh; width: 45vw">

      <div class="d-flex pt-3 ps-4">
  
        <div class="p-3" style="width: 50vw">
  
          <i class="bi bi-caret-right-fill" style="font-size: 3rem; color: rgba(40, 84, 48, 1)"></i>
          <p class="fs-1 fw-bold pt-2 ps-4 d-inline-block" style="color: rgba(40, 84, 48, 1)">Details</p>
          <hr class="bg-dark border-2 border-top border-dark mt-0">
  
          <div class="fw-semibold text-center d-flex align-items-center justify-content-center" style="font-size: 2.1875rem">
            <p class="d-flex pe-3 fw-bold">{{ $event->event_name }}
              @if(Carbon\Carbon::now() >= $event->registration_start_date && Carbon\Carbon::now() <= $event->registration_end_date)
                <p class="shadow fw-semibold ps-5 pe-5 mt-2" style="padding: 0.2rem 0rem; background-color: rgba(38, 184, 70, 1); border-radius:40px; color:white; font-size: 0.9rem">Ongoing</p>
              @else
                <p class="shadow fw-semibold ps-5 pe-5 mt-2" style="padding: 0.2rem 0rem; background-color: rgba(38, 73, 254, 1); border-radius:40px; color:white; font-size: 0.9rem">Upcoming</p>
              @endif
            </p>
          </div>
  
          <div class="p-4 rounded d-flex flex-column align-items-left" style="background-color: #F4EAD5">
              <div class="d-flex">
                <i class="bi bi-person-lock ms-4" style="font-size: 2.5rem"></i>
                <p class="fw-semibold ms-4 mt-3 d-inline-block" style="font-size: 1.5625rem">{{ $event->organizer }}</p>
              </div>
              <div class="d-flex">
                <i class="bi bi-clock ms-4" style="font-size: 2.5rem"></i>
                <p class="fw-semibold ms-4 mt-3 d-inline-block" style="font-size: 1.5625rem">{{ \Carbon\Carbon::parse($event->event_start_date)->format('M d') }} - {{ \Carbon\Carbon::parse($event->event_end_date)->format('M d Y') }}</p>
              </div>
          </div>
  
          <div class="pt-3">
              <p class="fw-semibold" style="font-size: 1.875rem">Description</p>
              <p style="font-size: 1.3rem">{{ $event->event_description }}</p>
          </div>
  
          <div class="pt-3">
              <p class="fw-semibold" style="font-size: 1.875rem">Contact Person</p>
              <a href="https://line.me/en/"><i class="bi bi-line" style="border-radius: 8px; padding: 0.1rem 0.5rem; background-color: #06c755; color: #FFFFFF; font-size: 2.5rem"></i></a>
              <a href="https://www.whatsapp.com/"><i class="bi bi-whatsapp ms-4" style="font-size: 2.5rem; border-radius: 8px; padding: 0.05rem 0.4rem 0.2rem 0.5rem; background-color: #60d669; color: #FFFFFF;"></i></a>
          </div>
  
          <div class="d-flex justify-content-center gap-4">
              @if(Carbon\Carbon::now() >= $event->registration_start_date && Carbon\Carbon::now() <= $event->registration_end_date)
                <a href="{{ route('registration.show', $event->id) }}" class="btn shadow-sm fw-semibold p-2 ps-4 pe-4 shadow" style="margin-top: 30px; background-color: rgba(183, 207, 91, 1); border-radius: 40px; width: 100%; color: black;">Register</a>
              @else
                <a href="" class="btn shadow-sm fw-semibold p-2 ps-4 pe-4" style="margin-top: 30px; background-color: #D9D9D9; border-radius: 40px; width: 100%; color: white;">Not Available Yet</a>
              @endif
          </div>
        </div>
      </div>
    </div>
</x-layout>