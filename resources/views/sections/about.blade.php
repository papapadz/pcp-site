<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>About The Event</h2>
        <p>{{ $settings['about_description'] ?? '' }}</p>
        <p><b>Course Title: I.M. MOVING FORWARD</b></p>
        <p><b>Course Description:</b> The course will serve as the scientific program for the 2021 Post graduate course by the PCP ILOCOS ABRA CHAPTER. It consists of series of lectures to equip its members and general medical practitioners with recent knowledge and updates on various fields of medicine that will further enhance patient care and management, in the midst of this pandemic.</p>
        <p><b>Course Objectives:</b></p>
        <p>
          <ul>
            <li>To equip with knowledge on recent medical challenges.</li>
            <li>To provide updates on the appropriate management of diseases in the field of internal medicine.</li>
            <li>To recognize indications of recent advancement in medicine.</li>
            <li>To help improve management of disease for better health care services. </li>
          </ul>
        </p>
      </div>
      <div class="col-lg-3">
        <h3>Where</h3>
        <p>{!! $settings['about_where'] ?? '' !!}</p>
      </div>
      <div class="col-lg-3">
        <h3>When</h3>
        <p>{!! $settings['about_when'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section>
