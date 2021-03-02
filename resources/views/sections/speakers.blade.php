<section id="speakers" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Event Speakers</h2>
      <p>Here are some of our speakers</p>
    </div>

    <div class="row">
      @foreach($speakers as $speaker)
        <div class="col-lg-4 col-md-6">
          <h3>{{ $speaker->name }}</a></h3>
          <p>{{ $speaker->description }}</p>
        </div>
      @endforeach
    </div>
  </div>

</section>
