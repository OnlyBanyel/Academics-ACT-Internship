<head>
    <!-- Removed reveal.js references -->
  <style>
    <?php require_once '../../vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css'; ?>
    <?php require_once '../../CSS/agriculture-style.css'; ?>
    <?php require_once '../../CSS/admissionGuide-style.css'; ?>
  </style>
  <script src="../../vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
  <script src="../../vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<script>
  jQuery(function() {
    jQuery('.header').load('<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/Academics-ACT-Internship/test-header.php'; ?>');
  });
</script>
</head>
<section class="header"></section>
<div class="intro-admission">
<h1>Admission Guide</h1>
<p>The Admission Guide for New Students can be found below, providing all the essential steps, requirements, and procedures for a smooth application process. 
  Make sure to review each section carefully to ensure you meet the necessary qualifications and deadlines.</p>
</div>
<main>

  <!-- Image Grid Gallery Section -->
  <div class="grid-gallery">
    <img src="../../Assets/admissionGuide/1.PNG" alt="Slide 1" data-slide-to="0">
    <img src="../../Assets/admissionGuide/2.PNG" alt="Slide 2" data-slide-to="1">
    <img src="../../Assets/admissionGuide/3.PNG" alt="Slide 3" data-slide-to="2">
    <img src="../../Assets/admissionGuide/4.PNG" alt="Slide 4" data-slide-to="3">
    <img src="../../Assets/admissionGuide/5.PNG" alt="Slide 5" data-slide-to="4">
    <img src="../../Assets/admissionGuide/6.PNG" alt="Slide 6" data-slide-to="5">
    <img src="../../Assets/admissionGuide/7.PNG" alt="Slide 7" data-slide-to="6">
    <div class="invisible-div"></div> <!-- Invisible div to maintain grid layout -->
    <div class="invisible-div"></div> <!-- Invisible div to maintain grid layout -->
    <div class="invisible-div"></div> <!-- Invisible div to maintain grid layout -->
  </div>

  <!-- Bootstrap Slideshow Overlay -->
  <div id="admissionGuideCarousel" class="carousel slide carousel-overlay" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../Assets/admissionGuide/1.PNG" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/2.PNG" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/3.PNG" class="d-block w-100" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/4.PNG" class="d-block w-100" alt="Slide 4">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/5.PNG" class="d-block w-100" alt="Slide 5">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/6.PNG" class="d-block w-100" alt="Slide 6">
      </div>
      <div class="carousel-item">
        <img src="../../Assets/admissionGuide/7.PNG" class="d-block w-100" alt="Slide 7">
      </div>
    </div>
    <a class="carousel-control-prev" href="#admissionGuideCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#admissionGuideCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script>
    $(document).ready(function() {
      var carousel = new bootstrap.Carousel('#admissionGuideCarousel', {
        interval: false
      });

      $('.grid-gallery img').on('click', function() {
        var slideTo = $(this).data('slide-to');
        carousel.to(slideTo);
        $('#admissionGuideCarousel').css('display', 'flex');
      });

      // Hide the carousel overlay when clicking outside of it
      $('#admissionGuideCarousel').on('click', function(e) {
        if ($(e.target).closest('.carousel-inner, .carousel-control-prev, .carousel-control-next').length === 0) {
          $(this).hide();
        }
      });
    });
  </script>
</main>

