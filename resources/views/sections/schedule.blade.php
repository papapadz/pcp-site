@section('styles')
<style>
:root{
  --background-dark: #2d3548;
  --text-light: rgba(255,255,255,0.6);
  --text-lighter: rgba(255,255,255,0.9);
  --spacing-s: 8px;
  --spacing-m: 16px;
  --spacing-l: 24px;
  --spacing-xl: 32px;
  --spacing-xxl: 64px;
  --width-container: 1200px;
}

*{
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.hero-section{
  align-items: flex-start;
  display: flex;
  min-height: 100%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}

.card-grid{
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}

@media(min-width: 540px){
  .card-grid{
    grid-template-columns: repeat(2, 1fr); 
  }
}

@media(min-width: 960px){
  .card-grid{
    grid-template-columns: repeat(3, 1fr); 
  }
}

.card{
  list-style: none;
  position: relative;
}

.card:before{
  content: '';
  display: block;
  padding-bottom: 150%;
  width: 100%;
}

.card__background{
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  trsnsform: scale(1) translateZ(0);
  transition: 
    filter 200ms linear,
    transform 200ms linear;
}

.card:hover .card__background{
  transform: scale(1.05) translateZ(0);
}

.card-grid:hover > .card:not(:hover) .card__background{
  filter: brightness(0.5)  contrast(1.2) blur(20px);
}

.card__content{
  left: 0;
  padding: var(--spacing-l);
  position: absolute;
  top: 0;
}

.card__category{
  color: var(--text-light);
  font-size: 0.9rem;
  margin-bottom: var(--spacing-s);
  text-transform: uppercase;
}

.card__heading{
  color: var(--text-lighter);
  font-size: 1.4rem;
  text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
  line-height: 1;
  word-spacing: 80vw;
}

</style>
@endsection

<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>

    <ul class="nav nav-tabs" role="tablist">
      @foreach($schedules as $key => $day)
        <li class="nav-item">
          <a class="nav-link{{ $key === 1 ? ' active' : '' }}" href="#day-{{ $key }}" role="tab" data-toggle="tab">Day {{ $key }}</a>
        </li>
      @endforeach
    </ul>

    <h3 class="sub-heading">Each lecture consists of an AVP, a Question and Answer forum and Product Presentation. A 5 minute break after each lecture shall be allocated for Booth Visits. An Online Evaluation will be provided on the last day of the event.</h3>

    <div class="tab-content row justify-content-center">
      @foreach($schedules as $key => $day)
        <div role="tabpanel" class="col tab-pane fade{{ $key === 1 ? ' show active' : '' }}" id="day-{{ $key }}">
          <section class="hero-section">
            <div class="card-grid">
            @foreach($day as $schedule)
              @if(Auth::user()->role==3 || Carbon\Carbon::now()->gte(Carbon\Carbon::parse($schedule->start_time)))
                <a id="event-card-{{ $schedule->id }}" class="card" href="{{ url('event/'.$schedule->id) }}">
                  <div class="card__background" style="background-image: url({{ url('media/img/lecture-logo.jpg') }})"></div>
                <div class="card__content">
                    <p class="card__category"><time>OPEN NOW</time></p>
                    <h3 class="card__heading">{{ $schedule->title }} 
                      @if($schedule->speaker) <i>
                        @if($schedule->id!=22)
                          @if($schedule->id==13 || $schedule->id==17 || $schedule->id==18 || $schedule->id==23)
                            Moderator:
                          @else
                            Speaker:
                          @endif
                        {{ $schedule->speaker->name }}</i>
                        @endif
                      @endif 
                    </h3>  
                  </div>
                </a>
              @else
              <a style="display: none" id="event-card-{{ $schedule->id }}" class="card" href="{{ url('event/'.$schedule->id) }}">
                <div class="card__background" style="background-image: url({{ url('media/img/lecture-logo.jpg') }})"></div>
              <div class="card__content">
                  <p class="card__category"><time>OPEN NOW</time></p>
                  <h3 class="card__heading">{{ $schedule->title }} 
                    @if($schedule->speaker) <i>
                        @if($schedule->id!=22)
                          @if($schedule->id==13 || $schedule->id==17 || $schedule->id==18 || $schedule->id==23)
                            Moderator:
                          @else
                            Speaker:
                          @endif
                        {{ $schedule->speaker->name }}</i>
                        @endif
                      @endif 
                  </h3>
                  </div>
              </a>

                <a class="card" id="card-close-{{ $schedule->id }}" onclick="notyet()" href="javascript:void(0)">
                <div class="card__background" style="background-image: url(https://cdn4.vectorstock.com/i/1000x1000/71/73/clock-icon-isolated-on-grey-background-time-icon-vector-20907173.jpg)"></div>
                <div class="card__content">
                    <p class="card__category"><time>Starts at {{ \Carbon\Carbon::parse($schedule->start_time)->format("g:i A") }}</time></p>
                    <h3 class="card__heading">{{ $schedule->title }} 
                      @if($schedule->speaker) <i>
                        @if($schedule->id!=22)
                          @if($schedule->id==13 || $schedule->id==17 || $schedule->id==18 || $schedule->id==23)
                            Moderator:
                          @else
                            Speaker:
                          @endif
                        {{ $schedule->speaker->name }}</i>
                        @endif
                      @endif   
                    </h3>
                </div>
                </a>
              @endif
            @endforeach
            </div>
        </section>
        </div>
      @endforeach
    </div>
  </div>
</section>

@section('scripts')
<script>
  
  var arrayevents = []
  getevents()
  
  var checker = setInterval(showEventCard, 50000)

  function getevents() {
    $.ajax({
      url: "{{ url('ajax/get/events/today') }}"
    }).done(function(data) {
        for(val in data) {
          arrayevents.push( {
            id:data[val].id,
            time:moment(data[val].start_time)
          })
        }
    });
  }

  function showEventCard() {
    for(event in arrayevents) {
      var start = arrayevents[event].time
      
      if(moment().isSameOrAfter(start)) {
        $('#card-close-'+arrayevents[event].id).remove()
        $('#event-card-'+arrayevents[event].id).show()
        arrayevents.splice(event,1)
        if(arrayevents.length==0)
        clearInterval(checker)
      }
    }
  }

  function notyet() {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops, the event is still closed',
      showConfirmButton: false,
      timer: 1500
    })
  }
</script>
@endsection