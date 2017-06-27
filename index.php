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
      <?php include('includes/slideout-button.php');?>
      <div class="parallax-container">
        <!-- grey-text text-lighten-4 -->
        <h1 class="title">Dan Scott test</h1>
         <!-- grey-text text-lighten-3 -->
        <h2 class="subtitle">Software Engineering Student <span class="break">@ Sheffield Hallam University</span></h2>

        <?php include('includes/navbar.php'); ?>

       <div class="parallax">
         <img src="images/peak-dist-4 (fade).png">
       </div>
      </div>


      <div class="section grey lighten-3">
        <div class="row container">
          <div class="border">
            <h2 class="section-header">Welcome</h2>
            <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
            <p>Welcome to my website, I'm currently a Software Engineering student at
              <a href="https://www.shu.ac.uk/">Sheffield Hallam University</a>.
              <br>
              After doing a web development module during my second, I've sinced gained a great interest in the subject;
              I'm now working on my skills to help me become a career web developer.
              <br>
              <br>
              <a href="blog.php">Check what I've been up to!</a>
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
                      my skills currently consist of basics: HTML, CSS, Bootstrap, JavaScript/jQuery, PHP & AJAX.
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
                    I'm currently enrolled at Sheffield Hallam University; studying towards a
                    bachelor's degree in Software Engineering.
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
                    As part of my course, we required to undertake a placement year in industry.
                    I'm still on the hunt for a placement so if you like what you see here don't
                    hesitate to <a href="contact-me.php">Contact Me.</a>
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
                    If I weren't pursuing a career in the software engineering industry,
                    I'd probably be looking for a career in music as it's also quite a passion of mine.
                    I play the guitar, banjo and drums; if you're looking to form a bluegrass or need a member,
                    give me a shout.
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
                    I absolutely Star Wars! But what might shock is, unlike most Star Wars nerds, the
                    fascination didn't start when I was a kid but when I was 17! After watching EP IV I was hooked,
                    and now I've watched the movies too many times, read book after book (and comics) and amassed a collection
                    of LEGO and figurines.
                  </p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="icon-block">
                  <div class="center">
                    <i class="fa fa-tree icon" aria-hidden="true"></i>
                    <!-- <img src="images/mountain-icon.png" width="128" height="128" alt=""> -->
                  </div>
                  <h5 class="center">Hobbies</h5>
                  <p class="icon-block-text">
                    Two of my main hobbies revolve around the mountain (hence the tree).
                    They are mountain biking and hiking, both of which I started in university and
                    thoroughly enjoying. (Also know archery and snowboarding)
                  </p>
                </div>
              </div>
            </div>
          </div>
            <!-- <p><a href="UK-Cycling-Events/index.php">Click here</a> to check out my latest web project</p> -->
        </div>
      </div>


      <div class="parallax-container">
         <div class="parallax"><img src="images/peak-dist-1 (fade).jpg"></div>
      </div>
      <?php include('includes/footer.php'); ?>
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
