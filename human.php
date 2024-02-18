<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Human Level • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>The <span class="iHeadBold underline-double">Human Level</span> </h1>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>
<!--  -->
<section class="section-leaf">
  <div class="container">
    <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">

        <div class="side-para">
            <p>Human-level design refers to the creation of user interfaces and experiences that emulate the cognitive and behavioral patterns of human users. It emphasizes understanding the users' natural thought processes, emotions, and behaviors, ensuring that the design aligns seamlessly with how people interact with digital interfaces.</p>
            <h5>Focus</h5>
            <ol style="list-style-type:upper-roman; color: #fff;">
              <li><p><b>User-Centric Approach:</b> Human-level design centers around the needs, preferences, and behaviors of users. It involves empathetic understanding, research, and iterative testing to create designs tailored to user requirements.</p></li>
              <li><p><b>Intuitive Interactions:</b> The focus is on crafting interfaces that users can instinctively understand and navigate without excessive cognitive effort. This involves clear layouts, straightforward navigation, and familiar interaction patterns.</p></li>
              <li><p><b>Emotional Design:</b> Acknowledging and integrating emotional responses into the design, considering factors like aesthetics, color psychology, and micro-interactions to evoke positive user emotions.</p></li>
            </ol>
            <h5>Goals</h5>
            <ol style="list-style-type:upper-roman; color: #fff;">
              <li><p><b>Optimized Usability:</b> The primary goal is to optimize the usability of the interface, ensuring that users can accomplish tasks efficiently and effectively.</p></li>
              <li><p><b>Enhanced User Satisfaction:</b> By aligning the design closely with users' expectations and mental models, the aim is to enhance user satisfaction and overall experience.</p></li>
              <li><p><b>Minimized Cognitive Load:</b>  Human-level design aims to reduce users' cognitive load by presenting information in a clear and concise manner, simplifying complex tasks, and guiding users through their interactions.</p></li>
              <li><p><b>Encouraging User Engagement:</b>  Engaging designs encourage users to interact more frequently and meaningfully with the interface, fostering a sense of connection and loyalty.</p></li>
            </ol>

        </div>
        
      </div>
    </div>
    <div class="col-md-1"></div>
    <!--  -->
  
    <!--  -->
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