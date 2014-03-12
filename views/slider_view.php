<!-- Required HTML -->
<ul class="example-orbit" data-orbit>
  <li>
    <img src="../assets/img/examples/satelite-orbit.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li>
    <!-- Add thumb nail image -->
    <img src="../assets/img/examples/andromeda-orbit.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="../assets/img/examples/launch-orbit.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul>

<!-- Outputted HTML -->
<!-- Retrieved from: http://foundation.zurb.com/docs/components/orbit.html -->
<div class="orbit-container">
  <ul data-orbit class="example-orbit orbit-slides-container">
    <li>
      <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
      <div class="orbit-caption">
        Caption One.
      </div>
    </li>
    <li class="active">
      <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
      <div class="orbit-caption">
        Caption Two.
      </div>
    </li>
    <li>
      <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
      <div class="orbit-caption">
        Caption Three.
      </div>
    </li>
  </ul>

  <!-- Navigation Arrows -->
  <a href="#" class="orbit-prev">Prev <span></span></a>
  <a href="#" class="orbit-next">Next <span></span></a>

  <!-- Slide Numbers -->
  <div class="orbit-slide-number">
    <span>1</span> of <span>3</span>
  </div>

  <!-- Timer and Play/Pause Button -->
  <div class="orbit-timer">
    <span></span>
    <div class="orbit-progress"></div>
  </div>
</div>

<!-- Bullets -->
<ol class="orbit-bullets">
  <li data-orbit-slide-number="1"></li>
  <li data-orbit-slide-number="2" class="active"></li>
  <li data-orbit-slide-number="3"></li>
</ol>