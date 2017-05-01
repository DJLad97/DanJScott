<?php
  require('includes/conn.inc.php');
  $postID = $_GET['PostID'];
  $blogs = "SELECT * FROM Blog_Post WHERE PostID = :postID";

  $blogsQuery = $pdo->prepare($blogs);
  $blogsQuery->bindParam(':postID', $postID);
  $blogsQuery->execute();
  $blogResult = $blogsQuery->fetchObject()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('includes/head.php'); ?>
    <title>Blog :: Dan Scott</title>
  </head>
  <body>
    <?php include('includes/sidenav.php'); ?>

    <main id="panel">
      <?php include('includes/slideout-button.php'); ?>
      <div class="parallax-container">
        <!-- grey-text text-lighten-4 -->
        <h1 class="title"><?php echo $blogResult->PostTitle; ?></h1>
         <!-- grey-text text-lighten-3 -->
        <h2 class="subtitle">&nbsp;</h2>

        <?php include('includes/navbar.php'); ?>

       <div class="parallax">
         <img src="images/blog-image.png">
       </div>
      </div>


      <div class="section grey lighten-3">
        <div class="row container">
          <h1 class="section-header"><?php echo $blogResult->PostTitle; ?></h2>
          <?php
            ?>
              <p><?php echo $blogResult->PostContent;?></p>
        </div>
      </div>
      <!-- <div class="parallax-container">
        <div class="parallax"><img src="images/peak-dist-4 (fade).png"></div>
      </div> -->
      <?php include('includes/footer.php'); ?>
    </main>
    <script>
      $('#blog-link').addClass('active');
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
