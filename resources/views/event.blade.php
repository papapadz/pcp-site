@extends('layouts.main.app')

@section('styles')
<style>
@import url("https://fonts.googleapis.com/css?family=Lato:300,900");
*, :after, :before {
  box-sizing: border-box;
}
strong {
  font-weight: 900;
}

.canvas-wrapper {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
}
.canvas-wrapper .canvas + .canvas {
  margin-left: 40px;
}

.canvas {
  position: relative;
  display: block;
  width: 400px;
  height: 400px;
  padding: 20px;
  color: inherit;
  text-decoration: none;
}

.canvas_border {
  position: absolute;
  top: 40px;
  left: -40px;
  height: 100%;
  width: 100%;
  z-index: 0;
}
.canvas_border svg {
  height: 100%;
  width: 100%;
}

.rect-gradient {
  stroke-dasharray: 2000;
  stroke-dashoffset: 2000;
  -webkit-animation: erase-line 1s ease-in-out forwards;
          animation: erase-line 1s ease-in-out forwards;
}

.canvas_img-wrapper {
  position: absolute;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  -webkit-transform: rotate(-10deg) skew(-10deg);
          transform: rotate(-10deg) skew(-10deg);
  overflow: hidden;
  background: white;
}

.canvas_img {
  -webkit-transform: scale3d(0.9, 0.9, 0.9);
          transform: scale3d(0.9, 0.9, 0.9);
  opacity: .3;
  max-width: 200px;
  max-height: 200px;
}

.canvas_copy {
  position: absolute;
  bottom: 0;
  left: 85%;
  text-transform: uppercase;
  color: #dac527;
  z-index: 100;
}

.canvas_copy--left {
  left: 10%;
}

.canvas_copy_title {
  font-size: 40px;
  display: block;
  -webkit-transform: translateX(-80px);
          transform: translateX(-80px);
  -webkit-transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0s;
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0s;
  color: orangered;
}
.canvas_copy_title:nth-child(1) {
  -webkit-transition-delay: 0.1s;
          transition-delay: 0.1s;
}
.canvas_copy_title:nth-child(2) {
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}

.canvas_copy_subtitle {
  display: block;
  -webkit-transform: rotate(270deg) translateY(-100%) translateX(calc(-100% - 80px));
          transform: rotate(270deg) translateY(-100%) translateX(calc(-100% - 80px));
  -webkit-transform-origin: top left;
          transform-origin: top left;
  position: absolute;
  left: 0;
  top: 8px;
  font-size: 24px;
  font-weight: 900;
  -webkit-transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.35s;
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.35s;
}

.canvas_copy_details {
  display: block;
  -webkit-transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.14s;
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.14s;
  -webkit-transform: translateX(-80px);
          transform: translateX(-80px);
}

.canvas_border, .canvas_img-wrapper, .canvas_img {
  -webkit-transition: all 0.25s ease-in-out 0s;
  transition: all 0.25s ease-in-out 0s;
}

.canvas_border, .canvas_img-wrapper {
  -webkit-transform: rotate(-10deg) skew(-10deg);
          transform: rotate(-10deg) skew(-10deg);
}

.canvas_copy_title, .canvas_copy_subtitle, .canvas_copy_details {
  opacity: 0;
}

