@extends('layouts.main.app')

@section('content')
@include('sections.intro')

<main id="main">
  @include('sections.about')

  @include('sections.schedule')

  @include('sections.speakers')
  
  {{-- @include('sections.venues') --}}

  {{-- @include('sections.hotels') --}}

  <!-- @include('sections.gallery') -->

  @include('sections.sponsors')

  {{-- @include('sections.faq') --}}

  {{-- @include('sections.subscribe') --}}

  {{-- @include('sections.buy_ticket') --}}

  {{-- @include('sections.contact') --}}
</main>
@endsection