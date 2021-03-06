@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('PCP Ilocos-Abra Chapter')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row">
      <div class="col-md-8">
        <div class="card card-nav-tabs" style="width: 100%;">
          <div class="card-header card-header-warning">
            Click Here to <b><a href="{{ url('login') }}">LOGIN!</a></b>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <img style="height: 70vmin" src="{{ asset('media/banners/banner.jpg') }}" rel="nofollow" alt="Card image cap">
          
                <p class="card-text">Philippine College of Physicians Ilocos Abra Chapter, 1st Virtual Post Graduate Course 2021, March 12 to 13, 2021</p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-nav-tabs" style="width: 20rem;">
          <div class="card-header card-header-primary">
            Technical Requirements
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Device: for better viewing experience, we recommend the use of laptops and desktops rather than mobile phones</li>
            <li class="list-group-item">Internet browsers: Google Chrome, Microsoft Edge or Safari</li>
            <li class="list-group-item">Bandwidth: it would be best to have at least 2 mbps connection for best results with live-streaming</li>
          </ul>
        </div>
        <hr>
        <div class="card card-nav-tabs" style="width: 20rem;">
          <div class="card-header card-header-danger">
            Reminders during the virtual meeting
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Please take note of the time allotted per lecture</li>
            <li class="list-group-item">Turn off your webcam and microphone</li>
            <li class="list-group-item">Wait for your turn. Queue up your questions in the Chat box or raise your hand</li>
            <li class="list-group-item">5 minute break for sponsor booth visit is allotted after each lecture</li>
            <li class="list-group-item">The chat is intended for questions addressed to the speaker</li>
          </ul>
        </div>
      </div>
  </div>
</div>
@endsection