.canvas:hover .canvas_copy_title, .canvas:hover .canvas_copy_subtitle, .canvas:hover .canvas_copy_details, .canvas:hover .canvas_img {
  opacity: 1;
}
.canvas:hover .canvas_border, .canvas:hover .canvas_img-wrapper {
  -webkit-transform: rotate(-14deg) skew(-14deg) scale(0.96);
          transform: rotate(-14deg) skew(-14deg) scale(0.96);
}
.canvas:hover .canvas_img {
  -webkit-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1);
}
.canvas:hover .canvas_copy_title, .canvas:hover .canvas_copy_details {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.canvas:hover .canvas_copy_subtitle {
  -webkit-transform: rotate(270deg) translateY(-100%) translateX(-100%);
          transform: rotate(270deg) translateY(-100%) translateX(-100%);
}
.canvas:hover .rect-gradient {
  -webkit-animation: draw-line 3s cubic-bezier(0.19, 1, 0.22, 1) forwards;
          animation: draw-line 3s cubic-bezier(0.19, 1, 0.22, 1) forwards;
}

@-webkit-keyframes draw-line {
  from {
    stroke-dashoffset: 2000;
  }
  to {
    stroke-dashoffset: 0;
  }
}

@keyframes draw-line {
  from {
    stroke-dashoffset: 2000;
  }
  to {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes erase-line {
  from {
    stroke-dashoffset: 0;
  }
  to {
    stroke-dashoffset: 2000;
  }
}
@keyframes erase-line {
  from {
    stroke-dashoffset: 0;
  }
  to {
    stroke-dashoffset: 2000;
  }
}
@-webkit-keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@media only screen and (max-width: 1366px) {
 
 .canvas-wrapper, .float{
   transform: scale(0.8);
 }
}

@media only screen and (max-width: 1080px) {
 
 .canvas-wrapper, .float{
   transform: scale(0.75);
 }
}

@media only screen and (max-width: 1020px) {
 
 .canvas-wrapper, .schedule-title{
   transform: scale(0.7);
 }
}

@media only screen and (max-width: 900px) {
 
 .canvas-wrapper{
   transform: scale(0.55);
 }
}

@media only screen and (max-width: 750px) {
 
 .canvas-wrapper{
   transform: scale(0.5);
 }
}

@media only screen and (max-width: 640px) {
 
  .canvas-wrapper{
    transform: scale(0.45);
  }
}

@media only screen and (max-width: 600) {
 
 .canvas-wrapper{
   transform: scale(0.25);
 }
}
</style>
@endsection

@section('content')
<br><br><hr>
<div class="row schedule-title">
  <div class="col-12 container">
    <a href="{{ url('home#schedule') }}" class="btn btn-primary float-left ml-4">
      <i class="fa fa-arrow-left"></i> Back
    </a>
    <center><h3 class="float-center"><b>{{ $schedule->title }}</b></h3></center>
  </div>
</div>  
<section id="intro">
  <div class="intro-container fadeIn" id="meet">
  
    <div class="canvas-wrapper row">
      
      @foreach($schedule->media as $media)
     <div class="col-md-4 col-sm-12">
      <a href="{{ url('meeting/'.$media->id) }}" class="canvas">
        <div class="canvas_border">
          <svg>
            <defs><linearGradient id="grad-orange" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" style="stop-color:rgb(253,137,68);stop-opacity:1"></stop><stop offset="100%" style="stop-color:rgb(153,75,23);stop-opacity:1"></stop></linearGradient><linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D34F48"></stop><stop offset="100%" stop-color="#772522"></stop></linearGradient></defs>
            <rect id="rect-grad" class="rect-gradient" fill="none" stroke="url(#grad-orange)" stroke-linecap="square" stroke-width="4" stroke-miterlimit="30" width="100%" height="100%"></rect>
          </svg>
        </div>
        <div class="canvas_img-wrapper">
            <img class="canvas_img" 
            @if($media->type==1)
                src="{{ url('lib/img/video.png') }}" 
            @elseif($media->type==2)
                src="{{ url('lib/img/qanda.png') }}" 
            @else
                src="{{ url('lib/img/product.png') }}" 
            @endif
                
            alt="">
        </div>
        <div class="canvas_copy canvas_copy--left">
          {{-- <span class="canvas_copy_subtitle">Heading</span> --}}
          {{-- <strong class="canvas_copy_title">Hello</strong> --}}
          
            @if($media->type==1)
                <strong class="canvas_copy_title">Watch</strong>
                <strong class="canvas_copy_title">Video</strong>
            @elseif($media->type==2)
                <strong class="canvas_copy_title">Question &</strong>
                <strong class="canvas_copy_title">Answer</strong>
            @else
                <strong class="canvas_copy_title">Product</strong>
                <strong class="canvas_copy_title">Presentation</strong>
            @endif
          {{-- <span class="canvas_copy_details">Details and stuff</span> --}}
        </div>
      </a>
     </div>
    @endforeach
    </div>
  </div>
  @if(isset($next))
  <a href="{{ url('event/'.$next->id) }}" class="float btn next" style="height: 10vmin">
    <span class="text-white"><i class="fa fa-exclamation"></i> Up next: <b> {{ $next->title }}</b></span>
  </a>
  @endif
  <audio hidden loop controls autoplay src="{{ asset('lib/audio/bgmusic2.mp3') }}" type="audio/mpeg"></audio>
</section>
@endsection

@section('scripts')
<script>
var counter = parseInt('{{ $counter }}')
    console.log(counter)
    initial()
    
    function initial() {
        if(counter>0)
            setInterval(showUpNext, counter)
        else
            showUpNext()
    }

    function showUpNext() {
        var x = document.getElementById("upNext")
        x.style.display = 'block'
    }
</script>
@endsection