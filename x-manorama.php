<main class="indi-project-only" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Manorama Online • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <!--  -->
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Manorama Online</h1>
        <div class="side-para">
          <p style="padding-bottom: 10px;">Manorama Online, India's largest regional language news website, recently underwent a significant user experience (UX) design overhaul. The primary objective of the redesign was to enhance the website's overall user experience by improving its features, accessibility, and visual appeal.</p>
          <p style="margin-bottom: 30px;">Project website: <a href="https://www.manoramaonline.com/" class="btn-project-or-internal-link">www.manoramaonline.com</a></p>
        </div>
      </div>
      <div class="col-md-1"></div>
      <!--  -->
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <div class="side-para">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe style="border-radius: 5px;" width="" height="" src="https://miro.com/app/live-embed/uXjVMa8Xhak=/?moveToViewport=-1542,-1518,7939,3601&embedId=538524897657" frameborder="0" scrolling="no" allow="fullscreen; clipboard-read; clipboard-write" allowfullscreen></iframe>
            </div>
            <br /><br /><br />
          </div>
      </div>
      <div class="col-md-1"></div>
      <!--  -->
      
    </div>
  </div>
</section> 
<!--  -->

<!--  -->



<?php include_once('footer.php'); ?>


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