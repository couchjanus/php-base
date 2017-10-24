<?php
require_once realpath(__DIR__).'/../../views/head.php';
require_once realpath(__DIR__).'/../../views/nav.php';
?>

<div class="row">
        <div class="col-xs-12">
            <h2>Edit Post</h2>
            <form role="form" method="POST" action="/update">
            <input type="hidden" name="id" value= "<?php echo $result['id'];?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value= "<?php echo $result['title'];?>" >
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" rows="3" id="content" name="content"><?php echo $result['content'];?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
</div>
 
<?php
require_once realpath(__DIR__).'/../../views/footer.php';