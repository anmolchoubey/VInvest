<?php
	include("bootstrap_cdn.php");
?>

<head>
	  	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	  	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<div class="container" style="margin-top: 10px;">
	<div class="row">
	<div class="panel panel-default">
        <div class="panel-heading"><h2 align=center>Describe your Business Plan</h2></div>
                <br/><ul>
                    <li>Don't forget to add tags to increase your post's visibility</li>
                    <li>Describe your idea beautifully using the advanced text editor</li>
                    <li>Click on publish to publish your post</li>
                </ul>
                <hr>
			    <div class="panel-body">

			     <!-- FORM STARTS HERE --> 
			      <form role="form" method="POST" action="newpost.php">
					  <div class="form-group">
                          <label class="control-label"><h3>Title</h3></label>
					    <input type="text" class="form-control" name="postTitle" >
					  </div>

					  <div class="form-group">
                          <label for="Description"><h3>Description : </h3></label>
  						<textarea class="form-control" rows="8" id="content" name="postDesc">
  							
  						</textarea>
  						<script type="text/javascript">
        					CKEDITOR.replace( 'content' );
      					</script>
					  </div>

					  <div class="form-group">
					    <label class="control-label"><h3>Tag</h3></label>
					    <input type="text" class="form-control" name="postTag"  >
					  </div>

				  	   <button type="submit" class="btn btn-success" name="submit">
				  	   		Publish 
				  	   	</button>
				</form>

				<!-- FORM ENDS HERE -->

			    </div>
			  </div>
			</div>
	</div>
</div>

<?php include("footer.php"); ?>
