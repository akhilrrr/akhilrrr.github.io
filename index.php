<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "User Experience Design Portfolio of Akhil Remashan • UX UI Designer, Developer";
  include_once('header.php');
?> 

<section class="banner-home">
  <div class="container">

    <div class="row">
      <div class="col-md-8">
        <div class="banner-right banner-center">
          <h1>
          Experiences that Connect on a <a href="human.php" style="color: #ffffff;"><span class="iHeadBold underline-double">Human Level</span></a>
          </h1>
          <p>
          Transforming user experiences by designing with a focus on human behavior, emotion, and connection.
          </p>
          <a href="contact.php" class="btn-naked-filled">Start a Project</a>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

</section>
<!--  -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class="linear-hr" />
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="home-recent">
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-aos="fade-in" data-aos-duration="1000">
        <h2 class="main-sub-head">Recent projects</h2>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
        <a href="x-alnassr.php" class="clickable-recents">
          <div class="recent-homeindi">
            <img data-aos="zoom-out-up" src="./imagen/home/lazada-april.png" class="img-fluid" alt="AlNassr">
            <h4>Shopee Singapore</h4>
            <p>Dive into an in-depth analysis of Shopee's successful, seamless one-click checkout solution implementation.</p>
          </div>
        </a>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <a href="x-corschame.php" class="clickable-recents" target="_blank">
          <div class="recent-homeindi">
            <img data-aos="zoom-out-up" src="./imagen/home/corschame-april.png" class="img-fluid" alt="Corschame">
            <h4>Corschame Holiday</h4>
            <p>Corschame is a luxury hotel and resort chain based in the UK that operates vacation resorts all over popular European tourist spots.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a href="projects.php" class="btn-naked-transpa">Latest projects</a>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class="linear-hr" />
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="about-home">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="about-left"> </div>
      </div>
      <div class="col-md-8">
        <div class="about-right">
          <img data-aos="zoom-out-up" src="./imagen/home/unicorn.png" class="img-fluid" alt="Hello!" style="width: 110px;">
          <h3>
          With over 6+ years of experience in UX UI design and coding, I am driven to create authentic and captivating user experiences that resonate with audiences across enterprise products, websites, and applications. Whether the project is a small-scale endeavor or a grand enterprise, I am eager to contribute my expertise and ensure its success. From generating groundbreaking ideas to constructing clear wireframes, performing in-depth user research, devising innovative design flows, directing the design team and process, and building interactive prototypes, I possess the versatility and skill set to manage every aspect of a project with utmost efficiency.
          </h3>
          <a href="about.php" class="btn-naked-transpa">Keep reading</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once('footer.php');?>

</main>

<script>
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
<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip({
      selector: true,
      title: function() {
        return $(this).attr('href');
      }
    });
  });
</script>