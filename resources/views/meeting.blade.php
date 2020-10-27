@extends('layouts.main.app')

@section('content')
<section id="intro">
    <div class="intro-container wow fadeIn">
    <iframe allow="camera; microphone; fullscreen; display-capture" src="{{ $url }}" 
        style="height: 100%; width: 100%; border: 0px;"></iframe>
    </div>
  </section>
@endsection