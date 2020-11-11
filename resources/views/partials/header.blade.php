<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
          {{ $settings['event_name'] }}
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Schedule</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Speakers</a></li>
        {{-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Venue</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#hotels">Hotels</a></li> --}}
        <!-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">Gallery</a></li> -->
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">Sponsors</a></li>
        <li>
          <a href="{{ url('user') }}">Dashboard 
          @if($user_pending>0)
          <span class="badge bg-success p-1">{{$user_pending}}</span>
          @endif</a>
        </li>
        {{-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li> --}}
        <li class="buy-tickets"><a href="/logout">Log Out</a></li>
      </ul>
    </nav>
  </div>
</header>
