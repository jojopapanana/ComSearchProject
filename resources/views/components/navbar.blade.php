<nav class="navbar navbar-expand-lg p-3" style="background-color: rgba(204, 214, 166, 1)">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/storage/images/comsearchlogo.png" alt="COMSEARCH" width="100">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4 d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link fw-bold fs-5" aria-current="page" href="{{ route('event.ongoing') }}" style="color: rgba(40, 84, 48, 1)" id="navmenu">Ongoing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold fs-5" aria-current="page" href="{{ route('event.upcoming') }}" style="color: rgba(40, 84, 48, 1)" id="navmenu">Upcoming</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold fs-5" aria-current="page" href="{{ route('myevent.index') }}" style="color: rgba(40, 84, 48, 1)" id="navmenu">My Event</a>
        </li>
        <li class="nav-item ps-2 pe-2 pt-1 pb-1 d-flex align-items-center" style="background-color: rgba(164, 190, 123, 1); border-radius: 40px;">
            <i class="bi bi-person-circle ps-2 pe-2" style="color: rgba(40, 84, 48, 1); font-size: 1.5rem"></i>
            <a class="nav-link fw-bold fs-5" aria-current="page" href="#" style="color: rgba(40, 84, 48, 1)">CS</a>
        </li>
      </ul>
    </div>
  </nav>