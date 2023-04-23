<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Projects • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Recent <span class="iHeadBold underline-double">projects</span></h1>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="projindi-proj">
  <div class="container">
    <div class="row">
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/manorama-april.png" class="img-fluid" alt="Manorama Online">
          <h4>Manorama Online</h4>
          <p>India's largest regional language news website in Malayalam.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">UX Research</li>  
              <li class="breadcrumb-item">Miro</li>
              <li class="breadcrumb-item">Figma</li>    
              <li class="breadcrumb-item">Wireframe</li> 
          </ol>
          <a href="x-manorama.php" class="position-relative badge-url" >
            About my role
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
              Access required
            </span>
          </a>
        </div>
      </div>
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/corschame-april.png" class="img-fluid" alt="Auli">
          <h4>Corschame Holiday</h4>
          <p>Award-winning Corschame Holiday & Resorts are reinventing the all-inclusive luxury vacations.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">Mobile Application</li>
              <li class="breadcrumb-item">UX UI</li>
              <li class="breadcrumb-item">Figma</li> 
              <li class="breadcrumb-item">Prototype</li> 
          </ol>
          <a href="x-corschame.php" class="btn-naked position-relative">explore project</a>
        </div>
      </div>
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/al-april.png" class="img-fluid" alt="SoundCloud">
          <h4>Al Nassr Virtual World</h4>
          <p>Virtual reality experience that would allow fans to immerse themselves in the world of the club.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">Virtual reality</li>  
              <li class="breadcrumb-item">UX design</li>
              <li class="breadcrumb-item">Figma</li>
              <li class="breadcrumb-item">Immersive experience</li>
          </ol>
          <!-- <a href="x-alnassr.php" class="btn-naked position-relative">explore project</a> -->
          <a style="color: #ccc;" class="disabled">Coming soon..</a>
        </div>
      </div>
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/caracal-april.png" class="img-fluid" alt="SoundCloud">
          <h4>Caracal</h4>
          <p>Case study on rebranding Caracal, a digital marketing agency based in India.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">Branding</li>  
              <li class="breadcrumb-item">Adobe Illustrator</li>
          </ol>
          <a href="x-caracal.php" class="btn-naked position-relative">explore project</a>
        </div>
      </div>
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/aubil-april.png" class="img-fluid" alt="Aubi">
          <h4>Aubi</h4>
          <p>Real-time translation application designed for flawless conversations.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">WearOS</li> 
              <li class="breadcrumb-item">Wearable technology</li>  
              <li class="breadcrumb-item">Figma</li>
              <li class="breadcrumb-item">User interface</li>
          </ol>
          <a href="x-aubi.php" class="btn-naked position-relative">explore project</a>
        </div>
      </div>
      <!--  -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
        <div class="projindi-grid22">
          <img src="./imagen/project-main/inboxhero-april.png" class="img-fluid" alt="Rapide KDS">
          <h4>Nimbus</h4>
          <p>Nimbus is a style guide that establishes a shared vocabulary for the UI patterns used in InboxHero.</p>
          <ol class="breadcrumb">
              <li class="breadcrumb-item">Style guide</li>    
              <li class="breadcrumb-item">UI patterns</li>
              <li class="breadcrumb-item">UXpin</li>       
          </ol>
          <!-- <a href="x-rapide.php" class="btn-naked position-relative">View case study</a> -->
          <a style="color: #ccc;" class="disabled">Coming soon..</a>
        </div>
      </div>
      <!--  -->
      
      <!--  -->

      <!--  -->

      <!--  -->
      <div class="col-md-12">
          <a href="gig-index.php" class="btn-naked-transpa" style="float: left;">All Projects</a>
      </div>
      <!--  -->
      
  <!--  -->
  <!--  -->
  <!--  -->
  <!--  -->
  <!--  -->
</section>
<!--  -->

<?php include_once('footer.php');?>

</main>

<script>
  /* To Disable Inspect Element */ 
  $(document).bind("contextmenu",function(e) { e.preventDefault(); });
  $(document).keydown(function(e){ if(e.which === 123){ return false; } });
</script>
<script>
  document.onkeydown = function(e) {
      if(event.keyCode == 123) { return false; } 
      if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){ return false; }
      if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){ return false; }
  }
</script>