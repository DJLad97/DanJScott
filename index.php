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
    <script src="https://use.fontawesome.com/1a6d4ae9a2.js"></script>
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
          <!-- <h2 class="section-header">Who Am I?</h2> -->
          <div id="profile-img">
            <div class="circular-landscape">
              <img src="images/me.jpg" alt="profile image">
            </div>
          </div>
          <div class="desc">
            <p class="border">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
              ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
              purus eros ullamcorper nunc, ut aliquam orci ipsum in purus. Integer molestie diam nec tellus viverra fermentum.
              Nunc bibendum felis ante, condimentum lacinia nulla egestas quis. In feugiat dolor a massa blandit molestie.
              Vivamus sollicitudin massa ut lobortis vestibulum. Etiam a purus dignissim, vehicula libero vel, blandit lorem.
              Suspendisse luctus blandit ligula vel eleifend. Ut ac urna libero. Aenean semper mollis augue, ut tempus nulla malesuada tempus.
            </p>
          </div>

          <!-- <br>
          <br> -->
          <div class="icon-container">
            <div class="row">
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <a href="https://github.com/DJLad97" target="_blank">
                      <i class="fa fa-github icon" aria-hidden="true"></i>
                    </a>
                  </div>
                  <h5 class="center">Aspiring Web Dev</h5>
                  <p class="icon-block-text">
                      Right now I'm aiming to improve my skills & understanding of web development,
                      my skills currently consist of basics: HTML, CSS, Bootstrap, JavaScript/jQuery & PHP.
                      I also have experience in working with databases - MySQL and Oralce.
                  </p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-university icon" aria-hidden="true"></i>
                  </div>
                  <h5 class="center">Software Engineering Student</h5>
                  <p class="icon-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
                    ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
                  </p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-building icon" aria-hidden="true"></i>
                  </div>
                  <h5 class="center">Looking for placement</h5>
                  <p class="icon-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
                    ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-music icon" aria-hidden="true"></i>
                  </div>
                  <h5 class="center">Music</h5>
                  <p class="icon-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
                    ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
                  </p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-rebel icon" aria-hidden="true"></i>
                  </div>
                  <h5 class="center">Star Wars Nerd</h5>
                  <p class="icon-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
                    ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
                  </p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-tree icon" aria-hidden="true"></i>
                    <!-- <img src="images/mountain-icon.png" width="128" height="128" alt=""> -->
                  </div>
                  <h5 class="center">ECA</h5>
                  <p class="icon-block-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ipsum felis, efficitur ac auctor ut,
                    ultricies egestas lectus. Fusce eget fringilla urna. Cras pharetra, nisl et venenatis facilisis,
                  </p>
                </div>
              </div>
            </div>
          </div>
            <!-- <p><a href="UK-Cycling-Events/index.php">Click here</a> to check out my latest web project</p> -->
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
