<?php
  
  $title = "Courses|Ashesi Tutorial Hub"; //title for header
  //include header which uses title
  include_once("../inc/header.php");
  
  //including navigation header
  include_once("../inc/nav.php");
  session_start();

  require_once("../controller/get_courses.php");

?>
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>What course do you need to Learn?</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php
            $json_data = json_courses();

            $decoded_data = json_decode($json_data,true);
          
            foreach($decoded_data as $item) {

              echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
              <iframe width="100%" height="60%" src=';echo $item["vidUrl"]; echo" ". 'frameborder="0" allowfullscreen></iframe>
                <div class="course-content">
                  
                  <p>'; echo $item["vidTopic"];
                  echo '</p>
                  
                </div>
              </div>
            </div> <!-- End Course Item-->';
            }
          ?>


          

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->


<?php
 
  //include footer
  include_once("../inc/footer.php");
?>