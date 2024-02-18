<main oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "😐 • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section" style="height: 50vh;" data-aos="fade-up" data-aos-anchor-placement="center-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="side-head" style="text-align: center;">
            <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzdkYjliMjY5ZTNjYTE2YzczMmMyNDM3ODU3NGIyNGZiMGFiNmVmMiZlcD12MV9pbnRlcm5hbF9naWZzX2dpZklkJmN0PWc/11veH56ZK8JRzq/giphy.gif" class="img-fluid" alt="Grindin" style="margin-bottom: 20px;
    width: 200px; border-radius: 5px;">
            <h4 style="font-size: 20px; text-align: center; font-family: Pop-B;">Temporary detour in your journey. Check back shortly</h4>
          </div>
      </div>
    </div>
  </div>
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