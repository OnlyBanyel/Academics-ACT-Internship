<head>
  <style>
    <?php require_once '../../vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css'; ?>
    <?php require_once '../../CSS/agriculture-style.css'; ?>  
  </style>
  <script src="../../vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
  <script><?php require_once '../../vendor/bootstrap-5.3.3-dist/js/bootstrap.min.js'; ?></script>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<script>
  jQuery(function() {
    jQuery('.header').load('../../test-header.php');
  });
</script>

<section class="header">
  <!-- Header -->
</section>

<main class="main-content">
  <section class="invisible-section">
  <div class="college-top">
  <nav class="breadcrumb">
          <a href="../../academics.php">Academics</a> &gt; <a href="#">Undergraduates</a> &gt; <span>College of Computing Studies</span>
        </nav>
    <div class="college-heading">
      <img src="../../Assets/agriculture-logo-proc.png" class="logo" alt="ccs logo">
      <h2 class="college-header">College of Agriculture</h2>
    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../Assets/agriculture1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../Assets/agriculture2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../Assets/agriculture3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
    <div class="college-info">
      <div class="entry-content-wrapper">
      <div class="entry-content">

        <h3><strong>COLLEGE GOALS</strong></h3>

        <p>As a National University/College of Agriculture in Region IX under National Agriculture and Fisheries Education System (NAFES) of Republic Act (RA) No. 8435 of AFMA, the WMSU-CA has the following goals:</p>

        <ol>
          <li>Excellent and relevant agricultural instruction in both undergraduate and graduate degree programs;</li>
          <li>Relevant and quality researches geared towards agricultural productivity and conservation of the natural resources;</li>
          <li>Appropriate and comprehensive community-based extension services to improve the quality of life;</li>
          <li>Efficient and responsive human resources for entrepreneurial undertaking; and</li>
          <li>Sustainable product development and innovation.</li>
        </ol>

        <div class="programs-offered-container">
            <h3><strong>Programs Offered</strong></h3>
            <div class="programs-offered">
              <ul>UnderGraduate Programs
                <li><a href="#bsa">BACHELOR OF SCIENCE IN AGRICULTURE</a></li>
                <li><a href="#bsft">BACHELOR OF SCIENCE IN FOOD TECHNOLOGY</a></li>
                <li><a href="#bsab">BACHELOR OF SCIENCE IN AGRIBUSINESS</a></li>
                <li><a href="#bat">BACHELOR OF AGRICULTURAL TECHNOLOGY</a></li>
              </ul>

              <ul>Graduate Programs
                <li><a href="#msa">MASTER OF SCIENCE IN AGRONOMY</a></li> 
                <li><a href="#mfp">MASTER IN FOOD PROCESSING AND MANAGEMENT</a></li> 
              </ul>
            </div>
        </div>

        <div class="undergrad-programs">
          <h3>Undergraduate Program Outcomes</h3>
          <div id="bsa" class="program-outcomes">
            <p><strong>BACHELOR OF SCIENCE IN AGRICULTURE (BSA)</strong></p>
            <ul>
              <li>To produce professionals with emerging knowledge and skills in Science and Technology in animal and crop production relevant to community and industry needs;</li>
              <li>To develop faculty and students’ potential on research activity to become managers and scientists for increased agricultural productivity;</li>
              <li>To equip faculty, students, and staff with community organizing and technology transfer skills for community developments;</li>
              <li>To develop and enhance the interest of the students to become skilled producers of sustainable agricultural products;</li>
              <li>To serve and cater students who have the learning and love to care for animals and plants, its production, and improvements.</li>
            </ul>
          </div>

          <div id="bsft" class="program-outcomes">
            <p><strong>BACHELOR OF SCIENCE IN FOOD TECHNOLOGY (BSFT)</strong></p>
            <ul>
              <li>Understand and apply basic elements of sanitation and quality assurance programs to assure food safety.</li>
              <li>Evaluate the microbiological, physical, chemical, sensory, and functional properties of food.</li>
              <li>Create new product ideas, concepts, and procedures leading to innovative food technologies.</li>
            </ul>
          </div>
        

          <div id="bsab" class="program-outcomes">
            <p><strong>BACHELOR OF SCIENCE IN AGRIBUSINESS (BSAB)</strong></p>
            <ul>
              <li>To produce competitive agribusiness entrepreneurs with knowledge and skills in business management.</li>
              <li>To equip students with appropriate business research tools applicable to current business situations.</li>
              <li>To develop students with business acumen that can assist the various stakeholders in realizing their business potentials.</li>
              <li>To train students in actual business ventures as well as in the application of management principles and modern technologies in agriculture.</li>
            </ul>
          </div>

          <div id="bat" class="program-outcomes">
            <p><strong>BACHELOR OF AGRICULTURAL TECHNOLOGY (BAT)</strong></p>
            <ul>
              <li>To equip students to become technicians and professionals with abilities needed to make practical application of theoretical knowledge.</li>
              <li>To develop and produce graduates who will become successful agribusiness operators, entrepreneurs, and managers.</li>
              <li>To equip students with appropriate knowledge and skills for community development work.</li>
              <li>To develop, establish, and sustain agricultural technology-based enterprises.</li>
              <li>To utilize appropriate agricultural technologies for dissemination and commercialization.</li>
            </ul>
          </div>
        </div>

        <div class="grad-programs">
          <h3>Graduate Program Outcomes</h3>
          <div id="msa" class="program-outcomes">
            <p><strong>MASTER OF SCIENCE IN AGRONOMY (MSA)</strong></p>
            <ul>
              <li>To equip faculty, students and staff with advance skills and approaches in community organizing and technology transfer of various R&D outputs for community development.</li>
              <li>To develop students with advance knowledge and skills as producers of sustainable agricultural systems and products, and environmental conservation.</li>
            </ul>
          </div>

          <div id="mfp" class="program-outcomes">
            <p><strong>MASTERS IN FOOD PROCESSING AND MANAGEMENT</strong></p>
            <ul>
              <li>Relate statistical principles to QMS.</li>
              <li>Plan and manage food analysis laboratory.</li>
              <li>Utilize laboratory techniques for identification of microorganisms.</li>
              <li>Utilize laboratory techniques common to basic and applied food chemistry.</li>
              <li>Be a collaborator, practice the values of integrity, commitment, and respect.</li>
              <li>Be initiative-taking, striving for continuous professional and self-improvement.</li>
            </ul>
          </div>
        </div>

      </div>

      </div>
    </div>
  </section>
</main>