<?php
require_once realpath(__DIR__).'/../../views/head.php';
require_once realpath(__DIR__).'/../../views/nav.php';
?>
<div class="jumbotron">
        <h1>Admin Blog</h1>
</div>
<div class="row">
        <div class="col-xs-12">
            <h2>Post list</h2>
            <?php 
            echo "<p><a class='btn btn-primary' "."href=/create"." role='button'>Add post &raquo;</a></p>";

              foreach($result as $row) {
                  echo "<div class='col-lg-10'>";
                  echo "<p>".$row['title']."<a class='btn btn-primary' "."href=/edit?id=".$row['id']." role='button'>Edit post &raquo;</a>"."<a class='btn btn-primary' "."href=/delete?id=".$row['id']." role='button'>Delete post &raquo;</a></p></div>";
              }
            ?>
        </div>
</div>

<?php
require_once realpath(__DIR__).'/../../views/footer.php';