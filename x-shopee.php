<main class="indi-project-only" oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">

<?php 
  $titletag = "Shopee Singapore • A-R.XYZ";
  include_once('header.php');
?>

<section class="head-section">
  <div class="container">
    <div class="row">
      <!--  -->
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Shopee Singapore</h1>
        <div class="side-para">
          <p style="padding-bottom: 20px;">Explore a comprehensive case study on Shopee's seamless one-click checkout solution implementation, delving into their strategies to optimize the checkout process, minimize friction, and enhance user satisfaction. Uncover the critical insights behind their successful efforts, resulting in an improved and efficient online shopping experience.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
      <!--  -->
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-para">
          <div class="embed-responsive embed-responsive-16by9">
            <video autoplay loop muted style='border-radius: 5px;'>
              <source src="imagen/proj-inner/shopee/intro.mp4" type="video/mp4" />
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
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
        <div class="side-head">
          <h4><u>Reducing friction, increasing conversions</u></h4>
        </div>
        <div class="side-para">
            <p>In the world of e-commerce websites, the traditional checkout process is often tedious and complex and can result in users abandoning their carts and lower conversions. Shopee Singapore recognized this challenge and set out to simplify the checkout process by introducing a one-click checkout solution on its website. This UX case study delves into the effectiveness of this solution in reducing the number of steps required, minimizing the information needed, and enhancing user satisfaction and conversion rates.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Understanding target market users</u></h4>
        </div>
        <div class="side-para">
            <p>It is crucial to understand the target market users deeply; therefore, we developed a collection of proto-personas representing different user segments based on demographics, online shopping habits, satisfaction with the current checkout process, the likelihood of using the One-Click Checkout feature, expectations, concerns, and feedback. These personas serve as representative profiles that provide insights into the diverse needs and preferences of Shopee users, guiding the design and implementation of the feature to meet their specific requirements effectively.</p>
            <!--  -->
            <div class="row" style="margin-bottom: 0px;">
              <div class="col-md-6">
                <div class="side-para shopee-persona-card">
                    <div class="card" style="">
                      <img class="card-img-top" src="imagen/proj-inner/shopee/proto1.png" alt="Shopee">
                      <div class="card-body">
                        <h6>Busy Shopper</h6>
                        <h5 class="card-title">Jane Mitchell</h5>
                        <ul class="shopee-persona-card-l1">
                          <li><p>♉︎ 28 years</li>
                          <li><p>♀ Female</li>
                          <li><p>⌦ Central Region</li>
                        </ul>
                        <table class="table table-sm">
            
                          <tbody>
                            <tr>
                              <th scope="row">☑</th>
                              <td>Shops online several times a week</td>
                            </tr>
                            <tr>
                              <th scope="row">⚠</th>
                              <td>Somewhat dissatisfied with the current checkout process</td>
                            </tr>
                            <tr>
                              <th scope="row">❤</th>
                              <td>Very likely to use the One-click Checkout feature</td>
                            </tr>
                            <tr>
                              <th scope="row">☇</th>
                              <td>Values time-saving and convenience, desires customization options for shipping addresses and payment methods</td>
                            </tr>
                            <tr>
                              <th scope="row">!</th>
                              <td>Has moderate concerns about security and privacy, expects clear communication on data protection</td>
                            </tr>
                            <tr>
                              <th scope="row">✍︎</th>
                              <td>Emphasizes the importance of clear user instructions for using the feature</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="side-para shopee-persona-card">
                    <div class="card" style="">
                      <img class="card-img-top" src="imagen/proj-inner/shopee/proto2.png" alt="Shopee">
                      <div class="card-body">
                        <h6>Convenience Seeker</h6>
                        <h5 class="card-title">Mark Johnson</h5>
                        <ul class="shopee-persona-card-l1">
                          <li><p>♋︎ 31 years</li>
                          <li><p>♂ Male</li>
                          <li><p>⌦ South Region</li>
                        </ul>
                        <table class="table table-sm">
            
                          <tbody>
                            <tr>
                              <th scope="row">☑</th>
                              <td>Shops online once a month</td>
                            </tr>
                            <tr>
                              <th scope="row">⚠</th>
                              <td>Neutral about the current checkout process</td>
                            </tr>
                            <tr>
                              <th scope="row">❤</th>
                              <td>Very likely to use the One-click Checkout feature</td>
                            </tr>
                            <tr>
                              <th scope="row">☇</th>
                              <td>Excited about the time-saving benefits, interested in additional security measures</td>
                            </tr>
                            <tr>
                              <th scope="row">!</th>
                              <td>Moderately concerned about security during online transactions, expects robust security measures like data encryption</td>
                            </tr>
                            <tr>
                              <th scope="row">✍︎</th>
                              <td>Suggests a user-friendly interface for a seamless experience</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>

            </div>
            <!--  -->
            <p>The comprehensive analysis of proto-personas provides a deep understanding of Shopee Singapore's target market users for the One-Click Checkout feature. We gain valuable insights into diverse user needs and preferences by examining demographics, shopping habits, satisfaction levels, expectations, concerns, and feedback. These insights form the foundation for the UX design process, enabling a customized user experience that simplifies checkout, fosters seamless interactions, and enhances overall satisfaction. In addition, addressing user pain points and desires ensures the successful implementation of the One-Click Checkout feature, exceeding user expectations.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Competitor analysis</u></h4>
        </div>
        <div class="side-para">
            <p>This table compares different aspects and attributes of the key competitors in the Singapore e-commerce market to understand their offerings regarding the one-click checkout process and other relevant attributes.</p>
            <!--  -->
            <div class="table-responsive table-responsive-shopee">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Competitor</th>
                    <th scope="col">Market Share</th>
                    <th scope="col">Reviews Score</th>
                    <th scope="col">One-Click Checkout</th>
                    <th scope="col">Payment Method Integration</th>
                    <th scope="col">Security Measures</th>
                    <th scope="col">Discounts & Promotions</th>
                    <th scope="col">Abandonment Rate</th>
                    <th scope="col">Abandonment Reason</th>
                    <th scope="col">Potential Aban. Reduction</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <!--  -->
            <p>The participants provided innovative and practical suggestions, including user account integration, guest checkout optimization, pre-checkout summaries, one-click checkout, and auto-application of discounts and coupons. These ideas can now serve as a foundation for further analysis, prototyping, and implementing a streamlined and user-friendly checkout experience on the Shopee Singapore website.</p>
        </div>
        </div>
      <div class="col-md-1"></div>
    </div>


    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Brainwriting sessions for ideation</u></h4>
        </div>
        <div class="side-para">
            <p>The session's objective was to generate innovative ideas for simplifying the checkout process and implementing a one-click checkout feature on the Shopee Singapore website. In addition, the session aimed to leverage the collective creativity and expertise of the participants to devise practical and straightforward solutions.</p>
            <p>The brainwriting session was structured to encourage participants to generate ideas individually and build upon each other's suggestions. The key steps were as follows:</p>
            <div class="row" style="margin-bottom: 0px;">
                <div class="col mb-4">
                  <img src="./imagen/proj-inner/shopee/brain1.png" class="img-fluid" alt="Shopee Singapore" style="width: 52px; margin-bottom: 15px; margin-top: 20px;">
                  <h6>Step 1: Idea Generation</h6>
                  <p>Participants received a worksheet to generate ideas for simplifying the checkout process and implementing a one-click checkout.</p>
                </div>
                <div class="col mb-4">
                  <img src="./imagen/proj-inner/shopee/brain2.png" class="img-fluid" alt="Shopee Singapore" style="width: 52px; margin-bottom: 15px; margin-top: 20px;">
                  <h6>Step 2: Idea Exchange</h6>
                  <p>Participants rotated and reviewed previous ideas, refining and expanding upon them collaboratively. This iterative process allowed multiple contributions and leveraged collective knowledge and creativity.</p>
                </div>
                <div class="col mb-4">
                  <img src="./imagen/proj-inner/shopee/brain3.png" class="img-fluid" alt="Shopee Singapore" style="width: 52px; margin-bottom: 15px; margin-top: 20px;">
                  <h6>Step 3: Idea Consolidation</h6>
                  <p>After the brainwriting session, ideas were consolidated, and a discussion was held to address any questions or ambiguities, ensuring a shared understanding among participants.</p>
                </div>
            </div>
            <p>The brainwriting session yielded diverse ideas for simplifying the checkout process and implementing a one-click checkout feature. The following is a summary of the key ideas generated:</p>
            <img src="./imagen/proj-inner/shopee/brainout.svg" class="img-fluid" alt="Shopee Singapore" style="width: 100%; margin-bottom: 10px; margin-top: 5px;">
            <p>The participants provided innovative and practical suggestions, including user account integration, guest checkout optimization, pre-checkout summaries, one-click checkout, and auto-application of discounts and coupons. These ideas can now serve as a foundation for further analysis, prototyping, and implementing a streamlined and user-friendly checkout experience on the Shopee Singapore website.</p>
        </div>
        </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Competitor Analysis</u></h4>
        </div>
        <div class="side-para">
            <p>To identify potential areas for improvement and differentiation for the Corschame mobile app, a competitor analysis was conducted to evaluate the mobile app user experiences of other luxury hotel and resort chains in the UK and EU markets.</p>
            <p>The analysis revealed the following key findings:</p>
            <div style="text-align: center;">
              <img src="./imagen/proj-inner/corschame/compe.png" class="img-fluid" alt="Corschame" style="width: 100%; margin-top: 30px; margin-bottom: 40px">
            </div>
            <ul style="list-style-type: none; padding-left: 0px;">
              <li><p><b><u>User-friendly and visually appealing interfaces:</u></b> All competitors mobile apps had clean interfaces with easy navigation and intuitive designs. The use of high-quality imagery and color schemes consistent with their brand identities was evident in all apps.</p></li>
              <li><p><b><u>Robust features for booking and managing stays:</u></b> All competitors mobile apps offered comprehensive features for securing and managing visits, including the ability to search and book rooms, view reservation details, modify or cancel reservations, and access loyalty program information.</p></li>
              <li><p><b><u>Personalized experiences and services:</u></b> Some competitors offered personalized experiences and services, such as the ability to customize room preferences and make special requests and recommendations for local activities and attractions based on user preferences and previous bookings.</p></li>
              <li><p><b><u>Seamless integration with other hotel technology systems:</u></b> Some competitors had mobile apps seamlessly integrated with other hotel technology systems, such as mobile key access and in-room entertainment systems.</p></li>
              <li><p><b><u>In-app messaging and support:</u></b> Most competitors had in-app messaging and support features that allowed users to communicate with hotel staff and receive assistance with any issues or requests.</p></li>
          </ul>
          <p>The competitor analysis revealed that the UK luxury hotel and resort market has highly competitive and robust mobile app user experiences. As a result, Corschame would need to ensure that its app offers similar features and user-friendliness to stay competitive.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4 class="mb-4"><u>Proto-personas</u></h4>
        </div>
      </div>
      <div class="col-md-1"></div>
      <!--  -->
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
        <div class="row" style="margin-bottom: 0px;">
            <div class="col-md-6">
              <div class="side-para corshame-persona-grid">
                  <img src="./imagen/proj-inner/corschame/briefcase.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 10px">
                  <h4>Business Traveler</h4>
                  <ul style="list-style-type: none; padding-left: 0px;">
                    <li><p><b><u>Needs:</u></b> A seamless and efficient booking process, access to hotel amenities such as conference rooms, and a personalized experience that caters to their specific business needs.</p></li>
                    <li><p><b><u>Pain Points:</u></b> Limited time to plan and book accommodations, difficulty finding a hotel that meets their specific business requirements, and the need for reliable Wi-Fi and other business-related services.</p></li>
                    <li><p><b><u>Preferences:</u></b> A streamlined and intuitive user interface, access to local restaurant and transportation recommendations, and the ability to quickly and easily access important information about their stay.</p></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="side-para corshame-persona-grid">
                  <img src="./imagen/proj-inner/corschame/sunglasses.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 10px">
                  <h4>Leisure Traveler</h4>
                  <ul style="list-style-type: none; padding-left: 0px;">
                    <li><p><b><u>Needs:</u></b> A relaxing and stress-free vacation experience, access to information about local attractions and events, and the ability to customize their stay to meet their specific preferences.</p></li>
                    <li><p><b><u>Pain Points:</u></b> Difficulty finding accommodations that meet their specific needs and preferences, unexpected fees or charges, and difficulty navigating an unfamiliar city.</p></li>
                    <li><p><b><u>Preferences:</u></b> A visually appealing and user-friendly interface, the ability to book activities and reservations directly through the app, and personalized recommendations based on their interests.</p></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="side-para corshame-persona-grid">
                  <img src="./imagen/proj-inner/corschame/balloon.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 10px">
                  <h4>Event Planner</h4>
                  <ul style="list-style-type: none; padding-left: 0px;">
                    <li><p><b><u>Needs:</u></b> Access to a comprehensive list of event spaces and services, the ability to manage multiple events and bookings at once, and real-time communication with hotel staff.</p></li>
                    <li><p><b><u>Pain Points:</u></b> Difficulty coordinating with multiple vendors and services, limited availability of event spaces, and unexpected fees or charges.</p></li>
                    <li><p><b><u>Preferences:</u></b> A robust and customizable event management system, the ability to communicate directly with hotel staff and vendors, and detailed information about available event spaces and services.</p></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="side-para corshame-persona-grid">
                  <img src="./imagen/proj-inner/corschame/cup.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 10px">
                  <h4>Luxury Traveler</h4>
                  <ul style="list-style-type: none; padding-left: 0px;">
                    <li><p><b><u>Needs:</u></b> A high-end and personalized experience, access to exclusive amenities and services, and the ability to customize their stay to meet their specific preferences.</p></li>
                    <li><p><b><u>Pain Points:</u></b> Limited availability of luxury accommodations, unexpected fees or charges, and difficulty finding accommodations that meet their specific needs and preferences.</p></li>
                    <li><p><b><u>Preferences:</u></b> A visually stunning and easy-to-use interface, access to exclusive amenities and services such as private dining and spa treatments, and personalized recommendations.</p></li>
                  </ul>
              </div>
            </div>
        </div>
        </div>
      </div>
 
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>User Interviews & Comments</u></h4>
        </div>
        <div class="side-para">
          <p>After conducting user interviews for the mobile app user experience design case study for "Corschame", a luxury hotel & resort chain based in the UK, the following summary of key comments and suggestions emerged:</p>
          <img src="./imagen/proj-inner/corschame/survey.png" class="img-fluid mb-3" alt="Corschame" style="width: 100%;">
          <p>Additional suggestions include incorporating a loyalty program that rewards frequent guests with exclusive perks and discounts, providing real-time flight information and transportation options for getting to and from the hotel, and adding a social aspect to the app where users can connect with other guests and share recommendations and experiences.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    
    <!--  --> 
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>User Journey Map</u></h4>
        </div>
        <div class="side-para">
            <img src="./imagen/proj-inner/corschame/userjourneyx.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 10px">
            <p>By creating a user journey map like this, you can identify potential pain points in the user experience and improve the app to ensure a smooth and enjoyable experience for your users.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Design Solution</u></h4>
        </div>
        <div class="side-para">
          <p>The Corschame mobile app is designed to provide a seamless user experience for luxury hotel and resort guests. The app will offer a range of features and functionality to enhance the guest experience, from booking and check-in to personalized recommendations and in-room service requests.</p>
          <div class="row" style="margin-bottom: 15px;">
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/bookingft.png" class="img-fluid" alt="Corschame">
                  <p>Booking & Check-in</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/personalizeft.png" class="img-fluid" alt="Corschame">
                  <p>Recommendations</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/roomft.png" class="img-fluid" alt="Corschame">
                  <p>Service & Amenities</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/loyaltyft.png" class="img-fluid" alt="Corschame">
                  <p>Loyalty & Rewards</p>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row" style="margin-bottom: 15px;">
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/supportft.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/keyft.png" class="img-fluid" alt="Corschame">
                  <p>Digital Key</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/apartmentft.png" class="img-fluid" alt="Corschame">
                  <p>Property Information</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/shareft.png" class="img-fluid" alt="Corschame">
                  <p>Social Sharing</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/activityft.png" class="img-fluid" alt="Corschame">
                  <p>Activities</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-sol">
                  <img src="./imagen/proj-inner/corschame/languageft.png" class="img-fluid" alt="Corschame">
                  <p>Language Support</p>
              </div>
            </div>
            <div class="col">

            </div>
            <div class="col">
      
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Information Architecture</u></h4>
        </div>
        <div class="side-para">
            <p>The information architecture aims to provide a modern and innovative user experience for Corschame's guests. Users can easily search and filter hotels and destinations, book rooms, manage bookings, earn rewards, discover activities, and access transportation information. The interface is visually appealing and easy to navigate, reflecting Corschame's luxury brand image. Furthermore, users can enjoy a truly personalized recommendations and promotions.</p>
            <img src="./imagen/proj-inner/corschame/iax.png" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 20px">
            
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>    
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Wireframes</u></h4>
        </div>
        <div class="side-para">
            <p>Wireframe sketch could help stakeholders visualize the application structure and layout, plan the user flow, and experiment with different features and designs to create a user-friendly application that reflects Corschame's luxury brand and unique vacation experiences.</p>
            <!--  -->
            <div class="row" style="margin-bottom: 40px;">
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire1.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire2.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire3.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire4.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire5.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire6.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire7.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire8.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire9.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
              <div class="col">
                  <img src="./imagen/proj-inner/corschame/wire10.jpg" class="img-fluid" alt="Corschame" style="margin-top: 10px; margin-bottom: 0px">
              </div>
            </div>
            <!--  -->
            <a href="https://miro.com/welcomeonboard/U1hRb2pjQUhaZnFsNUpxS0ZheU1pUEZFM092eEQ5WnRBbDBWZVFRcFNrSUpqS2dJeEIyV3h3TmVoU1plbENRdHwzNDU4NzY0NTE1Mzc1MjQ5MDQ5fDI=?share_link_id=947454766929" class="clickable-image-preview" tar target="_blank" style="margin-top: 15px;
               margin-bottom: 0px;
               text-align: center;
               display: grid;
               color: #FFF;">▧ View wireframes</a>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Research & Design Validation</u></h4>
        </div>
        <div class="side-para">
        <p>The next step would be to conduct user research and testing to validate the wireframes created for the app. This ensures the wireframes meet the target user's and stakeholders' needs and preferences.</p>
        <img src="./imagen/proj-inner/corschame/recording.png" class="img-fluid" alt="Corschame" style="margin-top: 0px; margin-bottom: 10px">
        <p>After making the necessary improvements based on user feedback, the wireframes can be finalized and used to create high-fidelity mockups and prototypes for further testing and validation. This iterative process can be continued until the app design meets the needs and preferences of the target users and provides a seamless and enjoyable user experience.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Protoryping</u></h4>
        </div>
        <div class="side-para">
        <p>Wireframe sketch could help designers and stakeholders visualize the website's structure and layout, plan the user flow, and experiment with different features and layouts to create a user-friendly website that reflects Corschame's luxury brand and unique vacation experiences.</p>
        <!--  -->
        <div class="row" style="margin-bottom: 40px; margin-top: 25px;">
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D01.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D02.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D03.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D04.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D05.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
        </div>
        <!--  -->
        <div class="row" style="margin-bottom: 40px;">
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D06.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D07.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D08.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D09.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D10.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
        </div>
        <!--  -->
        <div class="row" style="margin-bottom: 25px;">
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D11.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D12.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D13.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D14.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
            <div class="col">
              <div class="corsch-desi-proto">
                  <img src="./imagen/proj-inner/corschame/D15.png" class="img-fluid" alt="Corschame">
                  <p>Virtual Concierge</p>
              </div>
            </div>
        </div>
        <a href="https://www.figma.com/proto/0j4YJ2ucy8kjkAu78YItFZ/PROJECTSAR?page-id=0%3A1&node-id=262-651&scaling=scale-down&starting-point-node-id=262%3A651&hide-ui=1" class="clickable-image-preview" tar target="_blank" style="margin-top: 15px;
               margin-bottom: 0px;
               text-align: center;
               display: grid;
               color: #FFF;">▧ View preview</a>
               
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <!--  -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="side-head">
          <h4><u>Next steps</u></h4>
        </div>
        <div class="side-para">
            <p>After prototyping designs for Corschame's website, the next steps would be to refine the design, implement it into the app development process, and test and launch the app. This process involves several key stages:</p>
            <ul>
              <li><p><b><u>Iteration:</u></b> Based on feedback from users, the design will be refined and iterated upon to improve the user experience and meet the project's objectives. This may involve making changes to the layout, navigation, features, or content to better align with user needs and preferences. The iterative design process continues until a user-friendly and visually appealing design is achieved.</p></li>
              <li><p><b><u>Implement the design:</u></b> Once the design has been refined, it can be implemented into the app development process. The designer should work closely with developers to ensure that the design is implemented as intended and that the app's functionality is consistent with the design.</p></li>
              <li><p><b><u>Test and launch the app:</u></b> Before launching the app, it should be thoroughly tested to ensure that it is functioning as intended and providing a positive user experience. This involves testing the app's functionality, usability, and compatibility with different devices and operating systems. Any issues or bugs that are identified during testing should be addressed before launching the app. After testing, the app can be launched to the public, and feedback should continue to be collected to further refine the design and improve the user experience.</p></li>
            </ul>
            <p>By following these steps, Corschame can create a website design that effectively showcases its luxury brand and unique vacation experiences while providing a user-friendly and visually appealing interface for visitors to browse and book their ideal vacation. The iterative design process ensures that the website is constantly evolving and improving to meet user needs and preferences, while thorough testing and launch processes help to ensure a smooth and successful launch.</p>
        </div>
      </div>
      <div class="col-md-1"></div>
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