<!DOCTYPE html>

<html>
  <head>
    <title>Notes-up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" type="text" href = "css/main.css">
	<script>
	$(document).ready(function() {
		$("#add_new").click(function(){				
			window.location.assign("new.php");
		});
	});
	</script>
  </head>
  <body>
	<?php
		$conn = new mysqli(XXX, XXX, XXX, XXX);	
	?>
	<!--Nav bar code-->
	<div class = "container" id = "main_display">
		<nav class="navbar navbar-default" >
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="https://github.com/UMDHackers/Notes-up" target="_blank">note-up</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				<div id = "button_holder">
				  <!--<button type="button" id = "add" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">+</button>-->
				  <button type="button" id = "add_new" class="btn btn-info btn-sm">+</button>
				</div>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div><!--/.container-fluid -->
		</nav>
		<div class = "notes">
			<?php
				$sql = "SELECT title, stuff FROM notes";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    					//$result = array_reverse($result, true);
										
    					while($row = $result->fetch_assoc()) {
						$data[] = $row;
					}
					$data = array_reverse($data, true);
        				//foreach($result as $row) {
					foreach($data as $r) {
						echo "<h2>". $r["title"] . "</h2>";
						echo "<p>". $r["stuff"]. "</p>";
    					}
				}
			?>
		</div>
	</div>

<!--
	<div class="modal fade" id="myModal" role="dialog">
	  <div class="modal-dialog">
		<!-- Modal content
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">New note</h4>
		  </div>

		  <div class="modal-body">
			<form method = "post" action = "save.php">
			  <div class="form-group">
				<label for="email">Name:</label>
				<input type="email" class="form-control" name="name">
			  </div>
			  <div class="form-group">
				<label for="note">Note:</label>
				<textarea class="form-control" rows="5" name="note"></textarea>
			  </div>
			  <input type="submit" class="btn btn-default" data-dismiss = "modal" value="Submit"/>
			</form>
		  </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		  </div>
		</div>
	  </div>
	</div>
-->
  </body>
</html>
