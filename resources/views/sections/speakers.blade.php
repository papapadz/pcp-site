<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Event Speakers</h2>
      <p>Here are our speakers</p>
    </div>

    <div class="row">
      @foreach($speakers as $speaker)
        {{-- <div class="col-lg-4 col-md-6">
          <h3>{{ $speaker->name }}</a></h3>
          <p>Speaker, {{ $speaker->schedule->title }}</p>
        </div> --}}
        <div class="col-lg-4 col-md-6">
          <div class="hotel">
            <div class="hotel-img">
              <img style="width: 50px; height:50px" src="{{ url($speaker->linkedin) }}" class="img-fluid">
            </div>
            <h3>{{ $speaker->name }}</h3>
            <p>
              @if($speaker->schedules->first())
              {{ $speaker->schedules->first()->title }}
              @endif
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
