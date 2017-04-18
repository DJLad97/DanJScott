<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'index.php';
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('includes/head.php'); ?>
    <title>About :: Dan Scott</title>
  </head>
  <body>
    <?php include('includes/sidenav.php'); ?>

    <main id="panel">
      <?php include('includes/slideout-button.php'); ?>
      <div class="parallax-container">
        <!-- grey-text text-lighten-4 -->
        <h1 class="title">Dan Scott</h1>
         <!-- grey-text text-lighten-3 -->
        <h2 class="subtitle">Software Engineering Student <span class="break">@ Sheffield Hallam University</span></h2>

        <?php include('includes/navbar.php'); ?>

       <div class="parallax">
         <img src="images/peaks-3 (fade).jpg">
       </div>
      </div>


      <div class="section grey lighten-3">
        <div class="row container">
          <div class="border">
            <h2 class="section-header">Welcome</h2>
            <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
            <p>Welcome to my website, as you can see this is currently in development. I have a temporary website that I could show,
              however it's not really representative of my current skill and I wouldn't feel right showing it off
              <br>
              After doing a web development module at university, I've sinced gained a great interest in the subject and I'm now working on my skills to help me become a career web developer.
            </p>
          </div>
          <!-- <h1>HELLO WORLD!! test2</h1>
          <button class="btn">BUTTON</button> -->
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="images/peak-dist (fade).jpg"></div>
      </div>

      <div class="section grey lighten-3">
        <div class="row container">
          <div class="border">
            <h2 class="section-header">Who Am I?</h2>
            <div id="profile-img">
              <div class="circular-landscape">
                <img src="images/me.jpg" alt="profile image">
              </div>
            </div>
            <p><a href="UK-Cycling-Events/index.php">Click here</a> to check out my latest web project</p>
          </div>
        </div>
      </div>

      <div class="parallax-container">
       <div class="parallax"><img src="images/peaks-1 (fade).jpg"></div>
      </div>
    </main>
    <script>
    var slideout = new Slideout({
       'panel': document.getElementById('panel'),
       'menu': document.getElementById('menu'),
       'padding': 256,
       'tolerance': 70
     });
     $('.toggle-button').on('click', function() {
      slideout.toggle();
    });

    slideout.enableTouch();
    </script>
  </body>
</html>
