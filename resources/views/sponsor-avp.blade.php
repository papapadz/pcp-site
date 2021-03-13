@extends('layouts.main.app')

@section('content')
<br><br><hr>
<div class="row schedule-title">
  <div class="col-12 container">
    <a href="{{ url('home#supporters') }}" class="btn btn-primary float-left ml-4">
      <i class="fa fa-arrow-left"></i> Back
    </a>
    <center><h3 class="float-center"><b>{{ $sponsor->name }}</b></h3></center>
  </div>
</div> 
<section id="intro">
  <div class="intro-container wow fadeIn">
    <div class="iframe-container" style="height: 100%; width: 100%; border: 0px;">
        <iframe class="embed-responsive-item" height="100%" width="100%" src="{{ url($sponsor->url) }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  var arrayevents = []
  getevents()
  
  var checker = setInterval(showEventCard, 30000)

  function getevents() {
    $.ajax({
      url: "{{ url('ajax/get/events/today') }}"
    }).done(function(data) {
      console.log(data)
        for(val in data) {
          arrayevents.push( {
            id:data[val].id,
            time:moment(data[val].start_time),
            title:data[val].title
          })
        }
    });
  }

  function showEventCard() {
    for(event in arrayevents) {
      var start = arrayevents[event].time
      
      if(moment().isSameOrAfter(start)) {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: arrayevents[event].title+' is now open!',
            showConfirmButton: false,
            timer: 5000
          })

        arrayevents.splice(event,1)
        if(arrayevents.length==0)
        clearInterval(checker)

      }
    }
  }
</script>
@endsection