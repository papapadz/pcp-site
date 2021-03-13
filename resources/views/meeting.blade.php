@extends('layouts.main.app')

@section('content')
<br><br><hr>
<div class="row schedule-title">
  <div class="col-12 container">
    <a href="{{ url('event/'.$media->event->id) }}" class="btn btn-primary float-left ml-4">
      <i class="fa fa-arrow-left"></i> Back
    </a>
    <center><h3 class="float-center"><b>{{ $media->event->title }}</b></h3></center>
  </div>
</div> 
<section id="intro">
  <div class="intro-container wow fadeIn" id="meet">
    @if($media->type==2)
      @include('jitsi')
    @else
      @include('video')
    @endif
    <a id="upNext" href="{{ $next_url }}" class="float btn next" style="height: 10vmin; display:none" >
      <span class="text-white" style="height: 10vmin"><i class="fa fa-exclamation"></i> Up next: <b>{{ $next_title }}</b></span>
    </a>
  </div>
</section>
@endsection

@section('scripts')
<script>
  var counter = parseInt('{{ $counter }}')
  var checker
    console.log(counter)
    initial()
    
    function initial() {
        if(counter>0)
            checker = setInterval(showUpNext, counter)
        else
            showUpNext()
    }

    function showUpNext() {
        var x = document.getElementById("upNext")
        x.style.display = 'block'
        clearInterval(checker)
    }
</script>
@endsection