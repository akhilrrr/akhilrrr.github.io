<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Music • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Work jams </h1>
      </div>
    </div>
  </div>
</section>
<!--  -->
<!-- <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <hr class="linear-hr" />
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section> -->
<!--  -->
<section class="section-leaf">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="side-para">
          <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3mhd6UXYCQYLcTGz80UWox?utm_source=generator&theme=0" width="100%" height="356" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>  
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