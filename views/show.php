<?php
require_once realpath(__DIR__).'/../views/head.php';
require_once realpath(__DIR__).'/../views/nav.php';
?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff Blog!</h1>
        <h2><?=$_SERVER['REQUEST_URI']?></h2>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <?php 
      ?>

      <div class="row">
      <?php 
          echo "<div class='col-lg-10'>";
          echo "<h2>".$result['title']."</h2>";
          echo "<div>".$result['content']."</div>";
          echo "<p><a class='btn btn-primary' "."href='/blog'role='button'>Back to list &raquo;</a></p></div>";
      ?>
        
      </div>
<?php
require_once realpath(__DIR__).'/../views/footer.php';