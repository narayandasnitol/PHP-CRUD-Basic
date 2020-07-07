<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete</title>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

<body>

<div class="container">
   <h2 class="text-danger"><strong>PHP LAB Offline</strong></h2>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Insert</a>
  </li>

    <li class="nav-item">
      <a class="nav-link active" href="delete.php">Delete</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="display.php">Display</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>

  </ul>
</div>

<div class="container h-100 d-flex justify-content-center">
        <div class="jumbotron my-auto">
            <div class="form-group row">
              <h4 class="text-danger"><strong>Delete Data</strong></h4>
            </div>

            <form action="delete1.php" method="POST" role="form">

      <div class="form-group row">
        <div class="col-xs-2">
        <label for="fname">Enter ID:</label>
        <input type="text" class="form-control" id="efname" placeholder="Enter ID" name="ID">
      </div>
  </div>

    
  <div class="form-group row">
        <div class="col-xs-2">
          <button type="submit" class="btn btn-danger">Confirm</button>
           </div> 
  </div>

     
    </form>
        </div>
    </div>

    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
