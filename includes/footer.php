<?php
  require('conn.inc.php');

  $blogQuery = "SELECT PostID, PostTitle FROM Blog_Post ORDER BY PostDate DESC LIMIT 3";
  // $blogQuery = "SELECT PostID, PostTitle FROM Blog_Post WHERE PostID = 20";

  $stmt = $pdo->prepare($blogQuery);
  $stmt->execute();
?>

<footer>
  <div class="section container">
    <div class="row">
      <!-- <div class="col m3"></div>
      <div class="col m3">
        <h5 class="footer-headings">Recent Blog Posts</h5>
        <a href="">STAND IN BLOG</a>
      </div>
      <div class="col m3">
        <h5 class="footer-headings">Social</h5>
      </div>
      <div class="col m3"></div> -->
      <div class="col m2"></div>
      <div class="col s12 m4">
        <h5 class="footer-headings">Recent Blog Posts</h5>
        <?php
        if($stmt->rowCount() > 0){
          while($result = $stmt->fetchObject()){
            echo $result->BlogTitle;
            ?>
            <a href="blog.php?BlogID=<?php echo $result->PostID; ?>" id="recent-blog-posts"><?php echo $result->PostTitle; ?></a>

          <?php
          }
        }
        else{ ?>
            <a>NO RECENT BLOGS</a>
        <?php
        }
        ?>
      </div>
      <div class="col m2"></div>
      <div class="col s12 m4">
        <h5 class="footer-headings">Social</h5>
        <h5>
          <a href="https://twitter.com/Dan_Scott_"><i class="fa fa-twitter footer-icon" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/danscott97"><i class="fa fa-linkedin footer-icon" aria-hidden="true"></i></a>
          <a href="https://github.com/DJLad97"><i class="fa fa-github footer-icon" aria-hidden="true"></i></a>
        </h5>
      </div>
      <!-- <div class="col m1"></div> -->

    </div>


  </div>
  <div id="copyright">
    <p class="copyright-text">&nbsp; &copy; Dan Scott</p>
    <!-- <p id="licence">About Me icon made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></p> -->
  </div>
</footer>
