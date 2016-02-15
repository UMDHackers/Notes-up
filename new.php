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
		$("#Cancel").click(function(){				
			window.location.assign("index.php");
		});
	});
	</script>
  </head>
 <body>

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
				  <button type="button" id = "Cancel" class="btn btn-info btn-sm">x</button>
				</div>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div><!--/.container-fluid -->
		</nav>
		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="name" class="form-control" name="name">
		  </div>
		  <div class="form-group">
			<label for="note">Note:</label>
			<textarea class="form-control" rows="5" name="note"></textarea>
		  </div>
		  <input type="submit" class="btn btn-default" data-dismiss = "modal" value="Submit"/>		
		</form>
	</div>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   $name = $_POST["name"];
		   $note = $_POST["note"];
		   $conn = new mysqli("XXX", "XXX", "XXX","XXX");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "INSERT into notes (title, stuff) VALUES ('" . $name ."','". $note. " ')"; 
			if ($conn->query($sql) === TRUE) {
    				#echo "New record created successfully";
				header('Location: /index.php');
				exit;
			} else {
   				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}	
	?>
  </body>
</html>
