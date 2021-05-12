<?php
$title = 'Events|Ashesi Tutorial Hub'; //title for header
//include header which uses title
include_once './inc/header.php';
//including navigation header
include_once './inc/nav.php';
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Find opportunities in the opportunities that have found you</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">DSC meeting</a></h5>
                <p class="fst-italic text-center">Saturday, September 26th at 3:00 pm</p>
                <p class="card-text text-center">Come and learn the use of firebase </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Math tutorial</a></h5>
                <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text text-center">Calculus, pre- calculus and college algebra</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Writing center</a></h5>
                <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text text-center">Are you looking to polish up your paper? Visit the writing center</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/events-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Programming tutorial</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text text-center">It's not about Hello World anymore, is it? Come and learn more</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

<?php //include footer
include_once './inc/footer.php'; ?>
