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
              <button type="button" id = "add" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">+</button>
            </div>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <div class = "notes">

    </div>
</div>


  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New note</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="email" class="form-control" id="Name">
              </div>
              <div class="form-group">
                <label for="note">Note:</label>
                <textarea class="form-control" rows="5" id="note"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Save</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>

      </div>
  </div>


  </body>
</html>
