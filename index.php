<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Young and budding web developer - Come check me out!" />

    <link rel="icon" href="icons/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png" />

    <link rel="android-touch-icon" sizes="120x120" href="icons/android-icon-120x120.png" />
    <link rel="android-touch-icon" sizes="152x152" href="icons/android-icon-152x152.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/slideout.css"> -->
    <?php include('includes/head.php'); ?>
    <title>About :: Dan Scott</title>
  </head>
  <body>
    <?php include('includes/sidenav.php'); ?>

    <!-- <div id="menu" class="grey lighten-3">
      <h2>Menu</h2>
      <ul>
        <li class="sidenav-item">
          <a href="index.html">
            <img src="images/about-me-black.png" class="about-me-sidenav" width="48" height="48" alt="image not found">
            <span class="sidenav-caption">About Me</span>
          </a>
        </li>
        <li class="sidenav-item">
          <a href="portfolio.html">
            <img src="images/portfolio-icon-black.png" class="portfolio-sidenav" width="48" height="48" alt="image not found">
            <span class="sidenav-caption">Portfolio</span>
          </a>
        </li>
        <li class="sidenav-item">
          <a href="blog.html">
            <img src="images/blog-icon-black.png" class="blog-sidenav" width="48" height="48" alt="image not found">
            <span class="sidenav-caption">Blog</span>
          </a>
        </li>
        <li class="sidenav-item">
          <a href="contact-me.html">
            <img src="images/contact-me-black.png" class="contact-me-sidenav" width="48" height="48" alt="image not found">
            <span class="sidenav-caption">Contact</span>
          </a>
        </li>
      </ul>
    </div> -->

    <main id="panel">
      <button class="toggle-button slideout-btn">
        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div class="parallax-container">
        <!-- grey-text text-lighten-4 -->
        <h1 class="title">Dan Scott</h1>
         <!-- grey-text text-lighten-3 -->
        <h2 class="subtitle">Software Engineering Student <span class="break">@ Sheffield Hallam University</span></h2>
        <?php include('includes/navbar.php'); ?>

        <!-- <div class="container nav-list">
          <ul>
            <li id="about-me">
              <a href="index.html" class="box active">
                <img src="images/about-me-icon.png" class="about-me-img" width="128" height="128" alt="image not found">
                <span class="caption">About Me</span>
              </a>
            </li>
            <li id="portfolio">
              <a href="portfolio.html">
                <img src="images/portfolio-icon-white.png" class="portfolio" width="128" height="128" alt="image not found">
                <span class="caption">Portfolio</span>
              </a>
            </li>
            <li id="blog">
              <a href="blog.html">
                <img src="images/blog-icon.png" class="blog" width="128" height="128" alt="image not found">
                <span class="caption">Blog</span>
              </a>
            </li>
            <li id="contact-me">
              <a href="contact-me.html">
                <img src="images/contact-me-icon.png" class="contact-me" width="128" height="128" alt="image not found">
                <span class="caption">Contact</span>
              </a>
            </li>
          </ul>
        </div> -->
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
            <h2 class="section-header">Latest Web project</h2>
            <p><a href="UK-Cycling-Events/index.php">Click here</a> to check out my latest (and only) web project</p>
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
