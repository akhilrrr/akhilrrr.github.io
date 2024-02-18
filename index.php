<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
<div class="alert alert-warning alert-dismissible fade show" role="alert"
  style="background-color: #6030ff; border: 0px solid transparent; border-radius: 0px;">
  🤝 Exploring fresh opportunities and open to connections, reach out to me through <a class="internal-link" href="https://api.whatsapp.com/send?phone=917306174397" target="_blank">phone</a> or <a class="internal-link"  href="mailto:akhilremashan@yahoo.com" target="_blank">email</a>
      <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background-color: #6030ff; padding: 10px;">
        <span aria-hidden="true" style="background-color: #6030ff;">&times;</span>
      </button> -->
</div>
<?php 
  $titletag = "User Experience Design Portfolio of Akhil Remashan • UX UI Designer, Developer";
  include_once('header.php');
?> 

<section class="banner-home">
  <div class="container">

    <div class="row">
      <div class="col-md-10">
        <div class="banner-right banner-center">
          <h1>
          Designing experiences that Connect on a <a href="human.php" style="color: #ffffff;"><span class="iHeadBold underline-double">Human Level</span></a>
          </h1>
          <p>
          Transforming user experiences by designing with a focus on human behavior, emotion, and connection.
          </p>
          <a href="contact.php" class="btn-naked-filled">Start a Project</a>
        </div>
      </div>
      <div class="col-md-2">
        <!-- <img data-aos="fade-in" src="./imagen/home/banner.svg" class="img-fluid" alt="Akhil doing research"> -->
      </div>
    </div>
  </div>

</section>
<!--  -->
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class="linear-hr" />
      </div>
    </div>
  </div>
</section> -->
<!--  -->
<section class="home-recent">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12" data-aos="fade-in" data-aos-duration="1000">
        <h2 class="main-sub-head">Recent projects</h2>
      </div> -->
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="2000">
        <a href="x-shopee.php" class="clickable-recents">
          <div class="recent-homeindi">
            <img data-aos="zoom-out-up" src="./imagen/home/lazada-april.png" class="img-fluid" alt="Shopee">
            <h4>In-depth analysis of Shopee's successful, seamless one-click checkout solution implementation.</h4>
            <!-- <p>Dive into an in-depth analysis of Shopee's successful, seamless one-click checkout solution implementation.</p> -->
          </div>
        </a>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <a href="x-alnassr.php" class="clickable-recents">
          <div class="recent-homeindi">
            <img data-aos="zoom-out-up" src="./imagen/home/al-april.png" class="img-fluid" alt="Al Nassr FC">
            <h4>Al Nassr FC aims to create "Nabd (نبض)" a Fan Sentiment Analysis tool, to understand and enhance fan experiences.</h4>
            <!-- <p>Corschame is a luxury hotel and resort chain based in the UK that operates vacation resorts all over popular European tourist spots.</p> -->
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a href="case-studies.php" class="btn-naked-transpa">More case studies</a>
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
            With over 6 years of experience as a seasoned UX UI designer and developer, my passion lies in crafting authentic and captivating user experiences. My expertise encompasses innovative concept creation, wireframing, user research, and design oversight. Whether it's a small project or a large-scale enterprise, I possess the skills to manage every aspect and ensure its success. Let me bring my adaptability and diverse skill set to make a meaningful impact on your next endeavor.
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