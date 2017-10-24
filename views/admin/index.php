<?php
require_once realpath(__DIR__).'/../../views/head.php';
require_once realpath(__DIR__).'/../../views/nav.php';
?>
<div class="jumbotron">
        <h1>Admin Blog</h1>
</div>
<div class="row">
        <div class="col-xs-12">
            <?php 
            echo "<div class='col-lg-10'><h2>Post list</h2>";
            echo "<p><a class='btn btn-primary' "."href=/create"." role='button'>Add post &raquo;</a></p>";
            echo "<table>";
            echo "<tr><th>Title</th><th collspan=2>Action</th></tr>";
              foreach($result as $row) {
                echo "<tr>";
                  
                  echo "<td>".$row['title']."</td><td><a class='btn btn-primary' "."href=/edit?id=".$row['id']." role='button'>Edit post &raquo;</a></td>"."<td><a class='btn btn-primary' "."href=/delete?id=".$row['id']." role='button'>Delete post &raquo;</a></td>";
                  echo "</tr>";
              }
            echo "</table></div>";
            ?>
        </div>
</div>

<?php
require_once realpath(__DIR__).'/../../views/footer.php';