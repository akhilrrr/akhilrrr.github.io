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
            <p>Designing products at the human level means putting the user at the center of the design process. It involves understanding how people naturally think, feel, and behave and designing products that align with those patterns. Doing so makes digital products more intuitive and easier to use, increasing user satisfaction and engagement.</p>
            <p>Consideration of cognitive load, attention span, memory, and emotions is a crucial part of designing products at the human level. UX designers must understand how users process information, retain it, and respond to it emotionally. This understanding helps them create interfaces that are easy to understand and that users can quickly navigate without being overwhelmed by information.</p>
            <p>The language and visual cues used in the product design should be familiar and meaningful to the target audience. Using clear and concise language is essential, avoiding technical jargon or unfamiliar terms. Visual cues such as icons, buttons, and colors should be consistent with users' existing mental models, making it easier for them to understand how to interact with the product. Accessibility and inclusivity are also critical considerations in designing products at a human level. The product should be prepared to be usable by everyone, regardless of their abilities. This includes providing alternative text for images, using high-contrast colors for better visibility, and offering keyboard shortcuts for users who cannot use a mouse.</p>
            <p>In summary, designing products at the human level means creating digital products that prioritize the user experience. UX designers need to consider how people naturally think, feel, and behave and design interfaces that are intuitive, easy to use, and accessible to everyone. By doing so, they can create products users enjoy using, leading to higher engagement and better outcomes.</p>
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