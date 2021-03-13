<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <span><img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.0-9/117987661_3436030889750849_1672591226017360843_n.jpg?_nc_cat=100&ccb=3&_nc_sid=825194&_nc_eui2=AeGbWpVofoSUojx8tCS6TGcJtDjwysqjfry0OPDKyqN-vBILf_dKagUpLeDQRO0OUW6UUj3kThcyIK5aazS9iLKO&_nc_ohc=pcgfwgJkvD4AX_q00Lm&_nc_ht=scontent.fmnl4-4.fna&oh=0200f667a5e75e948e9992fd992fdfb9&oe=606422A4"></span>
          <b style="font-size: 1.5vw">{{ $settings['event_name'] }}</b>
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
        @if(Auth::user()->role==3)
        <li>
          <a href="{{ url('user') }}">Dashboard 
          @if($user_pending>0)
          <span class="badge bg-success p-1">{{$user_pending}}</span>
          @endif</a>
        </li>
        @elseif(Auth::user()->role==2)
          @if($speakerdashboard)
            <li>
              <a href="{{ url('meeting/'.$speakerdashboard->id) }}"><span class="badge bg-danger p-1">!</span> My Session</a>
            </li>
          @endif
        @endif
        {{-- <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li> --}}
        <li class="buy-tickets"><a href="{{ url('logout') }}">Log Out</a></li>
      </ul>
    </nav>
  </div>
</header>
