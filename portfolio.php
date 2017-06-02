<?php
  require('includes/conn.inc.php');

  $projects = "SELECT * FROM Projects";
  $projImages = "SELECT ProjExtraImgs FROM Projects WHERE ProjID = :projID";
  $webProjects = "SELECT * FROM Projects WHERE ProjType = 'web'";
  $gameProjects = "SELECT * FROM Projects WHERE ProjType = 'game'";

  $projectsQuery = $pdo->prepare($projects);
  $projectsQuery->execute();

  // $projImgQuery = $pdo->prepare($projects);
  // $projImgQuery->execute();
  // $imgResult = $projImgQuery->fetchObject();

  $webQuery = $pdo->prepare($webProjects);
  $webQuery->execute();
  $numWebProjects = $webQuery->rowCount();

  $gameQuery = $pdo->prepare($gameProjects);
  $gameQuery->execute();
  $numGameProjects = $gameQuery->rowCount();
  //$resultsWeb = $webQuery->fetchObject();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/head.php'); ?>
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.5/jquery.jcarousel.js"></script>
  <title>Portfolio :: Dan Scott</title>
</head>
<body>
  <?php while($result = $projectsQuery->fetchObject()){
    $projImgQuery = $pdo->prepare($projImages);
    $projImgQuery->bindParam(':projID', $result->ProjID);
    $projImgQuery->execute();

    $imgResult = $projImgQuery->fetchObject();

    ?>
    <div id="<?php echo $result->ProjID?>" class="modal">
      <div class="modal-content">
        <?php

        if($imgResult->ProjExtraImgs != NULL){
          $extraImages = explode(',',  $imgResult->ProjExtraImgs); ?>
          <div class="container">
            <div class="slider">
              <ul class="slides">
                <?php

                // if($imgResult->ProjExtraImgs != NULL){
                //   $extraImages = explode(',',  $imgResult->ProjExtraImgs);

                  for($i = 0; $i < count($extraImages); $i++){
                    ?>
                    <li class="carousel-item">
                      <img src="images/<?php echo $extraImages[$i]; ?>" width="640" height="360" alt="">
                    </li>

                    <?php
                  }
                ?>
              </ul>
            </div>
          </div>
          <?php } ?>
        <h4><?php echo $result->ProjName?></h4>
        <p><?php echo $result->ProjDesc?></p>
      </div>
    </div>
  <?php }
  ?>
  <?php include('includes/sidenav.php'); ?>
  <main id="panel">
    <?php include('includes/slideout-button.php'); ?>

    <div class="parallax-container">
      <!-- grey-text text-lighten-4 -->
      <h1 class="title">Portfolio</h1>
       <!-- grey-text text-lighten-3 -->
      <h2 class="subtitle">Here you'll find out what I've been working on.</h2>

      <?php include('includes/navbar.php'); ?>

     <div class="parallax">
       <img src="images/portfolio-bg-image.png">
     </div>
    </div>

    <div class="section grey lighten-3">
      <div class="container">
        <div class="row">
          <h1 class="projects-header" id="web-header">
            Web Projects&nbsp;<span class="num-projects">(<?php echo $numWebProjects; ?>)</span>
            <i class="fa fa-angle-up fa-lg indicator" aria-hidden="true"></i>
          </h1>
            <div id="web-projects">
              <?php
              while($webResult = $webQuery->fetchObject()){
                ?>
                <div class="col s12 m6 l6 xl4">
                  <div class="card small">
                    <div class="card-image">
                      <img src="images/<?php echo $webResult->ProjImage; ?>">
                      <span class="card-title"><?php echo $webResult->ProjName; ?></span>
                    </div>
                    <div class="card-content">
                      <p class="card-desc">
                        <!-- A website where you can view and sign up to MTB and Road races. -->
                        <?php echo $webResult->ProjMiniDesc; ?>
                      </p>
                    </div>
                    <div class="card-action">
                      <a href="/<?php echo $webResult->ProjLink; ?>">VIEW</a>
                      <a href="#<?php echo $webResult->ProjID?>" class="card-link">MORE INFO</a>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
            </div>
        </div>
        <hr class="colored-border">
        <div class="row">
          <h1 class="projects-header" id="game-header">
            Games&nbsp;<span class="num-projects">(<?php echo $numGameProjects; ?>)</span>
            <i class="fa fa-angle-up fa-lg indicator" aria-hidden="true"></i>
          </h1>
            <div id="game-projects">
              <?php
              while($gameResult = $gameQuery->fetchObject()){
                ?>
                <div class="col s12 m6 l6 xl4">
                  <div class="card small">
                    <div class="card-image">
                      <img src="images/<?php echo $gameResult->ProjImage; ?>">
                      <?php if($gameResult->DarkText == 1) { ?>
                        <span class="card-title dark-card-text"><?php echo $gameResult->ProjName; ?></span>
                        <?php
                      }
                      else { ?>
                        <span class="card-title"><?php echo $gameResult->ProjName; ?></span>
                        <?php } ?>
                      </div>
                      <div class="card-content">
                        <p class="card-desc">
                          <?php echo $gameResult->ProjMiniDesc; ?>
                        </p>
                      </div>
                      <div class="card-action">
                        <a href="#<?php echo $gameResult->ProjID; ?>">VIEW</a>
                        <!-- <a href="">MORE INFO</a> -->
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
            </div>
        </div>
      </div>
    </div>
    <!-- <div class="parallax-container">
      <div class="parallax"><img src="images/peak-dist (fade).jpg"></div>
    </div> -->
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
