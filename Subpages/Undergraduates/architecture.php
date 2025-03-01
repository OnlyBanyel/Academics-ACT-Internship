<head>
<style>
  <?php require_once '../../CSS/college-pages.css'; ?>
</style>
<script src="../../vendor/jquery-3.7.1/jquery-3.7.1.min.js"></script>
</head>

<script>
  jQuery(function(){
    jQuery('.header').load('../../test-header.php');
  });
</script>

<section class="header"></section>

<main class="college-content">
    <nav class="breadcrumb">
        <a href="../../index.php">Home</a> >
        <a href="../../academics.php">Academics</a> >
        <span>College of Architecture</span>
    </nav>

    <section class="college-info">
        <h1>College of Architecture</h1>
        
        <div class="college-details">
            <h2>About the College</h2>
            <p>The College of Architecture provides cutting-edge education in architectural design and planning.</p>
            
            <h2>Programs Offered</h2>
            <ul>
                <li>Bachelor of Science in Architecture</li>
                <li>Bachelor in Landscape Architecture</li>
                <li>Master of Architecture</li>
            </ul>
            
            <h2>Facilities</h2>
            <ul>
                <li>Design Studios</li>
                <li>Digital Fabrication Lab</li>
                <li>Architecture Library</li>
                <li>Model Making Workshop</li>
            </ul>
        </div>
    </section>
</main>
