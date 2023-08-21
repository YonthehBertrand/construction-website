<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- section header start -->
      <?php
      require ("partials/header.php");
       ?>
      <!-- section header end -->
      <!-- contact section start -->
      <div class="contact_section contact_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="contact_bg">
                     <div class="input_main">
                        <div class="container">
                           <h2 class="request_text">REQUEST A CALL BACK</h2>
                           <form action="/action_page.php">
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Your Name" name="Name">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Email" name="Email">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Phone" name="Email">
                              </div>
                           <form action="/action_page.php">
                              <div class="form-group">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                              </div>
                           </form>
                           </form>
                        </div>
                     </div>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <?php
      require ("partials/footer.php");
       ?>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <?php 
      require ("partials/script.php");
       ?>
   </body>
</html>
