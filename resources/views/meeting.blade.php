@extends('layouts.main.app')

@section('content')
<br><br><hr>
<div class="row schedule-title">
  <div class="col-12 container">
    <a href="{{ url('home#schedule') }}" class="btn btn-primary float-left ml-4">
      <i class="fa fa-arrow-left"></i> Back
    </a>
    <center><h3 class="float-center"><b>adasdasdsa</b></h3></center>
  </div>
</div> 
<section id="intro">
  <div class="intro-container wow fadeIn" id="meet">
    @if($media->type==2)
      @include('jitsi')
    @else
      @include('video')
    @endif
    <a href="{{ $next_url }}" class="float btn next" style="height: 10vmin">
      <span class="text-white"><i class="fa fa-exclamation"></i> Up next: <b>{{ $next_title }}</b></span>
    </a>
  </div>
</section>
@endsection

@section('script')
@endsection