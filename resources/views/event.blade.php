<x-layout title="My Event">
    <div class="p-5">
        @if(sizeof($events))
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                <div class="d-flex justify-content-center">
                <i class="bi bi-patch-check-fill" style="color: rgba(40, 84, 48, 1); font-size: 5rem;"></i>
                </div>
                <p class="fw-bold fs-3 text-center">You're successfully registered!</p>
                <p class="text-center">Please join the group through the link below:</p>
                <div class="d-flex justify-content-center">
                    <a href="{{ session()->get('group_link') }}" target="_blank">{{ session()->get('group_link') }}</a>
                </div>
            </div>
            @endif
            <div class="row mb-2">
                @foreach ($events as $event)
                <div class="col-3 rounded mb-5" style="height: 40vh">
                    <div class="h-50 rounded-top" style="background-color: gray">
                        <img src="/storage/images/events/{{ $event->poster }}" alt="EVENT" class="rounded-top h-100 w-100">
                    </div>
                    <div class="h-60 rounded-bottom p-3" style="background-color: rgba(218, 226, 182, 1)">
                        <p class="fs-5 fw-bold text-center">{{ $event->event_name }}</p>
        
                        <div class="d-flex gap-1 justify-content-center align-items-center">
                            <div class="d-flex gap-1">
                                <i class="bi bi-clock"></i>
                                <p class="fw-semibold text-center">{{ \Carbon\Carbon::parse($event->event_start_date)->format('M d') }} - {{ \Carbon\Carbon::parse($event->event_end_date)->format('M d Y') }}</p>
                            </div>
                        </div>
        
                        <div class="d-flex justify-content-center gap-4">
                            <a href="{{ route('event.detail', $event->id) }}" class="btn fw-semibold p-2 ps-4 pe-4 w-75 text-center shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; color: black;" id="greenbutton">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <p class="fs-1 fw-bold pt-2 text-center" style="color:rgba(40, 84, 48, 1)">NO REGISTERED EVENT YET!</p>
            <div class="d-flex justify-content-center">
                <a href="{{ route('index') }}" class="btn fw-semibold p-2 ps-4 pe-4 shadow" style="background-color: rgba(183, 207, 91, 1); border-radius: 40px; color: black;" id="greenbutton">Look for Events</a>
            </div>
        @endif
    </div>
</x-layout>