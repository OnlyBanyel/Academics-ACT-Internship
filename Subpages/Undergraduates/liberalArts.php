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
        <span>College of Liberal Arts</span>
    </nav>

    <section class="college-info">
        <h1>College of Liberal Arts</h1>
        
        <div class="college-details">
            <h2>About the College</h2>
            <p>The College of Liberal Arts offers comprehensive programs in humanities, social sciences, and arts.</p>
            
            <h2>Programs Offered</h2>
            <ul>
                <li>Bachelor of Arts in English</li>
                <li>Bachelor of Arts in Political Science</li>
                <li>Bachelor of Arts in History</li>
                <li>Bachelor of Arts in Psychology</li>
            </ul>
            
            <h2>Departments</h2>
            <ul>
                <li>Department of English</li>
                <li>Department of Social Sciences</li>
                <li>Department of Psychology</li>
                <li>Department of Languages</li>
            </ul>
        </div>
    </section>
</main>
