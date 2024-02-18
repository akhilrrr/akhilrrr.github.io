<main id="footer-main" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">


<?php 
  $titletag = "UX UI Designer & Developer • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr class="linear-hr" />
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-6">
        <a href="index.php" class="footer-logo">
            <img src="./imagen/nav-and-footer/logo-square.png" alt="Akhil Remashan" class="img-fluid">
        </a>
      </div>
      <div class="col-md-6">
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-2">
        <a href="index.php" class="footer-logo">
            <img src="./imagen/nav-and-footer/logo-square-crop.png" alt="Akhil Remashan" class="img-fluid">
        </a>
      </div>
      <div class="col-md-3">
          <div class="footer-grid quicklinks">
                <ul>
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      <a href="about.php">About</a>
                  </li>
                  <li>
                      <a href="case-studies.php">Case studies</a>
                  </li>
                  <li>
                      <a href="all-projects.php">All projects</a>
                  </li>
                  <li>
                      <a href="302.php">devMode</a>
                  </li>    
                  <li>
                      <a href="contact.php">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="col-md-3">
          <div class="footer-grid sociallinks">
                <ul>
                  <li>
                      <a href="https://akhilremashan.medium.com/" target="_blank">Blog</a>
                  </li> 
                  <li>
                      <a href="302.php">Download Work Jams</a>
                  </li>
                  <li>
                      <a href="human.php">Human-level design</a>
                  </li>
                  <li>
                    <a href="disclaimer.php">Disclaimers</a>
                  </li>
                  
              </ul>
          </div>
      </div>
      <div class="col-md-3">
          <div class="footer-grid sociallinks">
                <ul>
                  <li>
                      <a href="https://www.fiverr.com/share/6e27qL" target="_blank">Fiverr</a>
                  </li>
                  <li>
                      <a href="https://www.linkedin.com/in/akhilremashan/" target="_blank">LinkedIn</a>
                  </li>
                  <li>
                      <a href="https://github.com/akhilrrr" target="_blank">GitHub</a>
                  </li>
                  <li>
                      <a href="https://www.instagram.com/akilxyz/" target="_blank">Instagram</a>
                  </li>
                </ul>
          </div>
      </div>
      <div class="col-md-1">
          <div class="footer-grid otherlinks">
                <ul>
                  <li>
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a><br /></a>
                  </li>
                  <li>
                    © <script type="text/javascript">document.write(new Date().getFullYear());</script>
                  </li>
              </ul>
          </div>
      </div>
    </div>      
  </div>
  <br /><br /><br /><br />
</section>

<!--  -->



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

<!--  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>