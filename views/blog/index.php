<?php
require_once VIEWS.'includes/head.php';
require_once VIEWS.'includes/nav.php';
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

      foreach($result as $row) {
          echo "<div class='col-lg-10'>";
          echo "<h2>".$row['title']."</h2>";
          echo "<p><a class='btn btn-primary' "."href=/detail?id=".$row['id']." role='button'>View details &raquo;</a></p></div>";
      }
      ?>
        
      </div>
<?php
require_once VIEWS.'includes/footer.php';