<?php
  session_start();
  include('admin/vendor/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>
<!--End Navigation-->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('vendor/img/ptc.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/ptc2.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/ptc3.jpg')">
        </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
  <div class="container mt-4 mb-3">
    <div class="row">
      <div class="col-lg-6">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6eb_ZD2Uou4?si=ArXJnBf1GXa74gzF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="col-lg-6">
        <h2>About Us</h2>
        <p>
        Welcome to ResearchCon, your premier academic consultation scheduler designed to streamline the process of connecting students with research paper advisers. ResearchCon offers a user-friendly platform that simplifies the appointment booking process, allowing students to efficiently schedule meetings with their academic mentors. With ResearchCon, you can easily view adviser availability, book appointments, and optimize your research paper advising experience. Experience the convenience and effectiveness of ResearchCon as you navigate your scholarly pursuits and receive personalized guidance from your dedicated academic advisers.
        </p>
      </div>
    </div>
  </div>
 

  <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>
  <!--.Footer-->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
