<x-layout title="Home">
    <div class="row mb-2">
        @foreach ($events as $event)
        <div class="col-3 rounded mb-5" style="height: 40vh">
            <div class="h-50 rounded-top" style="background-color: gray">
                <img src="/storage/images/{{ $event->picture }}" alt="EVENT" class="rounded-top" style="height: 20vh; width: 21.8vw">
            </div>
            <div class="h-60 rounded-bottom p-3" style="background-color: rgba(218, 226, 182, 1)">
                <p class="fs-5 fw-bold text-center">{{ $event->event_name }}</p>

                <div class="d-flex gap-1 justify-content-center align-items-center">
                    <div class="d-flex gap-1">
                        <i class="bi bi-clock"></i>
                        <p class="fw-semibold text-center">{{ \Carbon\Carbon::parse($event->event_start_date)->format('M d') }} - {{ \Carbon\Carbon::parse($event->event_end_date)->format('M d Y') }}</p>
                    </div>

                    @if(Carbon\Carbon::now() >= $event->registration_start_date && Carbon\Carbon::now() <= $event->registration_end_date)
                        <p class="shadow fw-semibold p-1" style="background-color: rgba(38, 184, 70, 1); border-radius:40px; color:white; font-size: 0.7rem">Ongoing</p>
                    @else
                        <p class="shadow fw-semibold p-1" style="background-color: rgba(38, 73, 254, 1); border-radius:40px; color:white; font-size: 0.7rem">Upcoming</p>
                    @endif
                </div>

                <div class="d-flex justify-content-center gap-4">
                    @if(Carbon\Carbon::now() >= $event->registration_start_date && Carbon\Carbon::now() <= $event->registration_end_date)
                        <a href="{{ URL::to('registration/' . $event->id) }}" class="btn fw-semibold p-2 ps-4 pe-4" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; color: black;" id="greenbutton">Register</a>
                        <a href="" class=" btn fw-semibold p-2 ps-4 pe-4" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; text-decoration: none; color: black;" id="greenbutton">Details</a>
                    @else
                        <a href="" class="btn fw-semibold p-2 ps-4 pe-4 w-75 text-center" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; color: black;" id="greenbutton">Details</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>