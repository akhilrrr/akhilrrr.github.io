<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "About Me • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Namaste, <span class="iHeadBold underline-double">I'm Akhil</span> </h1>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="section-leaf section-about">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="side-para side-para-special-border-case">
          <p>As a freelance UX designer, I aim to craft seamless and impactful user experiences that leave a lasting impression. My design philosophy revolves around placing the user at the forefront of every decision. Therefore, I thrive on conducting in-depth user research and brainstorming sessions to understand their needs and challenges. This way, I can design innovative solutions that are both functional and intuitive.</p>
          <p>My journey into the design world began during my internships as a web developer, where I worked alongside startups and small businesses from diverse backgrounds. During this time, I realized the immense value of well-designed websites and products in driving successful marketing efforts. This realization fueled my passion for user interface and experience design, and soon, I found myself immersed in creating engaging experiences that leave a lasting impact.</p>
          <p>I secured my first full-time design position at XL Technologies by designing client projects during my internship. Since then, I've continuously honed my design skills and knowledge, profoundly understanding user needs as my driving force. As a result, every project I undertake prioritizes user-friendliness while delivering visually appealing and efficient designs.</p>
          <p>If you're searching for a UX designer passionate about creating excellent user experiences and delivering high-quality designs, look no further! Let's start something great together.</p>
          <br />
          <a href="contact.php" class="btn-naked-filled">Get in touch</a>
        </div>
      </div>
      <div class="col-md-5">
                        <!-- <div class="side-para side-para-about-right">
                            <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 25px;">
                              <video class="embed-responsive-item" autoplay loop muted style="border-radius: 5px; margin-bottom: 40px; pointer-events: none;"  onloadstart="this.playbackRate = 0.75;">
                                <source src="./imagen/about/deskvid.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                            </div>
                            
                            </div> -->
                            <!-- <div class="side-para side-para-about-right">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item">✍️ UX Consulting</li>
                                  <li class="breadcrumb-item">👨‍💻 UX UI Designing</li>
                                  <li class="breadcrumb-item">💯 UX Audit</li>
                                  <li class="breadcrumb-item">❣️ Design Systems</li> 
                                  <li class="breadcrumb-item">🤖 UI Development</li>
                                  <li class="breadcrumb-item">🎯 Design Sprint</li>
                                  <li class="breadcrumb-item">🦄 DesignOps</li>
                                  <li class="breadcrumb-item">〽️ Strategy Management</li>  
                                </ol>
                              </nav>
                            </div> -->
                            <div class="side-para url-list-table">
                                      <div class="table-responsive">
                                        <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">Role</th>
                                            <th scope="col">Organization</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>UX Designer</td>
                                            <td>Manorama Online</td>
                                          </tr>
                                          <tr>
                                            <td>UX Designer</td>
                                            <td>InAppAd</td>
                                          </tr>
                                          <tr>
                                            <td>UX Designer</td>
                                            <td>Zibtek</td>
                                          </tr>
                                          <tr>
                                            <td>UX Designer</td>
                                            <td>Creative Caffeine</td>
                                          </tr>
                                          <tr>
                                            <td>UX UI Designer</td>
                                            <td>XL Technologies</td>
                                          </tr>
                                          <tr>
                                            <td>Freelance Designer</td>
                                            <td>Xtreme Marketing</td>
                                          </tr>
                                          <tr>
                                            <td>Design Volunteer</td>
                                            <td>Catchafire</td>
                                          </tr>
                                          <tr>
                                            <td>Design Intern</td>
                                            <td>Syosys</td>
                                          </tr>
                                          <tr>
                                            <td>Design Intern</td>
                                            <td>LCC</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                            </div>

      </div>
    </div>

  </div>
 
</section>
 
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
<!--  -->
<!--  -->
<!--  -->
<script>
  $(document).on('mousemove', function(e){
      $('.light').css({
        left:  e.pageX - 300,
        top:   e.pageY - 300
      });
  });

  var el = $('.js-tilt-container');

  el.on('mousemove', function(e){
    const {left, top} = $(this).offset();
    const cursPosX = e.pageX - left;
    const cursPosY = e.pageY - top;
    const cursFromCenterX = $(this).width() / 2 - cursPosX;
    const cursFromCenterY = $(this).height() / 2 - cursPosY;
    

    $(this).css('transform','perspective(500px) rotateX('+ (cursFromCenterY / 40) +'deg) rotateY('+ -(cursFromCenterX / 40) +'deg) translateZ(10px)');
    
    const invertedX = Math.sign(cursFromCenterX) > 0 ? -Math.abs( cursFromCenterX ) : Math.abs( cursFromCenterX );
    
    //Parallax transform on image
    $(this).find('.js-perspective-neg').css('transform','translateY('+ ( cursFromCenterY / 10) +'px) translateX('+ -(invertedX  / 10) +'px) scale(1.15)');

    $(this).removeClass('leave');
  });

  el.on('mouseleave', function(){
    $(this).addClass('leave');
  });
</script>