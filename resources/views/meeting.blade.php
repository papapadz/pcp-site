@extends('layouts.main.app')

@section('content')
<section id="intro">
    <div class="intro-container wow fadeIn" id="meet">
    @if($media->type==2)
      @include('jitsi')
    @else
      @include('video')
    @endif
    </div>
  </section>
@endsection