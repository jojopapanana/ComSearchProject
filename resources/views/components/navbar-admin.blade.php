<nav class="navbar navbar-expand-lg p-3 fixed-top" style="background-color: rgba(204, 214, 166, 1)">
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
            <a class="nav-link fw-bold fs-5" aria-current="page" href="{{ route('dashboard') }}" style="color: rgba(40, 84, 48, 1)" id="navmenu">My Event</a>
        </li>
        <li class="nav-item ps-2 pe-2 pt-1 pb-1 d-flex align-items-center" style="background-color: rgba(164, 190, 123, 1); border-radius: 40px;">
            <i class="bi bi-person-circle ps-2 pe-2" style="color: rgba(40, 84, 48, 1); font-size: 1.5rem"></i>
            <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('login') }}" style="color: rgba(40, 84, 48, 1);">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('register') }}" style="color: rgba(40, 84, 48, 1);">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: rgba(40, 84, 48, 1);">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"  style="background-color: rgba(164, 190, 123, 1); border-radius: 40px;">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"  style="background-color: rgba(164, 190, 123, 1); border-radius: 40px;">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            {{-- <a class="nav-link fw-bold fs-5" aria-current="page" href="{{ route('participant.login') }}" style="color: rgba(40, 84, 48, 1)">Login</a> --}}
        </li>
      </ul>
    </div>
  </nav>