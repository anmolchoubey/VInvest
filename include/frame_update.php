<?php
	include("bootstrap_cdn.php");
?>

<head>
	  	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<div class="container" style="margin-top:20px;">
	<div class="row">
	<div class="panel panel-default">
        <div class="panel-heading"><h3 align="center">Update Post</h3></div>
			    <div class="panel-body">

			     <!-- FORM STARTS HERE -->
			      <form role="form" method="POST" action=<?php echo "update.php?id=".$id ; ?>>
					  <div class="form-group">
                          <label class="control-label"><h4>Title</h4></label>
					    <input type="" class="form-control" name="postTitle" value=<?php  echo $title; ?>>
					  </div>

					  <div class="form-group">
                          <label for="Description"><h4>Description : </h4></label>
  						<textarea class="form-control" rows="8" id="content" name="postDesc">
  							<?php  echo $desc; ?>
  						</textarea>
  						<script type="text/javascript">
        					CKEDITOR.replace( 'content' );
      					</script>
					  </div>

					  <div class="form-group">
                          <label class="control-label"><h4>Tag</h4></label>
					    <input type="text" class="form-control" name="postTag" value=<?php  echo $tags; ?> >
					  </div>

				  	   <button type="submit" class="btn btn-success" name="submit">
				  	   	Update
				  	   </button>
				  </form>

				<!-- FORM ENDS HERE -->

			  </div>
	</div>
	</div>
</div>

<?php include("footer.php"); ?>
