<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
  <h2 class="text-danger"><strong>PHP LAB Offline</strong></h2>

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="home.php">Insert</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="delete.php">Delete</a>
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
              <h4 class="text-success"><strong>Registration Form</strong></h4>
            </div>

            <form action="insert.php" method="POST" role="form">

              <div class="form-group row">
                  <div class="col-xs-2">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="Fname">
                  </div>
              </div>

              <div class="form-group row">
                <div class="col-xs-2">
                  <label for="lname">Last Name:</label>
                  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="Lname">
                </div>
              </div>

              
              <div class="form-group row">
                <div class="col-xs-2">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" placeholder="Enter Age" name="Age">
              </div>
            </div>

              <div class="form-group row">
                <div class="col-xs-2">
                    <label for="address">Address:</label>
                   <input type="text" class="form-control" id="address" placeholder="Enter Address" name="Address">
                </div> 
              </div>

            <div class="form-group row">
                <div class="col-xs-2">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div> 
            </div>
  
         </form>
      </div>
</div>
    
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
