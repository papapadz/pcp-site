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