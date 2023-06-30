<x-layout title="Admin Dashboard">

    <x-slot name="navbarAdmin"></x-slot>
    
    <div class="p-5">
            @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    <div class="d-flex justify-content-center">
                    <i class="bi bi-patch-check-fill" style="color: rgba(40, 84, 48, 1); font-size: 5rem;"></i>
                    </div>
                    <p class="fw-bold fs-3 text-center">Event successfully saved!</p>
                </div>
            @endif
        <div class="row mb-2">
            @foreach ($events as $event)
                @if($event->organizer === "Bina Nusantara English Club")
                    <div class="col-3 rounded mb-5" style="height: 40vh">
                        <div class="h-50 rounded-top" style="background-color: gray">
                            <img src="/storage/images/events/{{ $event->thumbnail }}" alt="EVENT" class="rounded-top h-100 object-fit-scale w-100">
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
            
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{ route('event.edit', $event->id) }}" class="btn fw-semibold p-2 ps-2 pe-2 w-50 text-center" style="background-color: rgba(183, 207, 91, 1); border-radius: 20px; color: black;" id="greenbutton">Edit</a>
                                <a href="{{ route('event.preview', $event->id) }}" class="btn fw-semibold p-2 ps-2 pe-2 w-50 text-center" style="background-color: rgba(183, 207, 91, 1); border-radius: 20px; color: black;" id="greenbutton">Preview</a>
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn fw-semibold p-2 ps-2 pe-2 w-50 text-center" style="background-color:red; border-radius: 40px; color: white;" id="greenbutton">Delete</button>
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body fs-5 text-center">
                                        <i class="bi bi-patch-exclamation-fill" style="color: rgb(194, 0, 0); font-size: 7rem;"></i>
                                        <br>
                                        Are you sure to delete this event?
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary fw-semibold" data-bs-dismiss="modal" style="width: 10vw;">Cancel</button>
                                        <form method="POST" action="{{ route('event.delete', $event->id) }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger fw-semibold" style="width: 10vw;">Delete</button>
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endif
            @endforeach
        </div>

        <div class="d-flex justify-content-end" style="position: absolute; margin-left: 85vw; margin-top: 30vh;">
            <a href="{{ route('event.create') }}" class="btn fw-semibold p-2 text-center shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 20px; color: black;" id="greenbutton"> <i class="bi bi-plus-lg"></i> Add Event</a>
        </div>
    </div>
    
</x-layout>