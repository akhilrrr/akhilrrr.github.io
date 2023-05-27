<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Contact • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Do you think we’re <span class="iHeadBold underline-double">a good match?</span> Great!</h1>
      </div>
    </div>
  </div>
</section>
<!--  -->
<section class="section-leaf">
  <div class="container">
    <div class="row">
      
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>💌 <a class="internal-link" href="https://forms.gle/TZ6ambxdfizPfD7h8" target="_blank">Get in Touch</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>🤙 <a class="internal-link" href="https://api.whatsapp.com/send?phone=917306174397" target="_blank">Let's chat on WhatsApp</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>💬 <a class="internal-link"  href="mailto:akhilremashan@yahoo.com" target="_blank">Shoot me an email</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>💼 <a class="internal-link" href="https://www.linkedin.com/in/akhilremashan/" target="_blank">Let's connect on LinkedIn</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>🧑‍💻 <a class="internal-link" href="https://github.com/akhilrrr" target="_blank">Follow on GitHub</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
      <div class="col-md-3">
        <div class="side-para">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="display: grid; margin-top: 5px;">
                <li class="breadcrumb-item"><span>🤳 <a class="internal-link" href="https://www.instagram.com/akilxyz/" target="_blank">Follow on Instagram</a></span></li>
              </ol>
            </nav>
          </div>
      </div>
    </div>
    <!--  -->

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