<main class="indi-project-only" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "SoundCloud • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container-fluid">
    <div class="row">
      <!--  -->
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h1>SoundCloud</h1>
        <div class="side-para">
          <p style="padding-bottom: 50px;">SoundCloud is an online audio distribution platform enabling users to upload, promote and share their originally-created sounds. Millions of people worldwide use SoundCloud’s mobile application; this UX case study aims to evaluate the usability of the SoundCloud mobile application on Android and identify areas for improvement.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
      <!--  -->
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-para">
          <img src="./imagen/proj-inner/soundcloud/scmain.png" class="img-fluid" alt="SoundCloud"  style="width: 100%">
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section> 
<!--  -->
<section class="section-leaf">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-para">
          <p>SoundCloud has proven its longevity, serving as a reliable platform for over ten years to stream, create, and share audio and music. However, despite its stability, the mobile application's interface and user experience have slightly improved since its initial release. At the same time, competitors continue to enhance their designs to maintain their competitive edge. This case study delves into the current state of the SoundCloud application's user experience and interface to improve the discoverability of audio and music.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-head">
            <h4>Research</h4>
        </div>
        <div class="side-para">
          <p>We conducted user interviews and surveys and analyzed user data to understand the user's needs and behaviour. Based on the research, we found the following insights:</p>
          <ul>
              <li><p>Users primarily use SoundCloud to discover new music and artists.</p></li>
              <li><p>Users need help searching for specific songs or artists.</p></li>
              <li><p>Users need help navigating through the application and accessing key features.</p></li>
              <li><p>Users would like the ability to customize their listening experience.</p></li>
              <li><p>Users want a better way to organize and manage their playlists.</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-para">
          <h5 style="margin-top: 0px;">Competitive Analysis</h5>
          <img src="./imagen/proj-inner/soundcloud/compititors.png" class="img-fluid mb-3" alt="SoundCloud"  style="width: 100%">
          <p>We comprehend the client SoundCloud and their rivals. Over six brands, websites, and applications were scrutinized, ultimately deciding on three main competitors: Spotify, Bandcamp, and JioSaavn. This examination exposed the need for enhancing the design and focusing on mobile applications.</p>
          <p>During my user interview, I gained significant insights that helped me identify the user flow and different scenarios to enhance the existing design of the application. According to the results, more than 70% of the participants believed the application required a thoughtful revamp. The age group of 20-25 suggested implementing minimal interfaces compared to the current design. Around 60% of respondents preferred competitor applications because of their more superficial visual aspects and user-friendly interfaces that make finding and recommending tracks easier. Interestingly, I found that only a few participants used the "Upload" menu, with 95% of the respondents stating that they had never used or uploaded music/audio on SoundCloud in the last year. During my online research, I discovered that creators often leave SoundCloud when they gain popularity and grow outside the platform. I interviewed 15 users, and the major challenge was analysing and categorising their responses.</p>
          <h5>User personas</h5>
          <img src="./imagen/proj-inner/soundcloud/roy.png" class="img-fluid mb-3" alt="SoundCloud">
          <p>I developed a persona named "Roy Deo" based on my research and findings. He is a 26-year-old software developer residing in Bengaluru. Creating a user persona enables me to prioritize the user's needs and involve him in the design process.</p>

        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="side-para" style="padding: 1.5rem 2rem; background-color: #112b35; border: 1px solid #1a3945; border-radius: 5px; margin-bottom: 15px;">
          <p style="background-color: transparent;"><strong style="background-color: transparent;"><u style="background-color: transparent;">Goals</u></strong></p>
          <ul style="background-color: transparent;">
            <li style="background-color: transparent;"><p style="background-color: transparent;">Stay updated with the latest releases from your favorite artists to keep track of what music is currently trending.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Craft exceptional playlists, share them with others, and play them at parties to make your gatherings more enjoyable.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Effectively manage your playlist and library to ensure you always have the right music to match your current vibe or mood.</p></li>
          </ul>
          </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="side-para" style="padding: 1.5rem 2rem; background-color: #112b35; border: 1px solid #1a3945; border-radius: 5px; margin-bottom: 15px;">
          <p style="background-color: transparent;"><strong style="background-color: transparent;"><u style="background-color: transparent;">Needs</u></strong></p>
          <ul style="background-color: transparent;">
            <li style="background-color: transparent;"><p style="background-color: transparent;">Connect with and follow your preferred artists to stay updated with their latest releases and news.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Stay current with trends and the most recent releases from your preferred artists and genres.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Explore new music, trends, and find out what your friends are listening to.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Personalized suggestions based on your preferences and current mood.</p></li>
          </ul>
          </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="side-para" style="padding: 1.5rem 2rem; background-color: #112b35; border: 1px solid #1a3945; border-radius: 5px; margin-bottom: 15px;">
          <p style="background-color: transparent;"><strong style="background-color: transparent;"><u style="background-color: transparent;">Pains</u></strong></p>
          <ul style="background-color: transparent;">
            <li style="background-color: transparent;"><p style="background-color: transparent;">The outdated design aesthetics are unappealing, leading to the preference for competitor platforms primarily due to their visual appeal.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Trends are being missed as they are not easily discoverable.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Managing playlists and libraries is challenging.</p></li>
            <li style="background-color: transparent;"><p style="background-color: transparent;">Feeling overwhelmed by music recommendations that must be aligned with one's preferences or current mood.</p></li>
          </ul>
          </div>
      </div>
      <div class="col-md-2"></div>
      <!--  -->
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-head">
          <h4>Design guideline</h4>
        </div>
        <div class="side-para">
          <p>It is crucial to comprehend the current style and branding guidelines of SoundCloud to identify the brand's fundamental principles. SoundCloud represents energy and diversity, and I adjusted the existing approach while keeping these values in mind. One significant change was shifting the font family from Interstate to Roboto. Although this alteration affects its traditional appearance, it brings a modern and fresh feel to the user interface.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <!-- <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="side-para">
            <img src="./imagen/proj-inner/soundcloud/01-STYLEGUIDE-COLORS.png" class="card-img-top" alt="SoundCloud">
            <div class="card-body">
              <p class="card-text">Colors</p>
            </div>
          </div>
      </div>
      <div class="col-md-2"></div>
    </div> -->
    <!--  -->
    <!-- <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <div class="side-para">
            <img src="./imagen/proj-inner/soundcloud/02-STYLEGUIDE-FONTS.png" class="card-img-top" alt="SoundCloud">
            <div class="card-body">
              <p class="card-text">Typography</p>
            </div>
          </div>
      </div>
      <div class="col-md-2"></div>
    </div> -->
    <!--  -->
    <!-- <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
                            <div class="side-para">
                              <img src="./imagen/proj-inner/soundcloud/04-STYLEGUIDE-ICONS.png" class="card-img-top" alt="SoundCloud">
                              <div class="card-body">
                                <p class="card-text">Icons</p>
                              </div>
                            </div>
      </div>
      <div class="col-md-4">
                            <div class="side-para">
                              <img src="./imagen/proj-inner/soundcloud/05-STYLEGUIDE-BUTTONS.png" class="card-img-top" alt="SoundCloud">
                              <div class="card-body">
                                <p class="card-text">Buttons</p>
                              </div>
                            </div>
      </div>
      <div class="col-md-2"></div>
    </div> -->
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-head">
          <h4>Wireframes</h4>
        </div>
        <div class="side-para">
          <p>The outcomes of the user interviews, recommendations, and improved user flow guided the creation of wireframes. These wireframes were produced using Figma and the Material 2 kits. Every aspect, from the splash screen to the mini-player, was designed from scratch. However, some changes were made, such as separating the "Upload" icon from the top navigation and placing it as an independent element on the homepage. New sign-in and registration screens were also designed, and the artist Portfolio page was updated.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-para row">
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/01-W-SPLASH.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Splash screen</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/02-W-SIGNUP.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Signup</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/03-W-SIGNIN.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Typo sizes</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/06-W-LIBRARY.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Library</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/04-W-HOME.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Home - Landing</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/05-W-STREAM.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Streaming</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/07-W-PLAYLISTS.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Playlist</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/08-W-PROFILE.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Profile</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/10-W-MINIPLAYER.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Mini-player</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/09-W-PLAYER.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Player</p>
                  </div>
              </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-head">
          <h4>User interface</h4>
        </div>
        <div class="side-para">
          <p>Once I improved the user flow based on the wireframes, I began working on prototypes using Figma for prototyping and Adobe Illustrator for graphic design. The colors and typeface used are more refined, and the interfaces are clear and concise, resulting in a better user experience. The updated home screen includes categories such as Artists, Latest Tracks, Playlists, Uploading, and Latest Releases. All icons were changed to Google Material icons, and the album art was styled to be more visually appealing. The playlist's multiple tracks are now displayed as vertical album art, with an icon width of 33.33%. A "Dim mode" was also introduced with a new color pattern. To help users discover new content, featured categories and profile layouts were added. This feature could significantly improve the user experience when exploring new music.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-para row">
        <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/01-P-SPLASH.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Splash screen</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/02-P-SIGNUP.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Signup</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/03-P-SIGNIN.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Typo sizes</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/04-P-HOME.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Home - Landing</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/04-D-HOME.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Home - Landing (Dim)</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/05-P-STREAM.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Streaming</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/05-D-STREAM.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Streaming (Dim)</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/06-P-LIBRARY.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Library</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/07-P-PLAYLISTS.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Playlist</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/08-P-PROFILE.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Profile</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/10-P-MINIPLAYER.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Mini-player</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <img src="./imagen/proj-inner/soundcloud/09-P-PLAYER.png" class="card-img-top" alt="SoundCloud">
                  <div class="card-body">
                    <p class="card-text">Player</p>
                  </div>
              </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="side-head">
          <h4>Conclusion</h4>
        </div>
        <div class="side-para">
          <p>By conducting this UX case study, we were able to pinpoint crucial areas that needed improvement in the SoundCloud mobile application and develop a new design that caters to the user's requirements and habits. The redesign emphasizes streamlining playlist management, simplifying the search function, improving navigation, and personalizing the listening experience. During usability testing, users positively received the new design, and we are confident that it will enhance the SoundCloud mobile application's user experience.</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>






  </div>
  <!--  -->


  


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