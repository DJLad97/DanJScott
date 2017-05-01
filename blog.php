<?php
  require('includes/conn.inc.php');
  $blogs = "SELECT * FROM Blog_Post";

  $blogsQuery = $pdo->prepare($blogs);
  $blogsQuery->execute();

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
        <h1 class="title">Blog</h1>
         <!-- grey-text text-lighten-3 -->
        <h2 class="subtitle">&nbsp;</h2>

        <?php include('includes/navbar.php'); ?>

       <div class="parallax">
         <img src="images/blog-image.png">
       </div>
      </div>


      <div class="section grey lighten-3">
        <div class="row container">
          <?php
          if($blogsQuery->rowCount() > 0){
            while($blogResult = $blogsQuery->fetchObject()){
            ?>
            <div class="col s12 m6 l6 xl4">
              <div class="card small">
                <div class="card-image">
                  <img src="images/peak-dist-3 (fade).jpg">
                  <span class="card-title"><?php echo $blogResult->PostTitle; ?></span>
                </div>
                <div class="card-content">
                  <p class="card-desc">
                    <?php
                    for($i = 0; $i < 140; $i++){
                      echo $blogResult->PostContent[$i];
                    }
                    echo '...'
                    ?>
                  </p>
                </div>
                <div class="card-action">
                  <a href="blog-post.php?PostID=<?php echo $blogResult->PostID; ?>">VIEW</a>
                </div>
              </div>
            </div>
            <?php
            }
          }
          else{ ?>
            <h1>NO BLOGS</h1>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="images/peak-dist-4 (fade).png"></div>
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
